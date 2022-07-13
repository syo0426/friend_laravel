@extends('layouts.app')
 
@section('content')
<div class="container">
<div class="mx-auto form-width-md">
    <div>
        <p class="h3">店舗名編集 ID:{{$lists->id}}</p>
    </div>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    <div class="panel-body">
        <form action="{{url('/update')}}" method="POST">
        @csrf

            <input type="hidden" name="id" value="{{$lists->id}}"> <br>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">店舗名</label>
            <input type="text" name="name" value="{{$lists->name}}" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">ジャンル</label>
            <input type="text" name="phone" value="{{$lists->phone}}" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">場所</label>
            <input type="text" name="email" value="{{$lists->email}}" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">編集</button>
            
            <a href="/destroy/{{$lists->id}}">削除</a>
        </div>
        </form>  
    </div>
</div>
</div>
@endsection