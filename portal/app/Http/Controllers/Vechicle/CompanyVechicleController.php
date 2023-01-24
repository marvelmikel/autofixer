<?php

namespace App\Http\Controllers\Vechicle;

namespace App\Http\Controllers\Vechicle;
use App\Http\Controllers\Controller;
use App\Models\CompanyVechicle;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompanyVechicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vechicles = CompanyVechicle::latest()->get();
        $user = User::find(Auth::user()->id);
        $vechicles = $user->vechicles;
        return view('users.company.vechicles', compact('vechicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.company.addvechicles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name' => 'required'
        // ]);
        $tag = new CompanyVechicle();
        $tag->v_make = $request->v_make;
        $tag->v_model = $request->v_model;
        $tag->v_year = $request->v_year;
        $tag->vin = $request->vin;
        $tag->v_reg = $request->v_reg;
        $tag->user_id = Auth::user()->id;
        $tag->save();
        //Toastr::success('Tag Successfully Saved ' ,'Success');
        return redirect()->route('vechicle.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyVechicle  $companyVechicle
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyVechicle $companyVechicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyVechicle  $companyVechicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vechicle = CompanyVechicle::find($id);
        return view('users.company.editvechicles',compact('vechicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyVechicle  $companyVechicle
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
        $tag->user_id = Auth::user()->id;
        $tag->save();
        return redirect()->route('vechicle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyVechicle  $companyVechicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CompanyVechicle::find($id)->delete();
        return redirect()->back();
    }
}
