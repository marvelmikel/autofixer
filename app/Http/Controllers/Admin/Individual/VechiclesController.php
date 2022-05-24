<?php

namespace App\Http\Controllers\Admin\Individual;
use App\Models\CompanyVechicle;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VechiclesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_auth' ,'=','individual')->get();
        
        // $user = User::where('is_auth' ,'=','individual')->first();
        // $vechicles = $user->vechicles;
     
        $test = CompanyVechicle::all();
        
         $vechicles = $test;
        
        return view('admin.individual.vechicle.index',compact('vechicles','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return view('admin.individual.vechicle.edit',compact('user'));
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
        return redirect()->route('vechicle-ic.index');
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
