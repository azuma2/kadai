<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['gname', 'uname', 'nationality'];

    public static $rules = array(
        'gname' => 'required',
        'uname' => 'integer|min:0|max:150',
        'nationality' => 'required'
    );

    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age .  '才'.') '.$this->nationality;
        return $txt;
    }
}
