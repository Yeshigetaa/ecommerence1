<?php

namespace App\Http\Controllers;
use App\Models\Catagory1;
use Illuminate\Http\Request;

class Catagory1Controller extends Controller
{
        //For testing purpose, use hard coded data, till we design UI
        
  public function register()
  {
  return view('Catagory1.register');
  }
    function store(Request $request)
    
    {
      $Catagory1 =new Catagory1();
      $Catagory1->id = $request->id;
      $Catagory1->name = $request->name;
     $is_saved = $Catagory1->save();
    if($is_saved){
    echo "  saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
    {
     $Catagory1 = Catagory1::all();
     return view('Catagory1.list', compact('Catagory1'));
    } 
    public function edit($id)
 {
 $Catagory1 = Catagory1::find($id);
 return view('Catagory1.edit', compact('Catagory1'));
 }
 public function update(Request $request)
 {
  $request->validate([
    'name' => 'required'
    ]);
    $Catagory1= Catagory1::find($request->id);
    $Catagory1->id = $request->id;
    $Catagory1->name = $request->name;
    $Catagory1->save();
    return redirect('Catagory1/list');
    }
    public function delete($id)
 {
  Catagory1::where('id', $id)->delete();
 return redirect('Catagory1/list');
   
}

public function search($id)
    {
     $Catagory1 = Catagory1::where('id',$id)->first();
     return view('Catagory1.search', compact('Catagory1'));
    } 
  }