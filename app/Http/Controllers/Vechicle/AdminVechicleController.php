<?php

namespace App\Http\Controllers\Vechicle;

namespace App\Http\Controllers\Vechicle;
use App\Http\Controllers\Controller;
use App\Models\CompanyVechicle;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminVechicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_auth' ,'=','company')->get();
        //dd($users);
        return view('admin.company.vechicle.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addvechicles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new CompanyVechicle();
        $tag->v_make = $request->v_make;
        $tag->v_model = $request->v_model;
        $tag->v_year = $request->v_year;
        $tag->vin = $request->vin;
        $tag->v_reg = $request->v_reg;
        $tag->save();
        //Toastr::success('Tag Successfully Saved ' ,'Success');
        return redirect()->route('admin-vechicle.index');
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
        $vechicle = CompanyVechicle::find($id);
        return view('admin.editvechicles',compact('vechicle'));

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
        $tag = CompanyVechicle::find($id);
        $tag->v_make = $request->v_make;
        $tag->v_model = $request->v_model;
        $tag->v_year = $request->v_year;
        $tag->vin = $request->vin;
        $tag->v_reg = $request->v_reg;
        $tag->save();
        return redirect()->route('admin-vechicle.index');
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
