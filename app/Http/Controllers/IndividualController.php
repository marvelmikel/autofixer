<?php

namespace App\Http\Controllers;
use Notification;
use Validator;
use App\Http\Controllers\Controller;
use App\Models\Individual;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use App\Models\CompanyVechicle;
use App\Models\Service;
use App\Models\Document;
use App\Models\Repair;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Hash;

class IndividualController extends Controller
{
  use AuthenticatesUsers;


  public function register()
  {

    return view('users.individual.register');
  }

  public function login()
  {

    return view('users.individual.login');
  }
  public function home()
  {
    $user = User::find(Auth::user()->id);
    $vechicles = $user->vechicles;
    $repairs = $user->services;

    if (Auth::guard('individual')){
    return view('users.individual.dashboard', compact('vechicles','repairs'));
    }
      return redirect('/individual/login');

  }



  public function invoices()
  {
    $notes = Document::all();

   return view('users.individual.invoice',compact('notes'));
  }

  public function diagnosticss()
  {
    $notes = Document::all();

   return view('users.individual.diagnostics',compact('notes'));
  }

  public function repairs()
  {


    $user = Auth::user();
    $vechicles = $user->services;
   return view('users.individual.repair',compact('vechicles'));
  }

  public function mains()
  {
    $user = Auth::user();
    $vechicles = $user->services;
   return view('users.individual.main',compact('vechicles'));
  }



    public function storeUser(Request $request)
    {
        $request->validate([
              //individual's information
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',

             //Login information
             'username' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'phone' => $request->phone,
            'is_auth' => 'individual',
            'username' => $request->username,
            //'password' => $request->password,
            'password' => Hash::make($request->password),

        ]);
        Mail::send('email.register', ['name'=>$request->name], function($message) use($request){
          $message->to($request->email);
          $message->subject('Welcome to AutoFixer');
          $message->from('info.autofixer@gmail.com');
      });
if (condition) {
  # code...
}else {
      return redirect('/individual/login');
}

    }


    public function profile()
    {
      $user = Auth::user();
      return view('users.individual.profile',compact('user'));
    }

    public function individualvalidation(Request $request, $id)
    {
      $user =  Auth::user($id);

               //personal's information
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->city = $request->input('city');
        $user->is_auth = 'individual';

        $user->username = $request->input('username');
      //  $user->password =Hash::make( $request->input('password'));
       $user->save();
       return redirect('/individual/home')->with('success', 'Changes made');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|string|',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

       // if (Auth::attempt($credentials)) {

        if (Individual::where($credentials)->first()) {
            return redirect()->intended('individual/home');
        }

        return redirect('/individual/login')->with('error', 'invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('https://autofixer.com.ng/');
    }


    public function downloadinvoice()
    {

    $tests =   Document::all();
    $user = Auth::user()->id;
foreach ($tests as  $test) {
  if ($user == $test->user_id ) {

    $myFile = public_path("storage/uploads/$test->invoice");
$name = Auth::user()->name;
      //  Download File with name and headers
    	$headers = ['Content-Type: application/pdf'];
    	$newName = 'Invoice from Auto-fixer to '.$name .'-'.time().'.pdf';
      return response()->download($myFile, $newName, $headers);

  }
}
    //	return response()->download($myFile, $newName, $headers)->deleteFileAfterSend(true);

    }

    public function downloaddiagnostics()
    {

    $tests =   Document::all();
    $user = Auth::user()->id;
foreach ($tests as  $test) {
  if ($user == $test->user_id ) {

    $myFile = public_path("storage/uploads/$test->report");
$name = Auth::user()->name;
      //  Download File with name and headers
    	$headers = ['Content-Type: application/pdf'];
    	$newName = 'Diagnostics Report from Auto-fixer to '.$name .'-'.time().'.pdf';
      return response()->download($myFile, $newName, $headers);


  }
}
    //	return response()->download($myFile, $newName, $headers)->deleteFileAfterSend(true);

    }

  }
