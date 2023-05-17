<?php

namespace App\Http\Controllers\Main\complitedTasks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Main\complitedTasks\StoreRequest;
use App\Models\complitedTasks;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        complitedTasks::create($data);
    }
}
