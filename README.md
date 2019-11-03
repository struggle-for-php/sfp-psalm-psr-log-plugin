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

class Foo
{
    /** @var LoggerInterface */
    private $logger;

    public function anyAction()
    {
        try {
        } catch (\Exception $e) {
            $this->logger->error('error happend.', ['exception' => $e->getMessage()]);
        }
    }
}
```

would be ERROR output:
```php
ERROR: InvalidArgument - src/Foo.php:14:45 - Argument 2 of Psr\Log\LoggerInterface::error expects array{exception?: Exception}, array{exception: string} provided
            $this->logger->error('error happend.', ['exception' => $e->getMessage()]);
```