<?php
namespace App\Http\Controllers;
use App\Models\Notes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class NoteController extends Controller
{
     public function AddNotes(){
      return view('\Add\AddNotes');}
  


    public function store11(Request $request){
            $Notes=new Notes;
            $Notes->Name=$request->input('Name');
            $Notes->Photo=$request->input('Photo');
            $Notes->Amount=$request->input('Amount');
            $Notes->Detail=$request->input('Detail');
            $Notes->Date=$request->input('Date');
            $Notes->save();
            return redirect('/Notes');}
           


 
    public function TrashingNote($id){
       $Notes = Notes::where('id',$id)->update(['Trash' => 1]);
       return redirect('/Notes');}
             


    public function destroyNote($id){
        $Notes= Notes::where('id',$id)->delete();
        return redirect()->back()->with('success','Patient Deleted Successfully!');}
             
        
        

    public function restoreNote($id){
        $Notes = Notes::where('id',$id)->update(['Trash' => 0]);
        return redirect()->back()->with('success','Patient Restored Successfully!');}
            
        


     public function TrashNote(){
                $Notes = Notes::where('Trash',1)->get();
                return view('Trash/TrashNote', compact('Notes'));}
            


    public function Notes(){
              $Notes = Notes::where('Trash',0)->get();
              return view('Notes', compact('Notes'));}
    
  
   

    public function Notes_Edit($id)
          {$Notes = Notes::find($id);
          return view('Edit/Notes_Edit',compact('Notes'));}

   
    
    public function update11(Request $request, $id){
          $Notes = Notes::find($id);
          $Notes->Name=$request->input('Name');
          $Notes->Photo=$request->input('Photo');
          $Notes->Amount = $request->input('Amount');
          $Notes->Detail = $request->input('Detail');
          $Notes->Date = $request->input('Date');
          $Notes->update();
          return redirect('/Notes');}



        }