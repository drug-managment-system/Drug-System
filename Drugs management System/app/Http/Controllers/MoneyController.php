<?php
namespace App\Http\Controllers;
use App\Models\Money;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class MoneyController extends Controller
{
         public function AddMoney(){
            return view('\Add\AddMoney');}
    
    
        public function store13(Request $request){
            $Money=new Money;
            $Money->Total_Blance=$request->input('Total_Blance');
            $Money->Pre_Blance=$request->input('Pre_Blance');
            $Money->Loan=$request->input('Loan');
            $Money->Cash=$request->input('Cash');
            $Money->Bill_ID=$request->input('Bill_ID');
            $Money->Date=$request->input('Date');
            $Money->save();
            return redirect('/Money');}
 
  
 
            public function TrashingMoney($id){
                $Money = Money::where('id',$id)->update(['Trash' => 1]);
                return redirect('/Money');}
                      
         
         
             public function destroyMoney($id){
                 $Money= Money::where('id',$id)->delete();
                 return redirect()->back()->with('success','Patient Deleted Successfully!');}
                      
                 
                 
         
             public function restoreMoney($id){
                 $Money= Money::where('id',$id)->update(['Trash' => 0]);
                 return redirect()->back()->with('success','Patient Restored Successfully!');}
                     
                 
         
         
              public function TrashMoney(){
                         $Money =Money::where('Trash',1)->get();
                         return view('Trash/TrashMoney', compact('Money'));}
                     
         
         
             public function Money(){
                       $Money = Money::where('Trash',0)->get();
                       return view('Money', compact('Money'));}
             
  
 
        public function Money_Edit($id){
              $Money = Money::find($id);
              return view('Edit/Money_Edit',compact('Money'));}
 

     

    public function update13(Request $request, $id){
           $Money = Money::find($id);
           $Money->Total_Blance=$request->input('Total_Blance');
           $Money->Cash=$request->input('Cash');
           $Money->Bill_ID=$request->input('Bill_ID');
           $Money->Pre_Blance=$request->input('Pre_Blance');
           $Money->Loan=$request->input('Loan');
           $Money->Date=$request->input('Date');
           $Money->update();
           return redirect('/Money');}
            
             
          
    
}
         