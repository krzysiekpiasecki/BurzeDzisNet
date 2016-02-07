<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare (
    strict_types = 1
);

namespace KrzysiekPiasecki\BurzeDzisNet\CLI;

use KrzysiekPiasecki\BurzeDzisNet\Point;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use SoapFault;
use Throwable;
use function sprintf;

/**
 * @todo verbose mode for errors messages
 */
class LocatingCommand extends Command
{
    /**
     * Configures the command
     */
    protected function configure()
    {
        $this
            ->setName('burzedzisnet:locate')
            ->setDescription('Displays DMS coordinates of a given location')
            ->addArgument(
                'name',
                InputArgument::IS_ARRAY | InputArgument::REQUIRED,
                'Location name (supports polish names)'
            );

    }

    /**
     * Executes the command
     *
     * @param InputInterface $input user input
     * @param OutputInterface $output console ouput
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $names = $input->getArgument('name');

        try {
            $client = $this->getApplication()->getClient('4d36bcb5c4f892dbc042f3e1b0972d4ce686b479');
            $table = new Table($output);
            $table->setHeaders(['Location', 'DMS-X', 'DMS-Y']);
            foreach ($names as $name) {
                $point = $client->locate($name, 'UTF-8');
                $table->addRow([
                    $name,
                    $point->x(),
                    $point->y()
                ]);
            }
            $table->render();
        } catch (SoapFault $e) {
            $output->writeln(
                '<error>Remote connection failure! Please try again.</error>'
            );
            if ($input->getOption('verbose')) {
                $output->writeln(
                    sprintf(
                        '<error>Error message: %s</error>',
                        $e->getMessage()
                    )
                );

            }
        } catch(Throwable $e) {
            var_dump($e->getMessage());
            $output->writeln(
                '<error>Runtime exception</error>'
            );
        }
    }

}