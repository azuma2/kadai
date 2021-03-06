<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use App\Date;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todo::all();

        return view('/index');
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

public function create()
{
    $data = session()->all(); 
    Todo::create([
            'fname' => $data["fname"],
            'name' => $data["name"],
            'gender'=>$data["gender"],
            'email'=>$data["email"],
            'postcode'=>$data["postcode"],
            'address'=>$data["address"],
            'building_name'=>$data["building_name"],
            'opinion'=>$data["opinion"]
    ]); 
    return view('san');
}

public function serch(Request $request)
    {
        $keyword = $request->input('keyword');
        $keyword2 = $request->input('keyword2');
        $gender2 = $request->input('gender2');
        $from = $request->input('from');
        $until = $request->input('until');

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

        if (!empty($from) && !empty($until)) {
            //ハッシュタグの選択された20xx/xx/xx ~ 20xx/xx/xxのレポート情報を取得
            $query->whereBetween('updated_at', [$from, $until]);
        } else {
            //リクエストデータがなければそのままで表示
            $item = Todo::get();
        }

        $items = $query->get();
        $items = $query->paginate(10)->withQueryString();
        
        return view('kanri', compact('items', 'keyword'));
    }

}