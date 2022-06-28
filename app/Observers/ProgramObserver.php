<?php

namespace App\Observers;
use App\Models\Program;
use Cache;

class ProgramObserver
{
    public function created(Program $program)
    {
        Cache::forget('programs');
    }
}
