<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationFormType extends AbstractType
{
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $translator = $this->translator;

        $builder
            ->add(
                'email',
                EmailType::class,
                [
                    'label' => $translator->trans('email', [], 'messages'),
                    'required' => true,
                    'attr' => ['placeholder' => $translator->trans('set_email', [], 'messages')],
                ])
            ->add(
                'username',
                TextType::class,
                [
                    'label' => $translator->trans('username', [], 'messages'),
                    'required' => true,
                    'attr' => ['placeholder' => $translator->trans('set_username', [], 'messages')],
                ])
            ->add(
                'plainPassword',
                PasswordType::class,
                [
                    'label' => $translator->trans('password', [], 'messages'),
                    'required' => true,
                    'attr' => ['placeholder' => $translator->trans('set_password', [], 'messages')],
                ])
            ->add('termsAccepted',
                CheckboxType::class,
                [
                    'label' => $translator->trans('terms_accepted', [], 'messages'),
                    'mapped' => false,
                    'constraints' => new IsTrue(),
                ])
        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
