<?php

namespace App\Http\Controllers;
use App\Models\CompanyVechicle;
use App\Models\User;
use App\Models\Service;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
        $service = Service::all();
        $vechicle = CompanyVechicle::all();
        return view('admin.home',compact('service','vechicle'));
    }

    
     public function individual()
    {
        $users = User::where('is_auth' ,'=','individual')->get();
        return view('admin.individual',compact('users'));
    }

    public function companyuserprofile(CompanyVechicle $companyVechicle)
    {
       // $vechicles = CompanyVechicle::find($id);
       $users = User::where('is_auth' ,'=','company')->get();
        $vechicles = $companyVechicle;
        //  dd($vechicles);
        return view('admin.companyuserprofile',compact('vechicles'));
    }

    public function individualuserprofile(CompanyVechicle $companyVechicle)
    {
        $users = User::where('is_auth' ,'=','individual')->get();
        $vechicles = $companyVechicle;
        return view('admin.individualuserprofile',compact('vechicles'));
    }

    public function addservices()
    {
        return view('admin.addservices');
    }

    public function addindividualservices()
    {
        return view('admin.addindividualservices');
    }

    public function individualdoc()
    {
        return view('admin.individualdoc');
    }

     public function companydoc()
    {
        return view('admin.companydoc');
    }

    public function downloadFile()
    {
    //	$myFile = storage_path("uploads/-2022-05-08-62784dde8f007.pdf");
        $myFile = public_path("storage/uploads/-2022-05-08-62784dde8f007.pdf");

      
      
      //  Download File with name and headers
    	$headers = ['Content-Type: application/pdf'];
    	$newName = 'Invoice from Auto-fixer-'.time().'.pdf';
    	return response()->download($myFile, $newName, $headers);
    // End   Download File with name and headers

       // Download File from Storage
    //	return response()->download($myFile);

      //  After Download File will remove
    //	return response()->download($myFile)->deleteFileAfterSend(true);
    }
}