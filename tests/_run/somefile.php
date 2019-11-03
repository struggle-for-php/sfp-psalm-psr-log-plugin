<?php
use Psr\Log\LoggerInterface;
use Psr\Log\AbstractLogger;
use Psr\Log\LoggerTrait;

/**
 * @psalm-suppress InvalidReturnType
 * @return LoggerInterface
 */
function impl_interface() {}

/**
 * @psalm-suppress InvalidReturnType
 * @return AbstractLogger
 */
function concrete_abstract() {}
concrete_abstract()->emergency("message", ['exception' => 'foo']);
concrete_abstract()->alert("message", ['exception' => 'foo']);
concrete_abstract()->critical("message", ['exception' => 'foo']);
concrete_abstract()->error("message", ['exception' => 'foo']);
concrete_abstract()->warning("message", ['exception' => 'foo']);
concrete_abstract()->notice("message", ['exception' => 'foo']);
concrete_abstract()->info("message", ['exception' => 'foo']);
concrete_abstract()->debug("message", ['exception' => 'foo']);