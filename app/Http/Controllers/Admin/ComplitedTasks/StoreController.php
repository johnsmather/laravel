<?php

namespace App\Http\Controllers\Admin\complitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\complitedTasks\StoreRequest;
use App\Models\complitedTasks;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        complitedTasks::create($data);
        return redirect(route('admin.complitedTasks'));
    }
}
