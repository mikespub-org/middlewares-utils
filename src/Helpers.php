<?php

namespace Middlewares\Utils;

use Psr\Http\Message\MessageInterface;

/**
 * Class with common helpers
 */
abstract class Helpers
{
    /**
     * Add or remove the Content-Length header
     * Used by middlewares that modify the body content
     *
     * @param MessageInterface $response
     *
     * @return MessageInterface
     */
    public static function fixContentLength(MessageInterface $response)
    {
        if ($response->getBody()->getSize() !== null) {
            return $response->withHeader('Content-Length', (string) $response->getBody()->getSize());
        }

        return $response->withoutHeader('Content-Length');
    }
}