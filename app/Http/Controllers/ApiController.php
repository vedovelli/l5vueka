<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class ApiController extends Controller
{
    public function address($userid)
    {
        $user = User::find($userid);
        $addresses = $user->addresses;
        sleep(2);
        return response()->json(['addresses' => $addresses], 200);
    }
}
