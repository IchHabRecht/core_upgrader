<?php
declare(strict_types = 1);

return [
    'coreupgrader:upgrade' => [
        'class' => \IchHabRecht\Upgrader\Command\UpgradeCommand::class,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
];
