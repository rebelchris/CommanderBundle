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
        $class = join('', array_slice(explode('\\', get_class($command)), -1));

        $result = explode(' ' , preg_replace("([A-Z])", " $0", $class));
        $result = array_filter($result);

        return strtolower(implode('.', $result)) . '.handler';
    }
}