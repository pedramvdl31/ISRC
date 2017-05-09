@extends($layout)
@section('stylesheets')

@stop
@section('scripts')

@stop

@section('content')
<div class="jumbotron">
  <h1>News Index</h1>
    <ol class="breadcrumb">
      <li class="active">Overview</li>
      <li><a href="{!!route('news_add')!!}">News Add  <i class="glyphicon glyphicon-edit"></i></a></li>
    </ol>
</div>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered" style="font-size:18px">
            <thead>
              <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pages as $pagekey => $news)
                <tr>
                  <th scope="row">{{$news['title']}}</th>
                  <td>{!!$news['status_message']!!}</td>
                  <td>{{$news['created_at_html']}}</td>
                  <td>
                    <a href="">View</a> / <a href="{!!route('news_edit',$news['id'])!!}">Edit / <a href="{!!route('news_remove',$news['id'])!!}">Delete</a>
                  </td>
                </tr>
                
              @endforeach
            </tbody>
          </table>
        </div>
  </div>
</div>
@stop