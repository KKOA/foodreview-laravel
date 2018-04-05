{{--  Name --}}
<div class='form-group'>
    <div class='control-label col-sm-2'>
        {!! Form::label('name', "Name : ") !!} <span class="required">*</span>
    </div>
    <div class='col-sm-9'>
        {!! Form::text('name', $restaurant->name, ['class' => 'form-control','placeholder'=>'E.g. Lee Chinese', 'autofocus'=>true]) !!}
    </div>
</div>

{{-- Slug --}}
<div class='form-group' id='slug-group'>
    <div class='control-label col-sm-2'>
        {!! Form::label('slug', "Slug : ") !!} <span class="required">*</span>
    </div>
    <div class='col-sm-9'>
        {!! Form::text('slug', $restaurant->slug, ['class' => 'form-control','placeholder'=>'E.g. lee_chinese', 'aria-describedby'=>"slug-tip"]) !!}
        <div role="tooltip" id="slug-tip">
            <small>
            A slug is a part of a URL which identifies a particular page on a website in a form readable by users and made up lowercase aplhanumeric and hypens.<br>
            E.g. <span class='url'>http://foodreview-laravel.herokuapp.com/restaurants/<span style="font-weight:bold;text-decoration:underline">foodzilla</span></span><br>
            The slug must longer than <strong>2 character</strong> and cannot be reserved words such as <strong>create</strong>.    
            </small>
        </div>
    </div>
</div>

{{-- Description --}}
<div class='form-group'>
    <div class='control-label col-sm-2'>
        {!! Form::label('description', "Description : ") !!} <span class="required">*</span>
    </div>
    <div class='col-sm-9'>
    {!! Form::textarea('description', $restaurant->description, ['rows' => 10,'class' => 'form-control','placeholder'=>'Restaurant description','id'=>'article-ckeditor']) !!}
    </div>
</div>

{{-- Address1 --}}
<div class='form-group'>
    <div class='control-label col-sm-2'>
        {!! Form::label('address1', "Address1 : ") !!} <span class="required">*</span>
    </div>
    <div class='col-sm-9'>
    {!! Form::text('address1', $restaurant->address1, ['rows' => 10,'class' => 'form-control','placeholder'=>'200 Cheam Road']) !!}
    </div>
</div>

{{-- Address2 --}}
<div class='form-group'>
    <div class='control-label col-sm-2'>
        {!! Form::label('address2', "Address2 : ") !!}
    </div>
    <div class='col-sm-9'>
    {!! Form::text('address2', $restaurant->address2, ['rows' => 10,'class' => 'form-control','placeholder'=>'Sparcells']) !!}
    </div>
</div>

{{-- City --}}
<div class='form-group'>
    <div class='control-label col-sm-2'>
        {!! Form::label('city', "City : ") !!} <span class="required">*</span>
    </div>
    <div class='col-sm-9'>
    {!! Form::text('city', $restaurant->city, ['rows' => 10,'class' => 'form-control','placeholder'=>'Bristol']) !!}
    </div>
</div>

{{-- County --}}
<div class='form-group'>
    <div class='control-label col-sm-2'>
        {!! Form::label('county', "County : ") !!}
    </div>
    <div class='col-sm-9'>
    {!! Form::text('county', $restaurant->county, ['rows' => 10,'class' => 'form-control','placeholder'=>'Wiltshire']) !!}
    </div>
</div>

{{-- County --}}
<div class='form-group'>
    <div class='control-label col-sm-2'>
        {!! Form::label('postcode', "Postcode : ") !!} <span class="required">*</span>
    </div>
    <div class='col-sm-9'>
    {!! Form::text('postcode', $restaurant->postcode, ['rows' => 10,'class' => 'form-control','placeholder'=>'EN1 DG2']) !!}
    </div>
</div>