@extends('../layouts.master')

@section('panel_heading','Book List')
    
@section('content')
    <a href="{{ route('book.getCreate',$author_id) }}" class="btn btn-info btn-md pull-right"> Add Book </a>
    <br><br>
    @if( count($books) > 0 )
    <table class='table table-striped'>
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        <?php $no = 1;?>
        @foreach($books as $book)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$book->title}}</td>
            <td>
                {!! Form::open( ['route' => ['book.destroy',$book->id],'method' => 'DELETE' ]) !!}
                    <a href="{{ route('book.edit',$book->id) }}" class="btn btn-primary btn-xs"> Edit</a>
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            </td>
        </tr> 
        @endforeach
    </table>
    @endif
    
@endsection