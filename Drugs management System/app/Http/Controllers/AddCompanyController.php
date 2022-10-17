<?php
namespace App\Http\Controllers;
use App\Models\AddCompany;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class AddCompanyController extends Controller
{
      
     public function AddCompany1(){
        return view('\Add\AddCompany1');}
     
      
      
    public function store14(Request $request){
        $AddCompany=new AddCompany;
        $AddCompany->Name=$request->input('Name');
        $AddCompany->OwnerName=$request->input('OwnerName');
        $AddCompany->Address=$request->input('Address');
        $AddCompany->Email=$request->input('Email');
        $AddCompany->Total_Purchase=$request->input('Total_Purchase');
        $AddCompany->Payment=$request->input('Payment');
        $AddCompany->Date=$request->input('Date');
        $AddCompany->save();
        return redirect('/AddCompany');}


    
        public function TrashingAddCompany($id){
            $AddCompany = AddCompany::where('id',$id)->update(['Trash' => 1]);
            return redirect('/AddCompany');}
                  
     
     
         public function destroyAddCompany($id){
             $AddCompany= AddCompany::where('id',$id)->delete();
             return redirect()->back()->with('success','Patient Delete Successfully!');}
                  
             
             
     
         public function restoreAddCompany($id){
             $AddCompany = AddCompany::where('id',$id)->update(['Trash' => 0]);
             return redirect()->back()->with('success','Patient Restored Successfully!');}
                 
             
     
     
          public function TrashAddCompany(){
                     $AddCompany = AddCompany::where('Trash',1)->get();
                     return view('/Trash/TrashAddCompany', compact('AddCompany'));}
                 
     
     
         public function AddCompany(){
                   $AddCompany = AddCompany::where('Trash',0)->get();
                   return view('AddCompany', compact('AddCompany'));}
         
 
 
      
    public function AddCompany_Edit($id){
        $AddCompany = AddCompany::find($id);
        return view('Edit/AddCompany_Edit',compact('AddCompany'));}
 
  
    public function update14(Request $request, $id) {
        $AddCompany = AddCompany::find($id);
        $AddCompany->Name = $request->input('Name');
        $AddCompany->OwnerName = $request->input('OwnerName');
        $AddCompany->Address = $request->input('Address');
        $AddCompany->Email = $request->input('Email');
        $AddCompany->Total_Purchase = $request->input('Total_Purchase');
        $AddCompany->Payment = $request->input('Payment');
        $AddCompany->Date = $request->input('Date');
        $AddCompany->update();
        return redirect('/AddCompany');}
 



        
}