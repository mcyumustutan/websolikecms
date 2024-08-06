<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSolutionCenterRequest;
use App\Models\SolutionCenter;

class SolutionCenterController extends Controller
{
    public function send(StoreSolutionCenterRequest $request)
    {
        SolutionCenter::create($request->validated());
        return response()->json(['success' => 'Mesajınız Çözüm Merkezimize iletildi. En kısa sürede tarafınıza bilgi verilecektir.'], 201);
    }
}
