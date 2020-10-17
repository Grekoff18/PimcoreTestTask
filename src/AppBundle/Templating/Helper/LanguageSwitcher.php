<?php

    declare(strict_types=1);

    namespace AppBundle\Templating\Helper;

    use Pimcore\Model\Document;
    use Pimcore\Model\Document\Service;
    use Pimcore\Tool;
    use Symfony\Component\Templating\Helper\Helper;

    class LanguageSwitcher extends Helper
    {
        /**
         * @var Service|Service\Dao
         */
        private $documentService;

        public function __construct(Service $documentService)
        {
            $this->documentService = $documentService;
        }

        /**
         * @inheritDoc
         */
        public function getName()
        {
            return 'languageSwitcher';
        }

        public function getLocalizedLinks(Document $document): array
        {
            $translations = $this->documentService->getTranslations($document);

            $links = [];
            foreach (Tool::getValidLanguages() as $language) {
                $target = '/' . $language;

                if (isset($translations[$language])) {
                    $localizedDocument = Document::getById($translations[$language]);
                    if ($localizedDocument) {
                        $target = $localizedDocument->getFullPath();
                    }
                }

                $links[$target] = \Locale::getDisplayLanguage($language);
            }

            return $links;
        }
    }
