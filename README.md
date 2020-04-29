sfp-psalm-psr-log-plugin
========================

PSR-3 (psr/log) plugin for [Psalm](https://github.com/vimeo/psalm)

Installation:

```console
$ composer require --dev struggle-for-php/sfp-psalm-psr-log-plugin
$ vendor/bin/psalm-plugin enable struggle-for-php/sfp-psalm-psr-log-plugin
```

## Example

```php
<?php

use Psr\Log\LoggerInterface;

class FooController
{
    /** @var LoggerInterface */
    private $logger;

    public function anyAction()
    {
        try {
            // do something
        } catch (\Exception $e) {
            $this->logger->error('error happened.', ['exception' => $e->getMessage()]);
        }
    }
}
```

would be ERROR output:
```php
ERROR: InvalidArgument - src/Foo.php:14:45 - Argument 2 of Psr\Log\LoggerInterface::error expects array{exception?: Exception}, array{exception: string} provided
            $this->logger->error('error happened.', ['exception' => $e->getMessage()]);
```

## Configure

If you want to allow `Throwable` to pass logger context's `exception`.

```xml
        <plugins>
          <pluginClass class="Sfp\Psalm\PsrLogPlugin\Plugin">
            <throwable>1</throwable>
          </pluginClass>
        </plugins>
```
