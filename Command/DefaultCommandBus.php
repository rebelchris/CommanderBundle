<?php

namespace Face\CommanderBundle\Command;

use Symfony\Component\DependencyInjection\ContainerInterface;

class DefaultCommandBus implements CommandBus
{

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var CommandTranslator
     */
    protected $commandTranslator;

    public function __construct(ContainerInterface $container, CommandTranslator $commandTranslator)
    {
        $this->container = $container;
        $this->commandTranslator = $commandTranslator;
    }

    /**
     * Execute command
     *
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        $handler = $this->commandTranslator->toCommandHandler($command);

        return $this->container->get($handler)->handle($command);
    }
}