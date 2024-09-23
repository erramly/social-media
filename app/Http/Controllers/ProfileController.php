<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {

        $user = User::find($id);

        if(!$user){
            return response()->json(["error"=>"user not found"]);
        }
        return $user;
    }
}
