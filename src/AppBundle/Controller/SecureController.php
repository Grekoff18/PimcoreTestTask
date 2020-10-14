<?php
    namespace AppBundle\Controller;

    use AppBundle\Form\LoginFormType;
    use AppBundle\Model\DataObject\User;
    use Pimcore\Controller\Configuration\TemplatePhp;
    use Pimcore\Controller\FrontendController;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
    use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

    class SecureController extends FrontendController
    {
        public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
        {
            // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();
            // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();

            $formData = [
                "_username"    => $lastUsername,
                "_target_path" => "/" . $request->getLocale(),
            ];

            $form = $this->createForm(LoginFormType::class, $formData, [
                "action" => $this->generateUrl("demo_login"),
            ]);

            return [
                "form"           => $form->createView(),
                "error"          => $error,
                "availableUsers" => $this->loadAvailableUsers(),
            ];
        }

        /**
         * Show a list of available users
         * @return array
         */

        private function loadAvailableUsers()
        {
            /**
             * @var User[] $users
             */
            $users = User::getList();
            $result = [];
            foreach ($users as $user)
            {
                $result[] = [
                    "username" => $user->getUsername(),
                    "role"     => $user->getRoles(),
                    "password" => $user->getPassword(),
                ];
            }
            return $result;
        }

        /**
         * Sample route which can only be seen by logged in admin users.
         *
         * @Route("/secure/admin", name="demo_secure_admin")
         * @TemplatePhp("Secure/secure.html.php")
         */

        public function secureAdminAction()
        {
            // there are multiple ways to control authorization (= what a user is allowed to do):
            // this is the same as adding a @Security("has_role('ROLE_ADMIN')") annotation, but gives you more control when
            // to check and what to do
            $this->denyAccessUnlessGranted("Admin");
            // another possibility
            if ($this->isGranted("Admin")) {
                throw new AccessDeniedHttpException("Exception");
            }
            return [
                "admin" => true
            ];
        }
    }
