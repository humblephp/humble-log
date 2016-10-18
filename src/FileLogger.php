<?php

namespace Humble\Log;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class FileLogger extends AbstractLogger implements LoggerInterface
{
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function log($level, $message, array $context = array())
    {
    }
}
