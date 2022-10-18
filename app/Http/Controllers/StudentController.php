<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function showInfo(Student $student)
    {
       
       
        $user = User::all();
        
       
        return view('showinfo',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student,$id=null)
    {
        
        $delete = User::find($id)->delete();
        if($delete){
            return redirect('userinfo');
        }
    }

    public function trash()
    {
        $delete = User::onlyTrashed()->get();
      
        return view('trash',['delete'=>$delete]);
    }

    public function restore(Student $student,$id=null)
    {
        
        $restore = User::withTrashed()->find($id)->restore();
        if($restore){
            return redirect('/userinfo');
        }else{
            dd("error");
        }


    //     public function restore($id);
    // {
    //     User::withTrashed()->find($id)->restore();
  
    //     return back();
    // }  
    //     // if()
    //     $customer = User::withTrashed()->find($id)->restore();
    //     dd($customer);
    //     if(!is_null($customer)){
    //         dd("No Record Found");
    //     }else{
            
            
    //     }
       
       return view('restore',['customer'=>$customer]);
        
    }
}
