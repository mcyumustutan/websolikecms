<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSmsListRequest;
use App\Http\Requests\UpdateSmsListRequest;
use App\Models\SmsList;

class SmsListController extends Controller
{
    public function send(StoreSmsListRequest $request)
    {
        SmsList::create($request->validated());
        return response()->json(['success' => 'Kaydınız alınmıştır.'], 201);
    }
}
