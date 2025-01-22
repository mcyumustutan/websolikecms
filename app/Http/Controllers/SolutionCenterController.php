<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSolutionCenterRequest;
use App\Mail\SolutionCenterMail;
use App\Models\SolutionCenter;
use Illuminate\Support\Facades\Mail;

class SolutionCenterController extends Controller
{
    public function send(StoreSolutionCenterRequest $request)
    {
        $newSolutionCenter = SolutionCenter::create($request->validated());

        Mail::to(['goremebasin@gmail.com', 'mehmetcy01@gmail.com'])->send(new SolutionCenterMail($newSolutionCenter));
        return response()->json(['success' => 'Mesajınız Çözüm Merkezimize iletildi. En kısa sürede tarafınıza bilgi verilecektir.'], 201);
    }
}
