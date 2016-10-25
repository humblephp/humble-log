<?php

namespace Humble\Log;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class ScreenLogger extends AbstractLogger implements LoggerInterface
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
        echo vsprintf('<div class="alert alert-%s">%s %s %s</div>', [
            $level,
            date('H:i:s'),
            $message,
            json_encode($context, JSON_PRETTY_PRINT)
        ]);
    }
}
