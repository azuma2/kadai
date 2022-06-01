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


{{ $items->appends(request()->query())->links()}} }}

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
