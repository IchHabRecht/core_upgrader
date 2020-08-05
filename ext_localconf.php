<?php

defined('TYPO3_MODE') || die();

call_user_func(function () {
    $upgradeWizards = require \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName('EXT:core_upgrader/Configuration/Upgrades.php');

    foreach ($upgradeWizards as $versionUpgrades) {
        foreach ($versionUpgrades as $key => $upgradeArray) {
            foreach ($upgradeArray as $identifier => $class) {
                if (!isset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][$key])) {
                    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][$key] = $class;
                }
            }
        }
    }
});
