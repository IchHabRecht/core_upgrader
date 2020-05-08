<?php
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

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Install\Updates\DatabaseUpdatedPrerequisite;
use TYPO3\CMS\Install\Updates\UpgradeWizardInterface;

/**
 * Migrate the field 'section_frame' for all content elements to 'frame_class'
 * @internal This class is only meant to be used within EXT:install and is not part of the TYPO3 Core API.
 */
class SectionFrameToFrameClassUpdate implements UpgradeWizardInterface
{
    /**
     * @return string Unique identifier of this updater
     */
    public function getIdentifier(): string
    {
        return 'sectionFrameToFrameClassUpdate';
    }

    /**
     * @return string Title of this updater
     */
    public function getTitle(): string
    {
        return 'Migrate the field "section_frame" for all content elements to "frame_class"';
    }

    /**
     * @return string Longer description of this updater
     */
    public function getDescription(): string
    {
        return 'Section frames were used to control the wrapping of each content element in the frontend '
            . 'output, stored as integers in the database. To get rid of a nessesary mapping of those values we '
            . 'are now storing strings you can easily adjust that will simply passed to the rendering.';
    }

    /**
     * Checks if an update is needed
     *
     * @return bool Whether an update is needed (TRUE) or not (FALSE)
     */
    public function updateNecessary(): bool
    {
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tt_content');
        $tableColumns = $connection->getSchemaManager()->listTableColumns('tt_content');
        // Only proceed if section_frame field still exists
        if (!isset($tableColumns['section_frame'])) {
            return false;
        }
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tt_content');
        $queryBuilder->getRestrictions()->removeAll();
        $elementCount = $queryBuilder->count('uid')
            ->from('tt_content')
            ->where(
                $queryBuilder->expr()->gt('section_frame', 0)
            )
            ->execute()
            ->fetchColumn(0);
        return (bool)$elementCount;
    }

    /**
     * @return string[] All new fields and tables must exist
     */
    public function getPrerequisites(): array
    {
        return [
            DatabaseUpdatedPrerequisite::class
        ];
    }

    /**
     * Performs the database update
     *
     * @return bool
     */
    public function executeUpdate(): bool
    {
        $connection = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tt_content');
        $queryBuilder = $connection->createQueryBuilder();
        $queryBuilder->getRestrictions()->removeAll();
        $statement = $queryBuilder->select('uid', 'section_frame')
            ->from('tt_content')
            ->where(
                $queryBuilder->expr()->gt('section_frame', 0)
            )
            ->execute();
        while ($record = $statement->fetch()) {
            $queryBuilder = $connection->createQueryBuilder();
            $queryBuilder->update('tt_content')
                ->where(
                    $queryBuilder->expr()->eq(
                        'uid',
                        $queryBuilder->createNamedParameter($record['uid'], \PDO::PARAM_INT)
                    )
                )
                ->set('section_frame', 0, false)
                ->set('frame_class', $this->mapSectionFrame($record['section_frame']));
            $queryBuilder->execute();
        }
        return true;
    }

    /**
     * Map the old to the new values
     *
     * @param int $sectionFrame The content of the FlexForm
     * @return string The equivalent value frame_class
     */
    protected function mapSectionFrame($sectionFrame)
    {
        $mapping = [
            0 => 'default',
            5 => 'ruler-before',
            6 => 'ruler-after',
            10 => 'indent',
            11 => 'indent-left',
            12 => 'indent-right',
            66 => 'none'
        ];
        if (array_key_exists($sectionFrame, $mapping)) {
            return $mapping[$sectionFrame];
        }
        return 'custom-' . (int)$sectionFrame;
    }
}
