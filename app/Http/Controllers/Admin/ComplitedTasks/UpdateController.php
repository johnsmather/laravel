<?php

namespace App\Http\Controllers\Admin\complitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\complitedTasks\UpdateRequest;
use App\Models\complitedTasks;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, complitedTasks $complitedTasks)
    {
        $data = $request->validated();
        $complitedTasks->update($data);
        return view('admin.complitedTasks.show', compact('complitedTasks'));;
    }
}
