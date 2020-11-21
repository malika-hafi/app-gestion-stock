 @include('/layouts/header')
@include('/layouts/nav')
@include('/layouts/sidebar')          
<div class="row">
  <div class="col-sm-2">
    {!! form::label('titre_cat','titre_cat') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
      {{ Form::text('titre_cat',NULL, ['class'=>'form-control', 'id'=>'titre_cat', 'placeholder'=>'Title Post...']) }}
      {{ $errors->first('titre_cat', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('description','description') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('body') ? 'has-error' : "" }}">
      {{ Form::text('description',NULL, ['class'=>'form-control', 'id'=>'description', 'placeholder'=>'Body Post...']) }}
      {{ $errors->first('description', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>