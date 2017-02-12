@extends($layout)
@section('stylesheets')

@stop
@section('scripts')
@stop

@section('content')
<div class="jumbotron">
  <h1>Slogans Add</h1>
</div>
<div class="panel panel-default">

  <div class="panel-body">
  {!! Form::open(array('action' => 'WebsiteBrandController@postSloganAdd', 'class'=>'','role'=>"form")) !!}
    
    <div class="form-group {{ $errors->has('slogan') ? 'has-error' : false }}">
      <label class="control-label" for="slogan">Slogan</label>
      {!! Form::text('slogan', null, array('class'=>'form-control', 'placeholder'=>'Slogan')) !!}
        @foreach($errors->get('slogan') as $message)
            <span class='help-block'>{{ $message }}</span>
        @endforeach
    </div>

  </div>
  <div class="panel-footer clearfix">
    <a href="{!! route('slogans_index') !!} " class="btn btn-info">Back</a>
    <button class="btn btn-primary pull-right">Add</button>
  </div>
    {!! Form::close() !!}
</div>
@stop