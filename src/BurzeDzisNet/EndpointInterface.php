<?php

/*
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace BurzeDzisNet;

use SoapClient;

/**
 * Endpoint interface is the entry point to a burze.dzis.net API.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 */
interface EndpointInterface
{
    /**
     * Get soap client in WSDL mode.
     *
     * @throws \SoapFault if the WSDL URI cannot be loaded or parsed
     *
     * @return \SoapClient Soap client in WSDL mode
     */
    public function client(): SoapClient;

    /**
     * Get URI of WSDL file.
     *
     * @return string URI of WSDL file
     */
    public function wsdl(): string;

    /**
     * Get API key.
     *
     * @return string API key
     */
    public function apiKey(): string;
}
