<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index(Request $request)
    {
        $item2s = Author::all();
        $narabe = ['msg'=>"テキストボックスに入力してください。"];
        return view('index',  $narabe);
    }

    public function create(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        Author::create($form);
                $narabe = [
          
          'gname'=>$request->gname,
          'uname'=>$request->uname,

            'msg'=>"入力値を元に表示しています。"
        ];
    
        return view('/kakunin', $narabe);
    }

    
 public function edit(Request $request)
    {
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        unset($form['_token']);
        Author::where('id', $request->id)->update($form);
        return redirect('/kakunin');
    }


    
    public function inputForm2()
    {
        $data = ['msg'=>"テキストボックスに入力してください。"];
        return view('/kakunin', $data);
    }

    public function formPost2(Request $request)
    {
        $data = [
          'name'=>$request->name,
            'age'=>$request->$age,
            'msg'=>"入力値を元に表示しています。"
        ];
        return view('/kakunin', $data);
    }
}