<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Storage;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = "rajdeeprangra@gmail.com";
        $users = new User;
        $users = $users->validUsers($role);
       
    }

    public function register()
    {
       
        return view('employee.register');
    }


    public function addEmployee(Request $request)
    {
        
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
      
        if($employee->save()){
          return redirect()->route('employee.Info')->with('registersuccess','You Have Registered Succesfully',['employee'=>$employee]);
            
        }else{
            dd("No");
            return redirect()->route('employee.Info')->with('registerfail','Your Registration Has been Failed',['employee'=>$employee]);
        }
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addDetails(Request $request,$id=null)
    {
        if($request->isMethod('get')){
            $getid = Employee::find($id)->first();
            
            return view ('employee.adddetails',['getid'=>$getid]);
        }else{
          
        $getid = Employee::find($id);
        $details = new EmployeeDetails;
        $details->address = $request->address;
        $details->city =$request->city;
        $details->state =$request->state;
        $details->zip =$request->zip;
        $details->salary =$request->salary;
        $details->education =$request->education;
        $details->role =$request->role;
        $details->department =$request->department;

        $info = $getid->employeedetails()->save($details);
        
        
        if($info){
          return redirect('employeeinfo')->with('success',['Information Added Sucessfuly']);
        }else{
            dd("No");
        }
        return view('employee.adddetails',[$addDetail]);
        }
    }
 
    public function employeeInfo()
    {
        $employeeDetail = Employee::get();
        return view('employee.employee_details',['employeeDetail'=>$employeeDetail]);
    }

    public function showDetails(Request $request,$id=null)
    {
        $employee = Employee::find($id);
        
        $employeedetail = $employee->employeedetails;
       
        $salary = EmployeeDetails::find( $employeedetail[0]->employee_id);
        
        $parent = $salary->employee;
         
        return view('employee.showdetails',['parent'=>$parent,'employee'=>$employee,'employeedetail'=>$employeedetail]);
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $createUser = $this->create($data);
  
        $token = Str::random(64);
  
        UserVerify::create([
              'user_id' => $createUser->id, 
              'token' => $token
            ]);
  
        Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Email Verification Mail');
          });
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
}
