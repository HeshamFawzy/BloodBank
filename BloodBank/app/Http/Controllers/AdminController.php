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
        return view('admin.requests')->with('data' , $data);
    }

    public function transactions()
    {
        return view('admin.transactions');
    }

}
