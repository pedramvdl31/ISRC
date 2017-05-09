@extends($layout)
@section('stylesheets')
{!! Html::style('/assets/css/pages/add.css') !!}
@stop
@section('scripts')
<script src="/packages/tinymce/js/tinymce/tinymce.min.js"></script><script src="/assets/js/pages/add.js"></script>
@stop

@section('content')
<div class="jumbotron">
  <h1>News Add</h1>
</div>
<div class="panel panel-default">
  {!! Form::open(array('action' => 'HomeController@postNewsEdit', 'class'=>'','role'=>"form")) !!}
    <div class="panel-body">
      <input type="hidden" name="page_id" value="{!!$page_data['id']!!}">
      <div class="section-wrapper">
      <h3 class="group-title">Title</h3>
      <hr>
        <div class="form-group {{ $errors->has('title') ? 'has-error' : false }}">
          <label class="control-label" for="title">Title</label>
            {!! Form::text('title', $page_data['page_title'], array('class'=>'form-control', 'placeholder'=>'Title')) !!}
            @foreach($errors->get('title') as $message)
                <span class='help-block'>{{ $message }}</span>
            @endforeach
        </div>
      </div>
      <!-- ##### -->
      <div class="section-wrapper">
        <h3 class="group-title">Description</h3>
        <hr>
         {!! Form::textarea('description', $page_data['description'], ['class' => 'field form-control','size' => '30x8', 'placeholder'=>'Description']) !!}
      </div>
      <div class="section-wrapper">
        <h3 class="group-title">Contents</h3>
        <hr>
         {!! Form::textarea('content', $page_data['page_section_content'], ['class' => 'des field form-control','size' => '30x8', 'placeholder'=>'Description']) !!}
      </div>
    </div>
    <div class="panel-footer clearfix">
      <a href="{!! route('pages_index') !!} " class="btn btn-info">Back</a>
      <button class="btn btn-primary pull-right">Save</button>
    </div>
    <input type="hidden" name="page_id" value="{{$page_data['id']}}">
    {!! Form::close() !!}
</div>
@stop