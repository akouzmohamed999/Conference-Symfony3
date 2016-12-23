<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 11/12/2016
 * Time: 15:34
 */

namespace MOHA\CoferenceBundle\Doctrine;


use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping\Entity;
use MOHA\CoferenceBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class HashPasswordListner implements EventSubscriber
{

    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return array
     */

    public function __construct(UserPasswordEncoder $encoder)
    {
        $this->passwordencoder = $encoder;
    }

    public function getSubscribedEvents(){

        return ['prePersist','preUpdate'];
    }

    public function prePersist(LifecycleEventArgs $args){

        $entity = $args->getEntity();
        if(!$entity instanceof User){
            return null;
        }
      $this->encodePassword($entity);
    }


    public function preUpdate(LifecycleEventArgs $args){

        $entity = $args->getEntity();
        if(!$entity instanceof User){
            return null;
        }
        $this->encodePassword($entity);

        //insertion dans la base de données apres mise a jour

        $em = $args->getEntityManager();
        $meta = $em->getClassMetadata(get_class($entity));
        $em->getUnitOfWork()->recomputeSingleEntityChangeSet($meta, $entity);
    }

    /**
     * @param User $entity
     */
    public function encodePassword(User $entity){

        if (!$entity->getPlainPassword()) {
            return;
        }

        $encoded = $this->passwordencoder->encodePassword($entity,$entity->getPlainPassword());
        $entity->setPassword($encoded);
    }


}