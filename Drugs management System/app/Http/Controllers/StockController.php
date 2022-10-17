<?php
namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class StockController extends Controller
{
    public function AddStock(){
            return view('\Add\AddStock');}
    
    
    
     public function store5(Request $request){
                $Stock=new Stock;
                $Stock->StockName=$request->input('StockName');
                $Stock->DrugName=$request->input('DrugName');
                $Stock->Quantity=$request->input('Quantity');  
                $Stock->Category=$request->input('Category');
                $Stock->EntryDate=$request->input('EntryDate');
                $Stock->ExpireDate=$request->input('ExpireDate');
                $Stock->Drug_ID = $request->input('Drug_ID');
                $Stock->save();
                return redirect('/Stocks');}

  


                public function TrashingStock($id){
                    $Stock = Stock::where('id',$id)->update(['Trash' => 1]);
                    return redirect('/Stocks');}
                          
             
             
                 public function destroyStock($id){
                     $Stock= Stock::where('id',$id)->delete();
                     return redirect()->back()->with('success','Patient Deleted Successfully!');}
                          
                     
                     
             
                 public function restoreStock($id){
                     $Stock = Stock::where('id',$id)->update(['Trash' => 0]);
                     return redirect()->back()->with('success','Patient Restored Successfully!');}
                         
                     
             
             
                  public function TrashStock(){
                             $Stock = Stock::where('Trash',1)->get();
                             return view('Trash/TrashStock', compact('Stock'));}
                         
             
             
                 public function Stocks(){
                           $Stock = Stock::where('Trash',0)->get();
                           return view('Stocks', compact('Stock'));}
                 
    
    

     public function Stock_Edit($id){
                $Stock = Stock::find($id);
                return view('Edit/Stock_Edit',compact('Stock'));}
 
  
     public function update5(Request $request, $id){
               $Stock = Stock::find($id);
               $Stock->StockName=$request->input('StockName');
               $Stock->DrugName=$request->input('DrugName');
               $Stock->Quantity=$request->input('Quantity'); 
               $Stock->Category=$request->input('Category');
               $Stock->EntryDate=$request->input('EntryDate');
               $Stock->ExpireDate=$request->input('ExpireDate');
               $Stock->Drug_ID = $request->input('Drug_ID');
               $Stock->update();
               return redirect('/Stocks');}


            }