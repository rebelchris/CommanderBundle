<?php

namespace Face\CommanderBundle\Command;

interface CommandHandler
{

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command);
} 