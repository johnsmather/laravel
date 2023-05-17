<?php

namespace App\Http\Controllers\Admin\complitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\complitedTasks;

class ShowController extends Controller
{
    public function __invoke(complitedTasks $complitedTasks)
    {
        return view('admin.complitedTasks.show', compact('complitedTasks'));
    }
}
