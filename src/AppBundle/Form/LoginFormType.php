<?php

    declare(strict_types=1);

    namespace AppBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\HiddenType;
    use Symfony\Component\Form\Extension\Core\Type\PasswordType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
    use AppBundle\Controller\MainController;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class LoginFormType extends AbstractType
    {
        /**
         * @inheritDoc
         */
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $main = new MainController();
            $builder
                ->add("_username", TextType::class, [
                    "attr" => [
                        "placeholder" => "Type your username",
                        "autofocus"   => true,
                    ]
                ])
                ->add("_password", PasswordType::class, [
                    "attr" => [
                        "placeholder" => "Type your password",
                        "autofocus"   => true,
                    ]
                ])
                ->add("_target_path", HiddenType::class)
                ->add('_submit', SubmitType::class, [
                    "label" => $main->getImg(6, "logo"),
                    "attr" => [
                        "class" => "form_btn"
                    ],
                ]);
        }

        /**
         * @inheritDoc
         */
        public function getBlockPrefix()
        {
            // we need to set this to an empty string as we want _username as input name
            // instead of login_form[_username] to work with the form authenticator out
            // of the box
            return '';
        }

        /**
         * @inheritDoc
         */
        public function configureOptions(OptionsResolver $resolver)
        {

        }
    }
