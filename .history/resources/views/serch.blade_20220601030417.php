@extends('layouts.defalt')

@section('content')
<div style="margin-top:50px;">
<h1>検索結果</h1>

  @if(isset($items))
<table class="table">
  <tr>
    <th>ユーザー名</th><th>年齢</th><th>性別</th>
  </tr>
  @foreach($items as $item)
    <tr>
      <td>{{$item->name}}</td><td>{{$item->gender}}</td><td>{{$item->email}}</td>
    </tr>
  @endforeach
</table>
@endif
@if(!empty($message))
<div class="alert alert-primary" role="alert">{{ $message}}</div>
@endif
</div>
@endsection

