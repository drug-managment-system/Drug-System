<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
 
    public function AddCustomer(){
        return view('\Add\AddCustomer'); }
        
        

    public function store2(Request $request){
        $Customer=new Customer;
        $Customer->Name=$request->input('Name');
        $Customer->Photo=$request->input('Photo');
        $Customer->FatherName=$request->input('FatherName');
        $Customer->Address=$request->input('Address');
        $Customer->Email=$request->input('Email');
        $Customer->save();
        return redirect('/Customer');}
 
    public function TrashingCustomer($id){
       $Customer = Customer::where('id',$id)->update(['Tash' => 1]);
       return redirect('/Customer');}
             


    public function destroyCustomer($id){
        $Customer= Customer::where('id',$id)->delete();
        return redirect()->back()->with('success','Patient Deleted Successfully!');}
             
        
        

    public function restoreCustomer($id){
        $Customer = Customer::where('id',$id)->update(['Tash' => 0]);
        return redirect()->back()->with('success','Patient Restored Successfully!');}
            
        


     public function TrashCustomer(){
                $Customer = Customer::where('Tash',1)->get();
                return view('Trash/TrashCustomer', compact('Customer'));}
            


    public function Customer(){
              $Customer = Customer::where('Tash',0)->get();
              return view('Customer', compact('Customer'));}
    


    public function Cust_Edit($id){
        $Customer = Customer::find($id);
        return view('Edit/Cust_Edit',compact('Customer'));}


       
    public function update1(Request $request, $id){
         $Customer = Customer::find($id);
         $Customer->Photo=$request->input('Photo');
         $Customer->Name = $request->input('Name');
         $Customer->FatherName = $request->input('FatherName');
         $Customer->Address= $request->input('Address');
         $Customer->Email = $request->input('Email'); 
         $Customer->update();
         return redirect('/Customer'); }
 

       
       
}