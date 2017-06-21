@extends('layouts.app')

@section('content')

<div class="container">
        <p><a href="{{ url('home') }}">Home</a> / Cart</p>


	        <form action="/cart" method="POST">
	  {!! csrf_field() !!}
	  <input type="hidden" name="id" value="{{ $product->id }}">
	  <input type="hidden" name="name" value="{{ $product->name }}">
	  <input type="hidden" name="price" value="{{ $product->price }}">
	  <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
	</form>
</div>

@endsection