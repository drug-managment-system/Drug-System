<?php
namespace App\Http\Controllers;
use App\Models\Departement;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class DepartementController extends Controller
{
     public function AddDepartement(){
      return view('\Add\AddDepartement');}

 
  
    public function store4(Request $request){
            $Departement=new Departement;
            $Departement->DepartementName=$request->input('DepartementName');
            $Departement->save();
            return redirect('/Departement');}
            public function store20(Request $request){
                return redirect('/Departement');}
           


    
                public function TrashingDepartement($id){
                    $Departement= Departement::where('id',$id)->update(['Trash' => 1]);
                    return redirect('/Departement');}
                          
             
             
                 public function destroyDepartement($id){
                     $Departement= Departement::where('id',$id)->delete();
                     return redirect()->back()->with('success','Patient Delted Successfully!');}
                          
                     
                     
             
                 public function restoreDepartement($id){
                     $Departement = Departement::where('id',$id)->update(['Trash' => 0]);
                     return redirect()->back()->with('success','Patient Restored Successfully!');}
                         
                     
             
             
                  public function TrashDepartement(){
                             $Departement = Departement::where('Trash',1)->get();
                             return view('Trash/TrashDepartement', compact('Departement'));}
                         
             
             
                 public function Departement(){
                           $Departement = Departement::where('Trash',0)->get();
                           return view('Departement', compact('Departement'));}
                 
  

    public function Dep_Edit($id)
          {$Departement = Departement::find($id);
          return view('Edit/Dep_Edit',compact('Departement'));}


    
    public function update4(Request $request, $id){
          $Departement = Departement::find($id);
          $Departement->DepartementName = $request->input('DepartementName');
          $Departement->update();
          return redirect('/Departement');}



        }