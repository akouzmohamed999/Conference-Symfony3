<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 11/12/2016
 * Time: 00:08
 */

namespace MOHA\CoferenceBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginForm extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder->add("_username")->add("_password",PasswordType::class);
        }
}