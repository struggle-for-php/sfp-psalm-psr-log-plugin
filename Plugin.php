<?php

namespace Sfp\Psalm\PsrLogPlugin;

use SimpleXMLElement;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;

class Plugin implements PluginEntryPointInterface
{
    /** @return void */
    public function __invoke(RegistrationInterface $psalm, ?SimpleXMLElement $config = null)
    {
        $psalm->addStubFile(__DIR__ . '/stubs/LoggerInterface.php');
        $psalm->addStubFile(__DIR__ . '/stubs/AbstractLogger.php');
        $psalm->addStubFile(__DIR__ . '/stubs/LoggerTrait.php');
    }
}
