<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reques;

use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function requests()
    {
        $data = Reques::join('users', 'users.id', '=', 'reques.user_id')
        ->orderBy('reques.created_at', 'desc')
        ->get();
        return view('admin.requests')->with('data' , $data);
    }

    public function search(Request $request)
    {
        $data = Reques::join('users', 'users.id', '=', 'reques.user_id')
        ->where('users.email', 'like' , '%'.$request->input('search').'%')
        ->orderBy('reques.created_at', 'desc')
        ->get();
        return view('admin.requests')->with('data', $data);
    }
}
