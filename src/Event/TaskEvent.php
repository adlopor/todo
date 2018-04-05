<?php
/**
 * Created by PhpStorm.
 * User: p42loora
 * Date: 5/04/18
 * Time: 15:20
 */

namespace App\Event;


use App\Entity\Task;
use Symfony\Component\EventDispatcher\Event;

class TaskEvent extends Event
{

    public function __construct(Task $task)
    {
        $this->task=$task;
    }

    /**
     * @return Task
     */
    public function getTask(): Task
    {
        return $this->task;
    }

}