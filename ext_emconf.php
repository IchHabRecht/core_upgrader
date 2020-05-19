<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "core_upgrader".
 *
 * Auto generated 19-05-2020 15:28
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Core upgrader',
  'description' => 'Run upgrade wizards for multiple TYPO3 versions at once',
  'category' => 'cli',
  'author' => 'Nicole Cordes',
  'author_email' => 'typo3@cordes.co',
  'author_company' => 'biz-design',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearcacheonload' => 0,
  'version' => '1.0.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.4.0-10.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:32:{s:9:"ChangeLog";s:4:"49eb";s:7:"LICENSE";s:4:"b234";s:9:"README.md";s:4:"642f";s:13:"composer.json";s:4:"b3c8";s:12:"ext_icon.png";s:4:"0ef7";s:17:"ext_localconf.php";s:4:"3506";s:16:"phpunit.xml.dist";s:4:"041c";s:24:"sonar-project.properties";s:4:"4769";s:34:"Classes/Command/UpgradeCommand.php";s:4:"2570";s:50:"Classes/Updates/v87/BulletContentElementUpdate.php";s:4:"bb9a";s:59:"Classes/Updates/v87/CommandLineBackendUserRemovalUpdate.php";s:4:"07b5";s:54:"Classes/Updates/v87/Compatibility7ExtractionUpdate.php";s:4:"bfba";s:48:"Classes/Updates/v87/DatabaseRowsUpdateWizard.php";s:4:"f83c";s:43:"Classes/Updates/v87/FileReferenceUpdate.php";s:4:"c7c1";s:50:"Classes/Updates/v87/FillTranslationSourceField.php";s:4:"e8be";s:50:"Classes/Updates/v87/FormLegacyExtractionUpdate.php";s:4:"1971";s:53:"Classes/Updates/v87/FrontendUserImageUpdateWizard.php";s:4:"f15a";s:45:"Classes/Updates/v87/LanguageSortingUpdate.php";s:4:"8d07";s:50:"Classes/Updates/v87/MigrateFeSessionDataUpdate.php";s:4:"6db7";s:54:"Classes/Updates/v87/MigrateFscStaticTemplateUpdate.php";s:4:"6bf2";s:51:"Classes/Updates/v87/RteHtmlAreaExtractionUpdate.php";s:4:"11bf";s:54:"Classes/Updates/v87/SectionFrameToFrameClassUpdate.php";s:4:"8c83";s:40:"Classes/Updates/v87/SplitMenusUpdate.php";s:4:"6633";s:50:"Classes/Updates/v87/UploadContentElementUpdate.php";s:4:"a5bc";s:44:"Classes/Updates/v87/WizardDoneToRegistry.php";s:4:"3d14";s:51:"Classes/Updates/v87/RowUpdater/ImageCropUpdater.php";s:4:"4009";s:50:"Classes/Updates/v87/RowUpdater/L10nModeUpdater.php";s:4:"770a";s:54:"Classes/Updates/v87/RowUpdater/RowUpdaterInterface.php";s:4:"eab6";s:55:"Classes/Updates/v87/RowUpdater/RteLinkSyntaxUpdater.php";s:4:"fbef";s:26:"Configuration/Commands.php";s:4:"ad58";s:26:"Configuration/Upgrades.php";s:4:"c6a1";s:36:"Resources/Public/Icons/Extension.svg";s:4:"960d";}',
);

