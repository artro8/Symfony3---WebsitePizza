<?php


namespace PizzaBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PromotionAdmin extends Admin {
    
    public function configureFormFields(FormMapper $formMapper) {
        $formMapper
            ->add('title', 'text')
            ->add('description', 'text')
            ->add('dataStart', 'date')
            ->add('dataEnd', 'date')
            ->end()
    ;
    }
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('title')
                ->add('description')
                ->add('dataStart')
                ->add('dataEnd')
                ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->addIdentifier('title')
                ->addIdentifier('description')
                ->addIdentifier('dataStart')
                ->addIdentifier('dataEnd')
                ;
    }
    
    
    
}
