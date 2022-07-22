@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                詳細画面
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>店舗名</th>
                            <td>{{$lists->title}}</td>
                        </tr>
                        <tr>
                            <th>ジャンル</th>
                            <td>{{$lists->genre}}</td>
                        </tr>
                        <tr>
                            <th>場所</th>
                            <td>{{$lists->place}}</td>
                        </tr>
                        <tr>
                            <th>詳細</th>
                            <td>{{$lists->detail}}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="/list/edit/{{$lists->id}}" class="btn friend-gurume">編集</a>
                <a href="/lists" class="btn friend-gurume">戻る</a>
            </div>
        </div>
    </div>
</div>
@endsection
