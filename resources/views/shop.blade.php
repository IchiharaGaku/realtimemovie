@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="">
    <div class="mx-auto" style="max-width: 1200px">
    <div class="goods">
    <h1 style="color:#fefefe; text-align:center; font-size:1.2em; padding: 12px 0px; font-weight:bold;">商品一覧</h1>
    </div>
      <div class="">
        <div class="d-flex flex-row flex-wrap">
        @foreach($stocks as $stock)
        <div class="col-xs-6 col-sm-4 col-md-4">
        <div class="mycart_box">
          <div class="movie-title">
        {{$stock->name}} <br>
        </div>
        <img src="/img/{{$stock->imgpath}}" alt="" class="incart"> <br>
        <div class="content">
        {{$stock->detail}} <br>
        </div>
        <div class="movie-price">
        {{$stock->fee}}円<br>
        </div>

        <form action="mycart" method="post">
        @csrf
        <input type="hidden" name="stock_id" value="{{$stock->id}}">
        <input class="submit" type="submit" value="カートに入れる">
        </form>
        </div>
        <!-- <a href="/" class="text-center">商品一覧へ</a> -->
        </div>
        @endforeach
        </div>
        <div class="text-center" style="width: 200px; margin: 20px auto;">
        {{$stocks->links()}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection