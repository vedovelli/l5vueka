<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class ApiController extends Controller
{
    public function address($userId)
    {
        $user = User::find($userId);
        $addresses = $user->addresses;
        return response()->json(['addresses' => $addresses], 200);
    }
}
