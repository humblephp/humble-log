<?php

namespace Humble\Log;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class FileLogger extends AbstractLogger implements LoggerInterface
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

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
        $dir = $this->path . '/' . date('Y') . '/' . date('m');

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        file_put_contents(
            sprintf('%s/%s.txt', $dir, date('d')),
            sprintf('%s [%s] %s %s', date('H:i:s'), $level, $message, json_encode($context)) . PHP_EOL,
            FILE_APPEND
        );
    }
}
