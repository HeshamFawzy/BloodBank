<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Storage;

use File;

use App\Donor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.home');
    }

    public function donate(Request $request)
    {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

        $donor = Donor::create([
            'name' => $request->input('name'),
            'bloodgroup' => $request->input('bloodgroup'),
            'contactno' => $request->input('contactno'),
            'address' => $request->input('address'),
            "mime"                  => $image->getClientMimeType(),
            "original_filename"     => $image->getClientOriginalName(),
            "filename"              => $image->getFilename().'.'.$extension,
        ]);

        return view('user.home');
    }
}
