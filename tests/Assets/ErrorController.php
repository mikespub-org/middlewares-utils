<?php
declare(strict_types = 1);

namespace Middlewares\Tests\Assets;

use Exception;

final class ErrorController
{
    /**
     * @throws Exception
     */
    public function __construct()
    {
        throw new Exception('Error Processing Request');
    }

    public function __invoke(): void
    {
    }
}
