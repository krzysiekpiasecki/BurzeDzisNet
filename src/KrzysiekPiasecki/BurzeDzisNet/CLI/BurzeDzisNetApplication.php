<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KrzysiekPiasecki\BurzeDzisNet\CLI;

use KrzysiekPiasecki\BurzeDzisNet\BurzeDzisNet;
use KrzysiekPiasecki\BurzeDzisNet\Endpoint;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;

/**
 * BurzeDzisNet CLI application
 */
class BurzeDzisNetApplication extends Application
{

    /**
     * Gets the default commands that should always be available
     *
     * @return array An array of default Command instances
     */
    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();
        $defaultCommands[] = new LocatingCommand();

        return $defaultCommands;
    }

    /**
     * Get remote client
     *
     * @param $apikey access key
     * @return BurzeDzisNet remote client
     */
    public function getClient(string $apikey): BurzeDzisNet
    {
        return new BurzeDzisNet(
            new Endpoint(
                $apikey, [
                    'exceptions' => true
                ]
            )
        );
    }
}
