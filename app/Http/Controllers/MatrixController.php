<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MatrixController extends Controller
{
    /*
    public function registrtationForm()
    {
        return view('matrix.register');
    }

    protected $userData;

    public function __construct(UserData $userData)
    {
        $this->userData = $userData;
    }

    // The registration form created above will post to this route which
    // will make the API request to register your user.
    public function register(Request $request)
    {
        dd($request->username, $request->password);
        // get the data from the response
        $data = $this->userData->register($request->username, $request->password);

        // if successful, save the registration info
        if ($data) {
            DB::table('matrix_regisration')->insert($data);
            return redirect()->route('matrix.account');
        } else {
            // if failure, redirect back to the registration for with errors
            return back()->withErrors('Failed to register');
        }
    }
    */
}

