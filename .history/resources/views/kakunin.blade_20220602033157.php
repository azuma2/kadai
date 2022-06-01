@extends('layouts.default')
<style>
.otoiawase{
    padding-left: 200px;

}

form{
  margin: 0px;
}

.radio{
  text-align: left;
  padding-left: 20px;
}

.input{
    width: 80%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
}

.input2{
    width: 90%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
}

.input3{
    width: 90%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
    height: 10em;
}

.usuji{
  text-align: left;
  font-size: small;
  color: #979797;
  padding-left: 20px;
}


.button {
    text-align: left;
    border: 2px solid #dc70fa;
    font-size: 12px;
    color: #dc70fa;
    background-color: #fff;
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.4s;
    outline: none;
    margin-left: 250px;
    margin-top: 5px;
}

.shusei{
  margin-left: 250px;
  font-size: small;
  color: #979797;
  padding: 5px;
}
</style>
<h2 class=otoiawase>
  内容確認
</h2>
@section('content')
<table>
  <tr>
    <th>お名前</th>
    <th>
      {{$fname}}
    </th>
    <th>        
      {{$name}}
    </th>
  </tr>
    <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>

  <tr>
    <th>性別 </th>
    <th>        
      {{$gender}}
    </th>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>

  <tr>
    <th>メールアドレス</th>
    <th colspan="2">        
      {{$email}}
    </th>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>

  <tr>
    <th>郵便番号</th>
    <th colspan="2">        

      {{$postcode}}

    </th>
  </tr>
  <tr>
    <th></th>
    <th ></th>
    <th ></th>
  </tr>

  <tr>
    <th>住所</th>
    <th colspan="2">        
      {{$address}}
    </th>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>

  <tr>
    <th>建物名 </th>
    <th colspan="2">        
      {{$building_name}}
    </th>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>

  <tr>
    <th>ご意見</th>
    <th colspan="2">        
      {{$opinion}}
    </th>
  </tr>
  <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>
</table>

<form action="test/complete2" method="post">
  @csrf
  <input type="hidden" name="fname" value="{{$fname}}">
  <input type="hidden" name="name" value="{{$name}}">
  <input type="hidden" name="gender" value="{{$gender}}">
  <input type="hidden" name="email" value="{{$email}}">
  <input type="hidden" name="address" value="{{$address}}">
  <input type="hidden" name="building_name" value="{{$building_name}}">
  <input type="hidden" name="opinion" value="{{$opinion}}">
  <input class="button" type="submit" value="送信" />
</form>
<div class="shusei"><a href="javascript:history.back()">修正する</a></div>
