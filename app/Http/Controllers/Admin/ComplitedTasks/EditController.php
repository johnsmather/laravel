<?php

namespace App\Http\Controllers\Admin\complitedTasks;

use App\Http\Controllers\Controller;
use App\Models\complitedTasks;
use Illuminate\Http\Request;
use App\ModelscomplitedTasks;

class EditController extends Controller
{
    public function __invoke(complitedTasks $complitedTasks)
    {
        return view('admin.complitedTasks.edit', compact('complitedTasks'));
    }
}
