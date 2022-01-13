<?php

namespace App\Domains\Task\Jobs;

use Auth;
use App\Models\User;
use Lucid\Units\Job;

class GetTasksJob extends Job
{
    private $title;
    private $description;
    private $created_at;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return View
     */
    public function handle()
    {
        $tasks = Auth::user()->tasks;
        return view('tasklist')->with('tasks', $tasks);

    }
}
