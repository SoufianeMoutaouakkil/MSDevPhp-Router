<?php

declare(strict_types=1);

namespace MSDevPhp\Router\Exception;

use InvalidArgumentException;

final class InvalidCallbackException extends InvalidArgumentException implements ExceptionInterface
{
    # to simplify implimentation
}
