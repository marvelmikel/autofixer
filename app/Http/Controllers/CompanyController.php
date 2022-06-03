<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
 use App\Models\Maintain;
 use App\Models\Repair;
 use App\Models\Service;
 use App\Models\Document;
 use App\Models\CompanyVechicle;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Hash;
use Mail;

class CompanyController extends Controller
{

     //function index()
    //{
        // $data = User::findOrFail(Auth::user()->id);
        //return view('profile', compact('data'));
    //}
    //function edit_validation(Request $request)
    //{
       // $request->validate([
         //   'c_name'  => 'required',
         //   'c_address'  => 'required',
          //  'c_email'  => 'required',
          //  'c_phone'  => 'required',
          //  'p_name'  => 'required',
           // 'p_phone'  => 'required',
           // 'p_email'  => 'required',
          //  'p_position'  => 'required'

      //  ]);

      //  $data =$request->all();

       // if(!empty($data['password']))
       // {
         //   $form_data = array(
           //     'c_name'  => $data['c_name'],
             //   'c_address'  => $data['c_address'],
             //   'c_email'  => $data['c_email'],
            //    'c_phone'  => $data['c_phone'],
              //  'p_name'  => $data['p_name'],
                //'p_phone'  => $data['p_phone'],
             //   'p_email'  => $data['p_email'],
               // 'p_position'  => $data['p_position'],
               // 'password'  => $data['password']
            //);
        //}
        //else
        //{

          //  $form_data = array(
            //    'c_name'  => $data['c_name'],
              //  'c_address'  => $data['c_address'],
                //'c_email'  => $data['c_email'],
                //'c_phone'  => $data['c_phone'],
                //'p_name'  => $data['p_name'],
                //'p_phone'  => $data['p_phone'],
                //'p_email'  => $data['p_email'],
                //'p_position'  => $data['p_position']

            //);

        //}

        //User::whereId(Auth::user()->id)->update($form_data);

        //return redirect('profile')->with('success', 'Profile Data Updated Successfully');



    //}


    public function login()
    {

      return view('users.company.login');
    }


    public function register()
    {

      return view('users.company.register');
    }



    public function profile()
    {
      $user = Auth::user();
      return view('users.company.profile',compact('user'));
    }
    public function companyvalidation(Request $request,$id)
    {
      $user =  Auth::user($id);
     //company's information
        $user->c_name = $request->input('c_name');
        $user->c_address = $request->input('c_address');
        $user->c_email = $request->input('c_email');
        $user->c_phone = $request->input('c_phone');
  //personal's information
        $user->p_name = $request->input('p_name');
        $user->p_email = $request->input('p_email');
        $user->p_position = $request->input('p_position');
        $user->p_phone = $request->input('p_phone');
        $user->is_auth = 'company';

        $user->username = $request->input('username');
      //  $user->password = Hash::make( $request->input('password'));
       $user->save();
       return redirect('/company/profile')->with('success', 'Changes made');
    }



    public function invoice()
    {
      $notes = Document::all();
     return view('users.company.invoice',compact('notes'));
    }

    public function diagnostics()
    {
      $notes = Document::all();

     return view('users.company.diagnostics',compact('notes'));
    }

    public function repair()
    {
      $user = Auth::user();
      $vechicles = $user->services;
     return view('users.company.repair',compact('vechicles'));
    }

    public function main()
    {
      $user = Auth::user();
      $vechicles = $user->services;
     return view('users.company.main',compact('vechicles'));
    }



    public function storeUser(Request $request)
    {
        $request->validate([
              //company's information
            'c_name' => 'required|string|max:255',
            'c_address' => 'required|string|max:255',
            'c_phone' => 'required|string|max:255',
            'c_email' => 'required|string|email|unique:users',

           //personal's information
             'p_name' => 'required|string|max:255',
           'p_positon' => 'required|string|max:255',
           'p_phone' => 'required|string|max:255',
            'p_email' => 'required|',

             //Login information
             'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $user =  User::create([
            'c_name' => $request->c_name,
            'c_address' => $request->c_address,
            'c_email' => $request->c_email,
            'c_phone' => $request->c_phone,

            'p_name' => $request->p_name,
            'p_email' => $request->p_email,
            'p_position' => $request->p_position,
            'p_phone' => $request->p_phone,
            'is_auth' => 'company',

            'username' => $request->username,
           // Hash::make($data['password']),
            'password' => 'Hash'::make($request->password),
          //  'password' => $request->password,
        ]);
        'Mail'::send('email.register', ['name'=>$request->name], function($message) use($request){
          $message->to($request->p_email);
          $message->subject('Welcome to AutoFixer');
          $message->from('info.autofixer@gmail.com');
      });
       return redirect('company/login');
    }


    public function authenticate(Request $request )
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);


        $credentials = $request->only('username', 'password');


        if ('Company'::where($credentials)->first()) {
            return redirect()->intended('company/home');

        }

        return redirect('/company/login')->with('error', 'invalid credentials');

    }

    public function logout() {
      'Auth'::logout();

      return redirect('https://autofixer.com.ng/');
    }

    public function home()
    {
      $user = User::find(Auth::user()->id);
        $vechicles = $user->vechicles;
        $repairs = $user->services;

        if ('Auth'::guard('company')){
      return view('users.company.dashboard', compact('vechicles','repairs'));
        }
            return redirect('/company/login')->with('error', 'Try again');

    }

    public function downloadinvoice()
    {
      $tests =   Document::all();
      $user = Auth::user()->id;
  foreach ($tests as  $test) {
    if ($user == $test->user_id ) {

      $myFile = public_path("storage/uploads/$test->invoice");
  $name = Auth::user()->p_name;
        //  Download File with name and headers
        $headers = ['Content-Type: application/pdf'];
        $newName = 'Invoice from Auto-fixer to '.$name .'-'.time().'.pdf';
        	return response()->download($myFile, $newName, $headers);
    }
  }


    }

    public function test() {
      dd('kiss me');
    }
    public function downloaddiagnostics()
    {
      
      $tests =   Document::all();
      $user = Auth::user()->id;
  foreach ($tests as  $test) {
    if ($user == $test->user_id ) {

      $myFile = public_path("storage/uploads/$test->report");
  $name = Auth::user()->p_name;
        //  Download File with name and headers
        $headers = ['Content-Type: application/pdf'];
        $newName = 'Diagnostics Report from Auto-fixer to '.$name .'-'.time().'.pdf';
          	return response()->download($myFile, $newName, $headers);
    }
  }


    }

}
