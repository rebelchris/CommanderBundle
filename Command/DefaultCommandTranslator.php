<?php

namespace Face\CommanderBundle\Command;

class DefaultCommandTranslator implements CommandTranslator
{

    /**
     * Translate a command to its handler counterpart
     *
     * @param $command
     * @return mixed
     */
    public function toCommandHandler($command)
    {
        $commandClass = get_class($command);
        $handler = substr_replace($commandClass, 'CommandHandler', strrpos($commandClass, 'Command'));

        return $handler;
    }
}