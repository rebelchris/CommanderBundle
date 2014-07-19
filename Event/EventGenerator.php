<?php

namespace Face\CommanderBundle\Event;

trait EventGenerator
{

    /**
     * @var array
     */
    protected $pendingEvents = [];

    /**
     * Raise a new event
     *
     * @param $event
     */
    public function raise($event)
    {
        $this->pendingEvents[] = $event;
    }

    public function releaseEvents()
    {
        $events = $this->pendingEvents;

        $this->pendingEvents = [];

        return $events;
    }
} 