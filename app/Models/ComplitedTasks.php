<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class complitedTasks extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'complited_tasks';
    protected $guarded = false;
}
