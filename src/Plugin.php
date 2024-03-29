<?php

namespace Sfp\Psalm\PsrLogPlugin;

use SimpleXMLElement;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;

/**
 * @api
 * @psalm-suppress UnusedClass
 */
class Plugin implements PluginEntryPointInterface
{
    public function __invoke(RegistrationInterface $psalm, SimpleXMLElement $config = null): void
    {
        if (isset($config->throwable) && ((bool)$config->throwable === true)) {
            $psalm->addStubFile(__DIR__ . '/../throwable-stubs/LoggerInterface.php');
            $psalm->addStubFile(__DIR__ . '/../throwable-stubs/AbstractLogger.php');
        } else {
            $psalm->addStubFile(__DIR__ . '/../stubs/LoggerInterface.php');
            $psalm->addStubFile(__DIR__ . '/../stubs/AbstractLogger.php');
        }
    }
}
