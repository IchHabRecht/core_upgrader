<?php
declare(strict_types = 1);

return [
    'v8.7' => [
        'wizardDoneToRegistry' => [
            'wizardDoneToRegistry' => \TYPO3\CMS\v87\Install\Updates\WizardDoneToRegistry::class,
        ],
        'frontendUserImageUpdateWizard' => [
            'frontendUserImageUpdateWizard' => \TYPO3\CMS\v87\Install\Updates\FrontendUserImageUpdateWizard::class,
        ],
        'databaseRowsUpdateWizard' => [
            'databaseRowsUpdateWizard' => \TYPO3\CMS\v87\Install\Updates\DatabaseRowsUpdateWizard::class,
        ],
        'commandLineBackendUserRemovalUpdate' => [
            'commandLineBackendUserRemovalUpdate' => \TYPO3\CMS\v87\Install\Updates\CommandLineBackendUserRemovalUpdate::class,
        ],
        'fillTranslationSourceField' => [
            'fillTranslationSourceField' => \TYPO3\CMS\v87\Install\Updates\FillTranslationSourceField::class,
        ],
        'sectionFrameToFrameClassUpdate' => [
            'sectionFrameToFrameClassUpdate' => \TYPO3\CMS\v87\Install\Updates\SectionFrameToFrameClassUpdate::class,
        ],
        'splitMenusUpdate' => [
            'splitMenusUpdate' => \TYPO3\CMS\v87\Install\Updates\SplitMenusUpdate::class,
        ],
        'bulletContentElementUpdate' => [
            'bulletContentElementUpdate' => \TYPO3\CMS\v87\Install\Updates\BulletContentElementUpdate::class,
        ],
        'uploadContentElementUpdate' => [
            'uploadContentElementUpdate' => \TYPO3\CMS\v87\Install\Updates\UploadContentElementUpdate::class,
        ],
        'migrateFscStaticTemplateUpdate' => [
            'migrateFscStaticTemplateUpdate' => \TYPO3\CMS\v87\Install\Updates\MigrateFscStaticTemplateUpdate::class,
        ],
        'fileReferenceUpdate' => [
            'fileReferenceUpdate' => \TYPO3\CMS\v87\Install\Updates\FileReferenceUpdate::class,
        ],
        'migrateFeSessionDataUpdate' => [
            'migrateFeSessionDataUpdate' => \TYPO3\CMS\v87\Install\Updates\MigrateFeSessionDataUpdate::class,
        ],
        'compatibility7Extension' => [
            'compatibility7Extension' => \TYPO3\CMS\v87\Install\Updates\Compatibility7ExtractionUpdate::class,
        ],
        'formLegacyExtractionUpdate' => [
            'formLegacyExtractionUpdate' => \TYPO3\CMS\v87\Install\Updates\FormLegacyExtractionUpdate::class,
        ],
        'rtehtmlareaExtension' => [
            'rtehtmlareaExtension' => \TYPO3\CMS\v87\Install\Updates\RteHtmlAreaExtractionUpdate::class,
        ],
        'sysLanguageSorting' => [
            'sysLanguageSorting' => \TYPO3\CMS\v87\Install\Updates\LanguageSortingUpdate::class,
        ],
    ],
];
