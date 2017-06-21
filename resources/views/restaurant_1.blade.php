@extends('layouts.app')

@section('content')


    <div class="container">
    <div class="well well-sm">
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
    </div>
    <div id="products" class="row list-group">
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="{{  asset('img/download.jpg')  }}" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Jollof Rice</h4>
                    <p class="group inner list-group-item-text">
                            Jollof rice is nice try it and you wont regret
                        <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.00</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="{{route ('product.addToCart', ['id'=>$restaurant->id])}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="{{  asset('img/ewa.jpg')  }}" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Ewa Agoyin</h4>
                    <p class="group inner list-group-item-text">
                           Ewa is nice try it and you wont regret</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $31.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="/cart">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="{{  asset('img/download.jpg')  }}"alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Akamu</h4>
                    <p class="group inner list-group-item-text">
                           Jollof rice is nice try it and you wont regret
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $11.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="/cart">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="{{  asset('img/download.jpg')  }}" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Egusi</h4>
                    <p class="group inner list-group-item-text">
                           Jollof rice is nice try it and you wont regret
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $1.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="/cart">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="{{  asset('img/download.jpg')  }}" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Fried Rice</h4>
                    <p class="group inner list-group-item-text">
                           Jollof rice is nice try it and you wont regret
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $22.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="/cart">Add  to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="{{  asset('img/download.jpg')  }}"  alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        Pizza</h4>
                    <p class="group inner list-group-item-text">
                           Jollof rice is nice try it and you wont regret
                    </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="/cart">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection