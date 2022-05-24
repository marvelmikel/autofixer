<?php

namespace App\Http\Controllers\Admin\Individual;
use App\Models\Document;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentsController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('is_auth' ,'=','individual' )->get();
        return view('admin.individual.document.create',compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //for invoice
         $audio = $request->invoice;
         if(isset($audio))
         {
        
            $newNam = 'Invoice from Auto-fixer ';
 //            make unipue name for audio
             $currentDate = Carbon::now()->toDateString();
             $audioName  ='-'.$newNam.'-'.$currentDate.'-'.uniqid().'.'.$audio->getClientOriginalExtension();
 
             if(!Storage::disk('public')->exists('uploads'))
             {
                 Storage::disk('public')->makeDirectory('uploads');
             }
             $audio->move('storage/uploads', $audioName);
         }
 
         //for report
         $audio1 = $request->report;
         if(isset($audio1))
         {
          
            $newName = 'Diagnostics Report from Auto-fixer';
 //            make unipue name for audio
             $currentDate = Carbon::now()->toDateString();
             $audioName2  ='-'.$newName.'-'.$currentDate.'-'.uniqid().'.'.$audio1->getClientOriginalExtension();
 
            

             if(!Storage::disk('public')->exists('uploads'))
             {
                 Storage::disk('public')->makeDirectory('uploads');
             }
             $audio1->move('storage/uploads', $audioName2);
         }
         
 
 
         $tag = new Document();
         $tag->user_id = $request->users;
         if(empty($audioName)){
        }else {
            $tag->invoice = $audioName;
        }
         if(empty($audioName2)){
        }else {
            $tag->report = $audioName2;
        }
         $tag->description = $request->description;
         
         $tag->save();
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
