<?php

namespace App\Http\Controllers\Admin\Company;
use App\Models\CompanyVechicle;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VechicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
       $test = CompanyVechicle::all();
        $users = User::where('is_auth' ,'=','company')->get();
    
        $vechicles = $test;
        return view('admin.company.vechicle.index',compact('vechicles','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = CompanyVechicle::find($id);
        return view('admin.company.vechicle.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tag =  CompanyVechicle::find($id);
        $tag->v_make = $request->v_make;
        $tag->v_model = $request->v_model;
        $tag->v_year = $request->v_year;
        $tag->vin = $request->vin;
        $tag->v_reg = $request->v_reg;
        $tag->user_id =  $request->user_id;
        $tag->save();
        return redirect()->route('vechicle-ac.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CompanyVechicle::find($id)->delete();
        return redirect()->back();
    }
}
