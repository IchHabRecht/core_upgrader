<?php
declare(strict_types = 1);
namespace IchHabRecht\Upgrader\Command;

use Helhum\Typo3Console\Mvc\Cli\CommandDispatcher;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\OutputStyle;
use Symfony\Component\Console\Style\SymfonyStyle;

class UpgradeCommand extends Command
{
    /**
     * @var CommandDispatcher
     */
    private $commandDispatcher;

    public function __construct(string $name = null, CommandDispatcher $commandDispatcher = null)
    {
        parent::__construct($name);

        if ($commandDispatcher === null) {
            $commandDispatcher = CommandDispatcher::createFromCommandRun();
        }
        $this->commandDispatcher = $commandDispatcher;
    }

    protected function configure()
    {
        $this->setDescription('Run necessary upgrade wizards');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $this->runUpdatePrepare($io);

        return 0;
    }

    private function runUpdatePrepare(OutputStyle $io)
    {
        $io->title('Preparing upgrade');
        $output = $this->commandDispatcher->executeCommand('upgrade:prepare');
        $io->success($output);
    }
}
