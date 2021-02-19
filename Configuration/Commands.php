<?php

declare(strict_types=1);

if (!class_exists(\Helhum\Typo3Console\Core\Booting\RunLevel::class)) {
    return [];
}

return [
    'coreupgrader:upgrade' => [
        'class' => \IchHabRecht\Upgrader\Command\UpgradeCommand::class,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
        'schedulable' => false,
    ],
];
