@extends($layout)
@section('stylesheets')

@stop
@section('scripts')

@stop

@section('content')
<div class="jumbotron">
  <h1>Slogans Index</h1>
    <ol class="breadcrumb">
      <li class="active">Overview</li>
      <li><a href="{!!route('slogans_add')!!}">Slogans Add  <i class="glyphicon glyphicon-edit"></i></a></li>
    </ol>
</div>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered" style="font-size:18px">
            <thead>
              <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @if(isset($slogans['slogan_array_html']))
              @foreach ($slogans['slogan_array_html'] as $ackey => $cat)
                <tr>
                  <th scope="row">{{$ackey}}</th>
                  <td>{{$cat}}</td>
                  <td>
                    <a href="{!! route('slogans_remove',$ackey) !!}">Delete</a>
                  </td>
                </tr>
              @endforeach
            @endif
            </tbody>
          </table>
        </div>
  </div>

</div>
@stop