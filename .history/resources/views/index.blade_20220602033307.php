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
</style>
<h2 class=otoiawase>
  お問い合わせ
</h2>
@section('content')
<table>
  @if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
  <tr>
    <th>お名前 <font color="red">*</font></th>
    <th>        
      <form action="/kari" method="post">
      @csrf
      <input type="text" class="input" name="fname">
    </th>
    <th> 
      <input type="text" class="input" name="name">
    </th>
  </tr>
    <tr>
    <th></th>
    <th class="usuji">例）山田</th>
    <th class="usuji">例）太郎</th>
  </tr>

  <tr>
    <th>性別 <font color="red">*</font></th>
    <th class="radio">        
      <label><input type="radio" checked value="男性" name="gender" {{ old("gender") == "男性" ? 'checked' : ''}}>男性</label>
    </th>
    <th class="radio">        
      
      <label><input type="radio" value="女性" name="gender" {{ old("gender") == "女性" ? 'checked' : ''}}>女性</label>
    </th>
  </tr>
  <tr>
    <th></th>
    <th class="usuji"></th>
    <th class="usuji"></th>
  </tr>

  <tr>
    <th>メールアドレス <font color="red">*</font></th>
    <th colspan="2">        

      <input type="text" class="input2" name="email">

    </th>
  </tr>
  <tr>
    <th></th>
    <th class="usuji">例）test@mail.com</th>
    <th class="usuji"></th>
  </tr>

  <tr>
    <th>郵便番号 <font color="red">*</font></th>
    <th colspan="2">        
      <input type="text" class="input2" name="address">
    </th>
  </tr>
  <tr>
    <th></th>
    <th class="usuji">例）123-4567</th>
    <th class="usuji"></th>
  </tr>

  <tr>
    <th>住所 <font color="red">*</font></th>
    <th colspan="2">        
      <input type="text" class="input2" name="postcode">
    </th>
  </tr>
  <tr>
    <th></th>
    <th class="usuji">例）東京都渋谷区千駄ヶ谷1-2-3</th>
    <th class="usuji"></th>
  </tr>

  <tr>
    <th>建物名 </th>
    <th colspan="2">        
      <input type="text" class="input2" name="building_name">
    </th>
  </tr>
  <tr>
    <th></th>
    <th class="usuji">例）千駄ヶ谷マンション101</th>
    <th class="usuji"></th>
  </tr>

  <tr>
    <th>ご意見 <font color="red">*</font></th>
    <th colspan="2">        
      <textarea type="text" name="opinion" class="input3"></textarea>
    </th>
  </tr>
  <tr>
    <th></th>
    <th class="usuji"></th>
    <th class="usuji"></th>
  </tr>


</table>
 
          <input  class="button" type="submit"  value="追加" />
</form>

@endsection
