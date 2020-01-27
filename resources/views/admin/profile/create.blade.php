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
	      <label for="introduction">自己紹介欄</label>
	      <textarea id="introduction" name="introduction"></textarea>
      </div>
    </div>
  </div>
@endsection