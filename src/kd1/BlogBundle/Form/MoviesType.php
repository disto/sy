<?php

namespace kd1\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MoviesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('releaseYear')
            ->add('original')
            ->add('label')
            ->add('backupLocation')
            ->add('onDisk')
            ->add('diskLocation')
            ->add('viewed')
            ->add('inCollection')
            ->add('burnAgain')
            ->add('filename')
            ->add('genre1')
            ->add('genre2')
            ->add('genre3')
            ->add('trailer')
            ->add('imdbid')
            ->add('archiveid')
            ->add('storyline')
            ->add('runtime')
            ->add('entryDateline')
            ->add('ratingImdb')
            ->add('ratingMoviemeter')
            ->add('dateCinema')
            ->add('dateDvd')
            ->add('moviemeterId')
            ->add('wishlist')
            ->add('retrieveStatus')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'kd1\BlogBundle\Entity\Movies'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kd1_blogbundle_movies';
    }
}
