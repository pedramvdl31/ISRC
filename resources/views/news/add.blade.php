@extends($layout)
@section('stylesheets')
{!! Html::style('/assets/css/pages/add.css') !!}
@stop
@section('scripts')
<script src="/packages/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="/assets/js/pages/add.js"></script>
@stop

@section('content')
<div class="jumbotron">
  <h1>News Add</h1>
</div>

<div class="panel panel-default">
  {!! Form::open(array('action' => 'HomeController@postNewsAdd', 'class'=>'','role'=>"form")) !!}
  <div class="panel-body">
    <div class="section-wrapper">
      <div class="form-group {{ $errors->has('title') ? 'has-error' : false }}">
        <h3 class="group-title">Title</h3>
        {!! Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Title')) !!}
        @foreach($errors->get('title') as $message)
          <span class='help-block'>{{ $message }}</span>
        @endforeach
      </div>
    </div>
    <hr>
    <!-- ##### -->
    <div class="section-wrapper">
      <h3 class="group-title">Description</h3>
      {!! Form::textarea('description', null, ['class' => 'field form-control','size' => '30x8', 'placeholder'=>'Description']) !!}
    </div>
    <!-- ##### -->
    <div class="section-wrapper">
      <h3 class="group-title">Content</h3>
      {!! Form::textarea('content', null, ['class' => 'des field form-control','size' => '30x8', 'placeholder'=>'Description']) !!}
    </div>
  </div>
  <div class="panel-footer clearfix">
    <a href="{!! route('news_index') !!} " class="btn btn-info">Back</a>
    <button class="btn btn-primary pull-right">Save</button>
  </div>
  {!! Form::close() !!}
</div>
@stop