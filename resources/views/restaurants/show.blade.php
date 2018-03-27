<!-- inherit from app blade.php -->
@extends('layouts.master')

@section("title")
-  {{$restaurant->name}}
@endsection
@section('content')
<a href='{{route('restaurants.index')}}' link_to restaurants_path, class='btn btn-primary btn-lg' title='See all restaurants'>
   <i class='glyphicon glyphicon-arrow-left'></i> View Restaurants
</a>
<div class='row'>

    <div class='restaurant col-sm-7' style='padding:15px; margin-left:0;margin-right:0;'>
            <h2 class='text-center restaurant-name'>{{$restaurant->name}}</h2>
            Image<br>[image here]<br>
            <h3>{{$restaurant->full_address()}}</h3>
            <div class='row' style='margin-left:0; margin-right:0'>
                <ul class='more-info'>
                  <li class="clearfix col-sm-11 col-sm-center-offset-1">
                      <span class="pull-left field-name">Type:</span>
                      <span class="qty pull-right">
                        {{-- <%= render 'category', categories: @restaurant.categories %> --}}
                      </span>
                  </li>
                    <li class="clearfix col-sm-5 col-sm-center-offset-1">
                        <span class="pull-left field-name">Parking:</span>
                        <span class="qty pull-right">Yes</span>
                    </li>
                    <li class="clearfix col-sm-5 col-sm-center-offset-1">
                        <span class="pull-left field-name">WiFi:</span>
                        <span class="qty pull-right">Yes</span>
                    </li>
                    <li class="clearfix col-sm-5 col-sm-center-offset-1">
                        <span class="pull-left field-name">Outdoor Seating:</span>
                        <span class="qty pull-right">No</span>
                    </li>
                {{-- </ul>
                <ul class='more-info'> --}}
                    <li class="clearfix col-sm-5 col-sm-center-offset-1">
                        <span class="pull-left field-name">Takeaway:</span>
                        <span class="qty pull-right">No</span>
                    </li>
                    <li class="clearfix col-sm-5 col-sm-center-offset-1">
                        <span class="pull-left field-name">Delivery:</span>
                        <span class="qty pull-right">No</span>
                    </li>
                    <li class="clearfix col-sm-5 col-sm-center-offset-1">
                        <span class="pull-left field-name">Serving Times:</span>
                        <span class="qty pull-right">No</span>
                    </li>
                </ul>
            </div>

            <!--Parking: Yes<br>-->
            <!--Wifi: Yes<br>-->
            <!--Type: Chinese<br>-->
            <!--Outdoor Seating : No<br>-->
            <!--Takeaway: No<br>-->
            <!--Delivery: No<br>-->
            <!--Serving Times: All day (See website for times)-->

            <h3>DESCRIPTION</h3>
            {!!$restaurant->description!!}
            <div class='restaurant-links text-center' style="margin-top:10px;">
            <a href='{{route('restaurants.edit',[$restaurant->id])}}' class='btn btn-primary btn-lg pull-left' title='Modify current restaurant'>
                Edit Restaurant <i class='glyphicon glyphicon-pencil'></i>
            </a>
            {{-- {{link_to_route('restaurants.edit', $title = "Edit Restaurant <i class='glyphicon glyphicon-pencil'></i>", $parameters = ['id' =>$restaurant->id], $attributes = ['class'=>'btn btn-default'])}} --}}
            {!!Form::open(['action'=>['RestaurantController@destroy',$restaurant->id],'method'=>'POST','class' => 'pull-right'])!!}
              {!! Form::button('Delete Restaurant <i class="glyphicon glyphicon-trash"></i>', ['class' => 'btn btn-danger btn-lg','type' => 'submit']) !!}
              {{Form::hidden('_method','DELETE')}}
            {!!Form::close()!!}

            </div>



            {{-- <%= form_for @restaurant,:html => {class: "form-horizontal"}, method: "delete" do |form| %>
                <h3> DELETE RESTAURANT</h3>
                <p> By correclty entering the restaurant and click Delete restaurant button, you permanently delete this restaurant.</p>
                <div class='form-group'>
                    <div class='control-label col-sm-3 cosl-md-2'>
                        <%= form.label :name do %>
                            Name <span class="required">*</span>
                        <% end %>
                    </div>
                    <div class='col-sm-8 col-md-9'>
                        <%= form.text_field :name, class: 'form-control' ,value: '' %>
                    </div>
                </div>
                  <!-- <div class='col-md-offset-2 col-md-10'> -->
                       <%= form.button class: 'btn btn-primary btn-lg col-xs-12', id: 'delete',disabled: true,
                      data: { confirm: "Are you sure you want to delete #{@restaurant.name}?\n This action cannot be undone." } do %>
                          Delete <%= @restaurant.name %> <i class='glyphicon glyphicon-trash'></i>
                      <% end %>
                      <div class='clearfix'></div>
                  <!-- </div> -->
            <% end %> --}}
        <!-- </div> -->
    </div>
    <div class='col-sm-4' style='padding:15px;' >
        <%= render 'layouts/map' %>
        <%= render 'layouts/owner' %>
        <%= render 'layouts/search_form' %>
    </div>
</div>

@endsection
