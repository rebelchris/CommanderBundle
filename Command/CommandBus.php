<?php

namespace Face\CommanderBundle\Command;

interface CommandBus
{

    /**
     * Execute command
     *
     * @param $command
     * @return mixed
     */
    public function execute($command);
} 