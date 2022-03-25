<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace TYPO3\CMS\v95\Install\Updates;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Install\Updates\AbstractDownloadExtensionUpdate;
use TYPO3\CMS\Install\Updates\Confirmation;
use TYPO3\CMS\Install\Updates\ExtensionModel;

/**
 * Installs and downloads EXT:typo3db_legacy
 * @internal This class is only meant to be used within EXT:install and is not part of the TYPO3 Core API.
 */
class Typo3DbExtractionUpdate extends AbstractDownloadExtensionUpdate
{
    /**
     * @var \TYPO3\CMS\Install\Updates\Confirmation
     */
    protected $confirmation;

    public function __construct()
    {
        $this->extension = new ExtensionModel(
            'typo3db_legacy',
            '$GLOBALS[\'TYPO3_DB\'] compatibility layer',
            '1.1.1',
            'friendsoftypo3/typo3db-legacy',
            'This extension provides the well-known database API $GLOBALS[\'TYPO3_DB\'] used in previous TYPO3 versions for extensions that still rely on it.'
        );

        $this->confirmation = new Confirmation(
            'Are you sure?',
            'You should install EXT:typo3db_legacy only if you really need it. ' . $this->extension->getDescription(),
            false
        );
    }

    /**
     * Return a confirmation message instance
     *
     * @return \TYPO3\CMS\Install\Updates\Confirmation
     */
    public function getConfirmation(): Confirmation
    {
        return $this->confirmation;
    }

    /**
     * Return the identifier for this wizard
     * This should be the same string as used in the ext_localconf class registration
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return 'typo3DbLegacyExtension';
    }

    /**
     * Return the speaking name of this wizard
     *
     * @return string
     */
    public function getTitle(): string
    {
        return 'Install extension "typo3db_legacy" from TER';
    }

    /**
     * Return the description for this wizard
     *
     * @return string
     */
    public function getDescription(): string
    {
        return 'The old database API populated as $GLOBALS[\'TYPO3_DB\'] has been extracted into'
               . ' the TYPO3 Extension Repository. This update downloads the TYPO3 extension typo3db_legacy from the TER.'
               . ' Use this if you\'re dealing with extensions in the instance that still rely on the old database API.';
    }

    /**
     * Is an update necessary?
     * Is used to determine whether a wizard needs to be run.
     *
     * @return bool
     */
    public function updateNecessary(): bool
    {
        return !ExtensionManagementUtility::isLoaded($this->extension->getKey());
    }

    /**
     * Returns an array of class names of Prerequisite classes
     * This way a wizard can define dependencies like "database up-to-date" or
     * "reference index updated"
     *
     * @return string[]
     */
    public function getPrerequisites(): array
    {
        return [];
    }
}
