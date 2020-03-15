<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reques;

class AdminController extends Controller
{
    
    public function requests()
    {
        $data = Reques::join('users', 'users.id', '=', 'reques.user_id')
        ->orderBy('reques.created_at', 'desc')
        ->get();
        return view('admin.home')->with('data' , $data);
    }

}
