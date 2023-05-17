<?php

namespace App\Http\Controllers\Admin\complitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.complitedTasks.create');
    }
}
