{{-- inherit from master blade.php --}}
@extends('layouts.master')

@section('title', 'FoodReview')
@section('content')

    <h1 class="text-center">Restaurants</h1>
    <div class="text-center">
    <a href="{{route('restaurants.create')}}" class="btn btn-primary btn-lg">
        New Restaurant <i class="glyphicon glyphicon-plus"></i>
    </a>
    </div>
    <div class='row'>
        @if(count($restaurants))
            <ul class='restaurants'>
                @foreach($restaurants as $restaurant)
                    <li id="restaurant{{$restaurant->id}}" class="col-xs-offset-1 col-xs-10 col-sm-5 col-sm-center-offset-1 col-lg-3 restaurant">
                        <div class="holder">
                            <div class="prop-info">
                                <h3 class="prop-title text-center">
                                    <a href="{{route('restaurants.show',[$restaurant->id])}}">
                                        {{$restaurant->name}}
                                    </a>
                                </h3>
                                <ul class='more-info'>
                                    <li class="clearfix">
                                        <span class="pull-left field-name">Category:</span>
                                        <span class="qty pull-right">
                                            {{-- <%= render 'category', categories: restaurant.categories %> --}}
                                            Italien
                                        </span>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left field-name">Avg Rating:</span>
                                        <span class="qty pull-right">4</span>
                                    </li>
                                    <li class="clearfix ">
                                        <span class="pull-left field-name">Location:</span>
                                        <span class="qty pull-right">
                                            {{--  {{$restaurant->full_address()}}  --}}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

        @else
            <div class='offset-1  col-10'>
                <p class='lead'> No restaurants avaliable. </p>
            </div>
        @endif
    </div>
@endsection