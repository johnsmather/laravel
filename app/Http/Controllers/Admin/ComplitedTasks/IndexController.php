<?php

namespace App\Http\Controllers\Admin\complitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\complitedTasks;

class IndexController extends Controller
{
    public function __invoke()
    {
        $complitedTasks = complitedTasks::all()->sortByDesc('id');
        return view('admin.complitedTasks.index', compact('complitedTasks'));
    }
}
