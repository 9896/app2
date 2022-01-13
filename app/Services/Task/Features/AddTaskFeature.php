<?php

namespace App\Services\Task\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Task\Jobs\AddTaskJob;
use App\Domains\Task\Requests\AddTask;

class AddTaskFeature extends Feature
{
    /**
     * Run AddTaskJob
     * 
     * @param AddTask $request
     */
    
    public function handle(AddTask $request)
    {
        return $this->run(AddTaskJob::class, [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }

}
