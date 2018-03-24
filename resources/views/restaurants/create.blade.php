<!-- inherit from app blade.php -->
@extends('layouts.master')

@section('meta')
    <meta name="description" content="Add a new restaurant">
    @overwrite

@section('title', ' - Create Restaurants')

@section('content')

<h3 class='text-center'>Create Restaurant</h3>
<div class='row'>
	<div class='col-sm-12'>
    {!! Form::model($restaurant, ['route' => ['restaurants.store', $restaurant->id],'class'=>'form-horizontal']) !!}
        @include('inc.restaurantform')
        <div class='form-group'>
            <div class='col-sm-offset-2 col-sm-10'>
                <a href='{{route('restaurants.index')}}' link_to restaurants_path, class='btn btn-primary btn-lg pull-left' title='See all restaurants'>
                    Cancel <i class='glyphicon glyphicon-remove-circle'></i>
                </a>
                {!! Form::button('Save Restaurant <i class="glyphicon glyphicon-save"></i>', ['class' => 'btn btn-primary btn-lg pull-right','type' => 'submit']) !!}
            </div>
        </div>
		{!! Form::close() !!}
	</div>
</div>

@endsection
