<?php
namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class EmployeeController extends Controller
{
     public function AddEmployee(){
        return view('\Add\AddEmployee'); }

     

    public function store1(Request $request){
        $Employee=new Employee;
        $Employee->Name=$request->input('Name');
        $Employee->Photo=$request->input('Photo');
        $Employee->FatherName=$request->input('FatherName');
        $Employee->Address=$request->input('Address');
        $Employee->Email=$request->input('Email');
        $Employee->Salary=$request->input('Salary');
        $Employee->Job=$request->input('Job');
        $Employee->IncomeDate=$request->input('IncomeDate');
        $Employee->DepID=$request->input('DepID');
        $Employee->save();
        return redirect('/Employees'); }



        public function TrashingEmployee($id){
            $Employee = Employee::where('id',$id)->update(['Trash' => 1]);
            return redirect('/Employees');}
                  
     
     
         public function destroyEmployee($id){
             $Employee= Employee::where('id',$id)->delete();
             return redirect()->back()->with('success','Patient Deleted Successfully!');}
                  
             
             
     
         public function restoreEmployee($id){
             $Employee = Employee::where('id',$id)->update(['Trash' => 0]);
             return redirect()->back()->with('success','Patient Restored Successfully!');}
                 
             
     
     
          public function TrashEmployee(){
                     $Employee = Employee::where('Trash',1)->get();
                     return view('Trash/TrashEmployee', compact('Employee'));}
                 
     
     
         public function Employees(){
                   $Employee= Employee::where('Trash',0)->get();
                   return view('Employees', compact('Employee'));}
         
 
 
      
    public function Emp_Edit($id)
        {$Employee = Employee::find($id);
        return view('Edit/Emp_Edit',compact('Employee'));}
 
  
    public function update(Request $request, $id) {
        $Employee = Employee::find($id);
        $Employee->Name = $request->input('Name');
        $Employee->Photo = $request->input('Photo');
        $Employee->FatherName = $request->input('FatherName');
        $Employee->Salary = $request->input('Salary');
        $Employee->Email = $request->input('Email');
        $Employee->Job = $request->input('Job');
        $Employee->Address = $request->input('Address');
        $Employee->IncomeDate = $request->input('IncomeDate');
        $Employee->DepID = $request->input('DepID');
        $Employee->update();
        return redirect('/Employees');}
  
       

}