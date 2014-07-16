<?php

namespace App\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class UserType extends AbstractType
{
    
   
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('enabled', 'checkbox')
            ->add('username')
                
            ->add('content', 'textarea', array(
               'attr' => array('cols' => '5', 'rows' => '5')
            ))
                
            ->add('email')
            ->add('password', 'password')
            ->add('plainPassword', 'password')
//            ->add('groups','collection', array(
//                    'label' => 'groupes',                  
//                    'options' => array(
//                     'multiple' => true,
//                     'expanded'  => false,
//                        ),
//                  'required'  => true,
//                        ))
//            ->add('Valider le nouvel utilisateur', 'submit')
        ;
    }
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\AdminBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_adminbundle_user';
    }
}
