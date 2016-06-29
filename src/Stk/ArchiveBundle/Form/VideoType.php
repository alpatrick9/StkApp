<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/29/16
 * Time: 3:15 PM
 */

namespace Stk\ArchiveBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class,[
                'label'=>'Titre du video'
            ])
            ->add('iframe',TextareaType::class,[
                'label'=>'Iframe correspondant au video'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>'Stk\ArchiveBundle\Entity\Video'
        ]);
    }

}