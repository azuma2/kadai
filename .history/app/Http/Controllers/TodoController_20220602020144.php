<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todo::all();
        
         $items = DB::select('select * from todos');
        return view('/');
    }


    public function index2(Request $request)
    {
        $items = Todo::all();
        return view('kakunin', compact('items'));
    }

    public function index3()
    {
        $items = Todo::all();
        return view('san', ['items' => $items]);
    }

    public function index4()
    {
        $items = Todo::all();
        $items = Todo::Paginate(10);
        return view('kanri', ['items' => $items]);
    }



    public function remove(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/kanri');
    }






public function zz0(Request $request)
    {
        $data = ['msg'=>"テキストボックスに入力してください。"];
        return view('/zz', $data);
    }

    public function kari(Request $request)
    {
        $data = $request->all();
        $request->session()->put($data);
        $data = [
            'fname'=>$request->fname,
            'name'=>$request->name,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'postcode'=>$request->postcode,
            'address'=>$request->address,
            'building_name'=>$request->building_name,
            'opinion'=>$request->opinion,
            'msg'=>"入力値を元に表示しています。"
            
        ];
        return view('/kakunin', $data);
    }

        public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        $param = [
            'fname' => $request->fname,
            'name' => $request->name,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'postcode'=>$request->postcode,
            'address'=>$request->address,
            'building_name'=>$request->building_name,
            'opinion'=>$request->opinion,
        ];
        
        return view('/san', $param);
    }


public function complete2()
{
    $data = session()->all(); // ２）
    DB::table('todos')->insert([
            'fname' => $data["fname"],
            'name' => $data["name"],
            'gender'=>$data["gender"],
            'email'=>$data["email"],
            'postcode'=>$data["postcode"],
            'address'=>$data["address"],
            'building_name'=>$data["building_name"],
            'opinion'=>$data["opinion"]
    ]); // ３）
    return view('san');
}












public function serch(Request $request)
    {
        $keyword = $request->input('keyword');
        $keyword2 = $request->input('keyword2');
        $gender2 = $request->input('gender2');

        $query = Todo::query();

        if(!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('fname', 'LIKE', "%{$keyword}%");
        }

        if(!empty($keyword2)) {
            $query->where('email', 'LIKE', "%{$keyword2}%");
        }

        if(!empty($gender2)) {
            $query->where('gender', 'LIKE', "%{$gender2}%");
        }







        $items = $query->get();
        $items = $query->paginate(10);
        


        return view('kanri', compact('items', 'keyword'));
    }















    public function index99()
{
        $items = Todo::all();
        $items = Todo::Paginate(10);
        return view('test', ['items' => $items]);
}
 
// 確認フォーム
public function confirm(Request $request)
{
    $data = $request->all();
    $request->session()->put($data); // １）
     
    return view('confirm', compact("data"));
}
 
// 完了フォーム
public function complete()
{
    $data = session()->all(); // ２）
    DB::table('todos')->insert([
            
            'fname' => $data["fname"],
            'email' => $data["email"]
    ]); // ３）
    return view('complete');
}
}