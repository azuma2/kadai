<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;


    protected $fillable = ['fname', 'name', 'gender','email','postcode','address','building_name','opinion','created_at','updated_at'];

    public static $rules = array(
        'fname' => 'required',
        'name' => 'required',
        'gender' => 'required|max:20',
        'email' => 'required',
        'postcode' => 'required',
        'address' => 'required',
        'opinion' => 'required|max:200',
    );

    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->fname . '(' . $this->name .  '才'.') '.$this->gender.$this->email.$this->postcode.$this->address.$this->opinion;
        return $txt;
    }

    public static function getDate($from, $until)
    {
        //created_atが20xx/xx/xx ~ 20xx/xx/xxのデータを取得
        $date = Todo::whereBetween("updated_at", [$from, $until])->get();
        return $date;
    }

}
