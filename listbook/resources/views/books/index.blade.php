@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">List Author</h4>
          </div>
          <div class="panel-body">
            <table class="table table-striped">
              <tr>
                <th>Author</th>
                <th>Cover</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              @foreach ($books as $book)
              <tr>
                <td>{{ $book->author->name }}</td>
                <td> <img src="{{ asset('storage/cover/'.$book->cover)}}" alt="{{ $book->title}}" width="100" height="150"></td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->status }}</td>
                <td>
                  {{ Form::model($book,['route' =>['books.update',$book->id] , 'method' => 'patch'])}}
                    {!! Form::select('status',[
                      'pending' => 'Pending',
                      'accept' => 'Accept',
                      'reject' => 'Reject'
                    ],$book->status)
                    !!}
                    <button type="submit" name="submit" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-ok-circle"></span></button>
                    {{-- {{ Form::submit('Edit',['class' => 'btn btn-primary btn-xs'])}} --}}
                  {{ Form::close() }}
                </td>
              </tr>
              @endforeach
            </table>
            {{-- {{ $authors->links() }} --}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
