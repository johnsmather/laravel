<?php

namespace App\Http\Controllers\Admin\complitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\complitedTasks;

class DeleteController extends Controller
{
    public function __invoke(complitedTasks $complitedTasks)
    {
        $complitedTasks->delete();
        return redirect()->route('admin.complitedTasks');
    }
}
