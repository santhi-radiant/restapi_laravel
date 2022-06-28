<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\ProgramObserver;

class Program extends Model
{
    use HasFactory;
    protected  $guarded=[];
}
