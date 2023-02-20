<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use Illuminate\Http\Request;
use App\Http\Controllers\FormController;

class FormController extends Controller
{
    public function addIndex()
   {
    return view('addpost');
   }

    public  function addData(Request $request)
    {
       $request->validate([
          'pn'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64',
          'pd'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64',
          'pa'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64'
        ]);
    //  dd($request->all());
    FormModel::insert([
     'pn'=>$request['pn'],
     'pd'=>$request['pd'],
     'pa'=>$request['pa'],
     'pc'=>$request['pc']
    ]);
    FormModel::create($request->all());
    return redirect('/');
    }
    public function updateIndex($id)
   {
      $post=FormModel::find($id);
      // return $users;
      return view ('editpost',compact('post'));
   }
 
public function viewposts()
   {
      $posts=FormModel::all();
      return view('welcome',compact('posts'));
   }

   public function updatePost(Request $request)
   {
      $request->validate([
        'pn'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64',
        'pd'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64',
        'pa'=>'required|regex:/^[a-zA-Z]+$/|min:3|max:64'
       ]);
     $posts=FormModel::find($request->id);
     $posts->pn=$request->pn;
     $posts->pd=$request->pd;
     $posts->pa=$request->pa;
     $posts->pc=$request->pc;
     $posts->save();
     return redirect('/');
   }

   public function deletepost($id)
   {
      FormModel::where('id',$id)->delete();
      return redirect('/');
   }

   
}
