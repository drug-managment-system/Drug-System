<?php
namespace App\Http\Controllers;
use App\Models\Bill;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class BillController extends Controller
{
         public function AddBill(){
            return view('\Add\AddBill');}
    
    

     public function store3(Request $request){
            $Bill=new Bill;
            $Bill->DrugName=$request->input('DrugName');
            $Bill->Quantity=$request->input('Quantity');
            $Bill->Price=$request->input('Price');
            $Bill->Total=$request->input('Total');
            $Bill->Discount=$request->input('Discount');
            $Bill->Stock_ID=$request->input('Stock_ID');
            $Bill->Dilevared_By=$request->input('Dilevared_By');
            $Bill->Loan=$request->input('Loan');
            $Bill->Cash=$request->input('Cash');
            $Bill->Customer_ID=$request->input('Customer_ID');
            $Bill->Date=$request->input('Date');
            $Bill->save();
            return redirect('/Bills');  }
 
            

     
    public function TrashingBill($id){
        $Bill = Bill::where('id',$id)->update(['Trash' => 1]);
        return redirect('/Bills');}
              
 
 
     public function destroyBill($id){
         $Bill= Bill::where('id',$id)->delete();
         return redirect()->back()->with('success','Patient Delete Successfully!');}
              
         
         
 
     public function restoreBill($id){
         $Bill = Bill::where('id',$id)->update(['Trash' => 0]);
         return redirect()->back()->with('success','Patient Restored Successfully!');}
             
         
 
 
      public function TrashBill(){
                 $Bill= Bill::where('Trash',1)->get();
                 return view('Trash/TrashBill', compact('Bill'));}
             
 
 
     public function Bills(){
               $Bill = Bill::where('Trash',0)->get();
               return view('Bills', compact('Bill'));}
     

  
 
     public function Bill_Edit($id){
           $Bill = Bill::find($id);
           return view('Edit/Bill_Edit',compact('Bill'));}
 
 

    public function update3(Request $request, $id){
           $Bill = Bill::find($id);
           $Bill->DrugName=$request->input('DrugName');
           $Bill->Quantity=$request->input('Quantity');
           $Bill->Price=$request->input('Price');
           $Bill->Total=$request->input('Total');
           $Bill->Discount=$request->input('Discount');
           $Bill->Stock_ID=$request->input('Stock_ID');
           $Bill->Dilevared_By=$request->input('Dilevared_By');
           $Bill->Loan=$request->input('Loan');
           $Bill->Cash=$request->input('Cash');
           $Bill->Customer_ID=$request->input('Customer_ID');
           $Bill->Date=$request->input('Date');
           $Bill->update();
           return redirect('/Bills');}
}