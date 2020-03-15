<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Storage;

use File;

use App\Donor;

use App\Reques;

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
    public function donate()
    {
        return view('user.home');
    }

    public function donatep(Request $request)
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

    public function donor()
    {
        $options = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-',];
        return view('user.donor')->with('options', $options);
    }

    public function donorp(Request $request)
    {
        $options = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-',];
        $data = DB::table('donors')->where('bloodgroup' , $request->input('bloodgroup'))->get();
        return view('user.donor',array('options' => $options, 'data' => $data ));
    }

    public function bank()
    {
        $options = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-',];
        $data = DB::select('select Count(id) as Stock, bloodgroup from donors group by bloodgroup order by bloodgroup');
        return view('user.bank',array('options' => $options, 'data' => $data ));
    }

    public function bankp(Request $request)
    {
        $Reques = Reques::create([
            'user_id' =>   Auth()->user()->id,
            'bloodgroup' => $request->input('bloodgroup'),
        ]);
        $options = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-',];
        $data = DB::select('select Count(id) as Stock, bloodgroup from donors group by bloodgroup order by bloodgroup');
        return view('user.bank',array('options' => $options, 'data' => $data ));
    }
}
