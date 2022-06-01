@extends('layouts.default')
<style>
.otoiawase{
    padding-left: 200px;
    margin: 5px;

}

form{
  margin: 0px;
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
        margin-left: 50px;
        margin-top: 5px;
}
    body {
      font-size:16px;
      margin: 30px;
   
    }
    
    
        td {
      padding: 5px 10px;
      text-align: center;
    }

    .narabe{
      padding: 20px;
      margin-left:100px ;

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
}

    .card {
    background-color: #fff;
    width: 50vw;
    padding: 10px;
    border-radius: 10px;
    border: 4px solid;
    margin-left: 200px;
    margin-top: 30px;
}
    h1 {
      font-size:32px;
      color:white;
      text-shadow:1px 0 5px #289ADC;
      margin-left: 1px
    }
    .content {
      margin:10px; 
    }

    .th{
      border-bottom: solid;
    }

    table td {
    max-width: 300px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

table td:hover {
    white-space: normal;
}


    svg.w-5.h-5 {  /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
    }

</style>
  <div class="card">
    <h2 class="otoiawase">管理システム</h2>
      <table>
        <tr>
          <th>
            お名前
          </th>
          <td>
    <form action="/serch" method="GET">
            @csrf
            <input type="text" class="input2" name="keyword" >
          </td>
          <td>
            
          </td>
          <th>
            性別
          </th>
          <td>
              <th class="radio">
                <label><input checked  type="radio" value="性"  name="gender2" {{ old("gender") == "性" ? 'checked' : ''}}>全部</label>
            </th>
            <th class="radio">       
              <label><input type="radio"  value="男性" name="gender2" {{ old("gender") == "男性" ? 'checked' : ''}}>男性</label>
            </th>
            <th class="radio">        
              <label><input type="radio" value="女性" name="gender2" {{ old("gender") == "女性" ? 'checked' : ''}}>女性</label>
          </td>
        </tr>
        <tr>
          <th>
            登録日
          </th>
          <td>
            

          </td>
          <td>
            ~
          </td>
          <td>

          </td>
        </tr>
        <tr>
          <th>
            メールアドレス
          </th>
          <td>
            <input type="text" class="input2"  name="keyword2">
          </td>
        </tr>
      </table>
    
  
  <input type="submit" class="button" value="検索">
  <input type="reset" value="リセット" onclick="location.href='/kanri'">
</form>
    
  </div>

{{ $items->render() }}

  <hr>
  <div class="narabe">
    <table>
      <tr class="midasi">
        <th>ID</th>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
        <th></th>
      </tr>

      <tr>
        @foreach ($items as $item)
        <td>
          {{$item->id}}
        </td>
        <td>
          {{$item->fname}} {{$item->name}}
        </td>
        <td>
          {{$item->gender}}
        </td>
        <td>
          {{$item->email}}
        </td>
        <td>
          {{$item->opinion}}
        </td>
        <td>
          
          <form action="/todo/delete" method="post" >
              @csrf
            <input  type="hidden" name="id" value="{{$item->id}}" >
            <input class="button" type="submit" value="削除" >
          </form>
        </td>
      </tr>
    @endforeach
    </table>
  </div>
