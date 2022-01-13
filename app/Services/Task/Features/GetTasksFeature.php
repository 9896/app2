<?php

namespace App\Services\Task\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Task\Jobs\GetTasksJob;


class GetTasksFeature extends Feature
{

     /**
     * Run GetTasksJob
     * 
     * @param Request $request
     */
    public function handle(Request $request)
    {
        return $this->run(GetTasksJob::class);
    }
}
