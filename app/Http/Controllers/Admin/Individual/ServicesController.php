<?php

namespace App\Http\Controllers\Admin\Individual;
use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
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
    
        $test = Service::all();
        
         $vechicles = $test;
        
        return view('admin.individual.service.index',compact('vechicles','users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('is_auth' ,'=','individual' )->get();
        return view('admin.individual.service.create',compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Service();

        $tag->r_date = $request->r_date;
        $tag->r_type = $request->r_type;
        $tag->r_cost = $request->r_cost;

        $tag->m_date = $request->m_date;
        $tag->m_type = $request->m_type;
        $tag->m_cost = $request->m_cost;
        $tag->user_id = $request->users;

        $tag->save();
      //  $tags->users()->attach($request->users);
        return redirect()->route('services.index');

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
        $user = Service::find($id);
        return view('admin.individual.service.edit',compact('user'));

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
        $tag = Service::find($id);

        $tag->r_date = $request->r_date;
        $tag->r_type = $request->r_type;
        $tag->r_cost = $request->r_cost;

        $tag->m_date = $request->m_date;
        $tag->m_type = $request->m_type;
        $tag->m_cost = $request->m_cost;
        $tag->user_id = $request->user_id;

        $tag->save();
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->back();
    }
}
