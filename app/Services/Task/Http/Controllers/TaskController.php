<?php

namespace App\Services\Task\Http\Controllers;

use Lucid\Units\Controller;
use App\Services\Task\Features\AddTaskFeature;
use App\Services\Task\Features\GetTasksFeature;

class TaskController extends Controller
{
    /**
     * Store new task
     */
    public function add()
    {

        return $this->serve(AddTaskFeature::class);
    }

    /**
     * Retrieve user tasks
     */
    public function get(){

        return $this->serve(GetTasksFeature::class);
        
    }
}
