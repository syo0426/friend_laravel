@extends('layouts.app')
 
@section('content')

<div class="container">
    <div class="mx-auto form-width-md">
        <p class="h3">店舗登録</p>
    </div>
    
    <div class="mx-auto panel-body form-width-md">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        <form action="{{url('/create')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">店舗名</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="title">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">ジャンル</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="genre">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">場所</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="place">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">詳細</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="detail" rows="3"></textarea>
        </div>

        </div>
        <div class="col-12">
            <button type="submit" class="btn friend-gurume text-white">登録</button>
        </div>
        </form>  
    </div>
</div>
<style></style>
@endsection