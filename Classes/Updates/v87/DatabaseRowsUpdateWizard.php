<?php
declare(strict_types = 1);
namespace TYPO3\CMS\v87\Install\Updates;

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

use TYPO3\CMS\v87\Install\Updates\RowUpdater\ImageCropUpdater;
use TYPO3\CMS\v87\Install\Updates\RowUpdater\L10nModeUpdater;
use TYPO3\CMS\v87\Install\Updates\RowUpdater\RteLinkSyntaxUpdater;

/**
 * This is a generic updater to migrate content of TCA rows.
 *
 * Multiple classes implementing interface "RowUpdateInterface" can be
 * registered here, each for a specific update purpose.
 *
 * The updater fetches each row of all TCA registered tables and
 * visits the client classes who may modify the row content.
 *
 * The updater remembers for each class if it run through, so the updater
 * will be shown again if a new updater class is registered that has not
 * been run yet.
 *
 * A start position pointer is stored in the registry that is updated during
 * the run process, so if for instance the PHP process runs into a timeout,
 * the job can restart at the position it stopped.
 * @internal This class is only meant to be used within EXT:install and is not part of the TYPO3 Core API.
 */
class DatabaseRowsUpdateWizard extends \TYPO3\CMS\Install\Updates\DatabaseRowsUpdateWizard
{
    /**
     * @var array Single classes that may update rows
     */
    protected $rowUpdater = [
        L10nModeUpdater::class,
        ImageCropUpdater::class,
        RteLinkSyntaxUpdater::class,
    ];

    /**
     * @return string Unique identifier of this updater
     */
    public function getIdentifier(): string
    {
        return 'databaseRowsUpdateWizard87';
    }
}
