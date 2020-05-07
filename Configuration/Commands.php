<?php
declare(strict_types = 1);

return [
    'upgrader:upgrade' => [
        'class' => \IchHabRecht\Upgrader\Command\UpgradeCommand::class,
        'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
    ],
];
