<?php namespace isys4283\tasks;

use jpuck\calendar\Event;

class Task
{
    protected $id;
    protected $title;
    protected $points;
    protected $duedate;
    protected $description;

    public function __construct(
        int $id,
        string $title,
        int $points,
        Event $duedate,
        string $description = null
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->points = $points;
        $this->duedate = $duedate;
        $this->description = $description;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __isset()
    {
        return true;
    }
}
