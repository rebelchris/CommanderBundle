<?php

namespace Face\CommanderBundle\Command;

interface CommandTranslator
{

    /**
     * Translate a command to its handler counterpart
     *
     * @param $command
     * @return mixed
     */
    public function toCommandHandler($command);
} 