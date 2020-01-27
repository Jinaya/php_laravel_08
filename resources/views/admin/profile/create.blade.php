<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
  </head>
  <body>
    
    
    
  </body>
</html>

{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- admin.blade.phpの@yield('title')に'プロフィール'を埋め込む --}}
@section('title', 'プロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>Myプロフィール</h2>
        <div class="element_wrap">
		      <label>氏名</label>
		      <input type="text" name="your_name" value="">
	      </div>
	      <div class="element_wrap">
		      <label>性別</label>
		      <input type="text" name="gender" value="">
	      </div>
	      <div class="element_wrap">
		      <label>趣味</label>
		      <input type="text" name="hobby" value="">
	      </div>
	      <div class="form-group row">
          <label class="col-md-2" for="introduction">自己紹介</label>
          <div class="col-md-10">
            <textarea class="form-control" name="introduction" rows="20">{{ old('body') }}</textarea>
          </div>
        </div>
	      @if (count($errors) > 0)
          <ul>
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        @endif
        
        {{ csrf_field() }}
        <input type="submit" class="btn btn-primary" value="更新">
      </div>
    </div>
  </div>
@endsection