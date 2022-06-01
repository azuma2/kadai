{{$items->appends(request()->query())->links()}}


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