@extends('layouts.app')

@section('content')
<div class="container">
        <div class="homepage-tagline">
            <div class="homepage-headline">
            <h1>Order delicious food online!</h1>
            <h2>Discover local restaurants that deliver to your doorstep</h2>
            </div>
        </div>
        <div id="products" class="row list-group">
        @foreach($restaurants as $restaurant)
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="{{  asset('img/images.png')  }}" alt="{{ $restaurant->name }}" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">{{ $restaurant->name }}</h4>
                    <p class="group inner list-group-item-text">{{ $restaurant->address }}</p>
                    <div class="clearfix">
                        <div class="clearfix">
                            <div class="pull-left price">
                                <a class="btn btn-default btn-sm" href="{{ route('restaurant.show', $restaurant->id) }}">View restaurant</a>
                            </div>
                            <!-- <a class="btn btn-success pull-right btn-sm" href="{{ route('restaurant.show', $restaurant->id) }}"> <span class="glyphicon glyphicon-plus"></span>Add to Cart ($70)</a> 
                         --></div>
                        <!-- <div class="col-xs-12 col-md-6">
                            > <a class="btn btn-success btn-sm" href="{{ route('restaurant.show', $restaurant->id) }}"> <span class="glyphicon glyphicon-plus"></span>Add to Cart</a> 
                        </div>
                         -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
        
    
</div>


@endsection
    </body>
</html>
