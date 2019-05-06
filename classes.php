<?php

class Task {

    public $description;

    public $completed = false;

    public function __construct($description){

        $this->description = $description;

    }

    public function complete()
    {
        $this->completed = true;
    }

}

$task = new Task('Description');

$task->complete();

var_dump($task->completed);