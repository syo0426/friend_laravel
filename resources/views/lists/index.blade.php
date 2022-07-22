@extends('layouts.app')
@section('content')

<div class="panel panel-default">
    <div class="container">
        <p class="h3 fst-italic">〜 お店一覧 〜</p>
    </div>
 
    <div class="container">
        <a href="/list/store">登録</a>
        <table class="table table-striped task-table">
 
            <!-- テーブル本体 -->
            <tbody>
                <tr>
                    <th>店舗名</th>
                    <th>ジャンル</th>
                    <th>場所</th>
                    <th>  </th>
                </tr>
                @foreach ($lists as $list)
                <tr>
                    <!-- 会員情報 -->
                    <td class="table-text">
                        <div>{{ $list->title }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $list->genre }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $list->place }}</div>
                    </td>
                    <td>
                        <!-- TODO: 編集ボタン -->
                        <a href="{{url('/list/detail/'.$list->id)}}" class="btn friend-gurume text-white">詳細</a>
                        <a href="{{url('/list/edit/'.$list->id)}}" class="btn friend-gurume text-white">編集</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection