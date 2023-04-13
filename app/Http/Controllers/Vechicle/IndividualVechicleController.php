<?php

namespace App\Http\Controllers\Vechicle;
namespace App\Http\Controllers\Vechicle;
use App\Http\Controllers\Controller;
use App\Models\CompanyVechicle;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IndividualVechicleController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $user = User::find(Auth::user()->id);
    $vechicles = $user->vechicles;
    return view('users.individual.vechicles', compact('vechicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('users.individual.addvechicles');
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
        $tag->user_id = Auth::user()->id;
        $tag->save();
        //Toastr::success('Tag Successfully Saved ' ,'Success');
        return redirect()->route('vechicles.index');
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
        return view('users.individual.editvechicles',compact('vechicle'));

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
        $tag->user_id = Auth::user()->id;
        $tag->save();
        return redirect()->route('vechicles.index');
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
