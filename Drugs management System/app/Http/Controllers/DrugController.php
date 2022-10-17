<?php
namespace App\Http\Controllers;
use App\Models\Drugs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class DrugController extends Controller
{
         public function AddDrugs(){
            return view('\Add\AddDrugs');}
       
    
    
    
     public function store10(Request $request){
                $Drugs=new Drugs;
                $Drugs->DrugName=$request->input('DrugName');
                $Drugs->Quantity=$request->input('Quantity');
                $Drugs->Category=$request->input('Category');
                $Drugs->Price=$request->input('Price');
                $Drugs->ExpireDate=$request->input('ExpireDate');
                $Drugs->AddCompany_ID=$request->input('AddCompany_ID');
                $Drugs->save();
                return redirect('/Drugs');}

  

    
                public function TrashingDrug($id){
                    $Drugs = Drugs::where('id',$id)->update(['Trash' => 1]);
                    return redirect('/Drugs');}
                          
             
             
                 public function destroyDrug($id){
                     $Drugs= Drugs::where('id',$id)->delete();
                     return redirect()->back()->with('success','Patient Deleted Successfully!');}
                          
                     
                     
             
                 public function restoreDrug($id){
                     $Drugs= Drugs::where('id',$id)->update(['Trash' => 0]);
                     return redirect()->back()->with('success','Patient Restored Successfully!');}
                         
                     
             
             
                  public function TrashDrug(){
                             $Drugs = Drugs::where('Trash',1)->get();
                             return view('Trash/TrashDrug', compact('Drugs'));}
                         
             
             
                 public function Drugs(){
                           $Drugs = Drugs::where('Trash',0)->get();
                           return view('Drugs', compact('Drugs'));}
                 
    
    

     public function Drugs_Edit($id){
                $Drugs = Drugs::find($id);
                return view('Edit/Drugs_Edit',compact('Drugs'));}



     public function update10(Request $request, $id){
               $Drugs = Drugs::find($id);
               $Drugs->DrugName = $request->input('DrugName');
               $Drugs->Quantity = $request->input('Quantity');
               $Drugs->Price = $request->input('Price');
               $Drugs->Category = $request->input('Category');
               $Drugs->ExpireDate = $request->input('ExpireDate');
               $Drugs->AddCompany_ID = $request->input('AddCompany_ID');
               $Drugs->update();
               return redirect('/Drugs');}



            }