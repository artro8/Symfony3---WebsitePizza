<?php

namespace PizzaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ContactType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name', TextType::class, array(
                    'label' => 'Imię i nazwisko' 
                ))
                ->add('phone', IntegerType::class, array(
                    'label' => 'Telefon'
                ))
                ->add('email', EmailType::class, array(
                    'label' => 'Email'
                ))
                ->add('message', TextareaType::class, array(
                    'label' => 'Wiadomość'
                ))
                ->add('save', SubmitType::class, array(
                    'label' => 'Wyślij zamówienie'
                ));
    }
    
    public function getName() {
        return 'contact_form';
    }
    
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver) {
        $resolver->setDefaults(array(
           'data_class' => 'PizzaBundle\Entity\Order'
       ));
    }
    
}
