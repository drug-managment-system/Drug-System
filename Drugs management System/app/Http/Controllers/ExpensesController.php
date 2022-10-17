<?php
namespace App\Http\Controllers;
use App\Models\Expenses;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ExpensesController extends Controller
{
         public function AddExpenses(){
            return view('\Add\AddExpenses');}
       
      
        public function store6(Request $request){
            $Expenses=new Expenses;
            $Expenses->Amount=$request->input('Amount');
            $Expenses->Detail=$request->input('Detail');
            $Expenses->Name=$request->input('Name');
            $Expenses->Photo=$request->input('Photo');
            $Expenses->Date=$request->input('Date');
            $Expenses->save();
            return redirect('/Expensess');}
            
            
 
 
            public function TrashingExpenses($id){
                $Expenses= Expenses::where('id',$id)->update(['Trash' => 1]);
                return redirect('/Expensess');}
                      
         
         
             public function destroyExpenses($id){
                 $Expenses= Expenses::where('id',$id)->delete();
                 return redirect()->back()->with('success','Patient Delete Successfully!');}
                      
                 
                 
         
             public function restoreExpenses($id){
                 $Expenses = Expenses::where('id',$id)->update(['Trash' => 0]);
                  
                    return redirect()->back()->with('success','Patient Restored Successfully!');
                 
                }
                     
                 
         
         
              public function TrashExpenses(){
                         $Expenses = Expenses::where('Trash',1)->get();
                         return view('Trash/TrashExpenses', compact('Expenses'));}
                     
         
         
             public function Expensess(){
                       $Expenses = Expenses::where('Trash',0)->get();
                       return view('Expensess', compact('Expenses'));}
             
        
 
  
        public function Exp_Edit($id){
              $Expenses = Expenses::find($id);
              return view('Edit/Exp_Edit',compact('Expenses'));}

     

        public function update6(Request $request, $id){
            $Expenses = Expenses::find($id);
            $Expenses->Amount = $request->input('Amount');
            $Expenses->Detail = $request->input('Detail');
            $Expenses->Name=$request->input('Name');
            $Expenses->Photo=$request->input('Photo');
            $Expenses->Date= $request->input('Date');
            $Expenses->update();
            return redirect('/Expensess');}
       
       
        }