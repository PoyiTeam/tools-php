<?php

namespace App;


class CurrentWeek implements \Iterator
{
    public $date;
    public $daysFrom = 0;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function current()
    {
        return $this->date->format("Y F j");
    }

    public function key()
    {
        return $this->daysFrom;
    }

    public function next()
    {
        $this->date->modify("tomorrow");
        $this->daysFrom++;
    }

    public function rewind()
    {
        $this->date->modify("today");
        $this->daysFrom = 0;
    }

    public function valid()
    {
        return $this->daysFrom < 7;
    }
}