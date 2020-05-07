<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "core_upgrader".
 *
 * Auto generated 07-05-2020 14:32
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
  'version' => '0.1.0',
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
  '_md5_values_when_last_written' => 'a:7:{s:7:"LICENSE";s:4:"b234";s:9:"README.md";s:4:"905d";s:13:"composer.json";s:4:"aec4";s:12:"ext_icon.png";s:4:"0ef7";s:16:"phpunit.xml.dist";s:4:"041c";s:24:"sonar-project.properties";s:4:"4769";s:36:"Resources/Public/Icons/Extension.svg";s:4:"960d";}',
);

