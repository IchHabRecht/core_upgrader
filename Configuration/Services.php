<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $configurator) {
    $services = $configurator->services();

    if (class_exists(\Helhum\Typo3Console\Core\Booting\RunLevel::class)) {
        $services->set(\IchHabRecht\Upgrader\Command\UpgradeCommand::class)
            ->tag('console.command', [
                'command' => 'coreupgrader:upgrade',
                'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
                'schedulable' => false,
            ]);
    }
};
