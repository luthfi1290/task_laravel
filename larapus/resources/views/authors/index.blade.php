@extends('../layouts.master')

@section('panel_heading','Author List')
    
@section('content')
    <a href="{{ route('author.create') }}" class="btn btn-info btn-md pull-right"> Add Author </a>
    <br><br>
    @if( count($authors) > 0 )
    <table class='table table-striped'>
        <tr>
            <th>No</th>
            <th>Author</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php $no = 1;?>
        @foreach($authors as $author)
        <tr>
            <td>{{$no++}}</td>
            <td><a href="{{ route('book.show',$author->id) }}">{{$author->name}}</a></td>
            <td>{{$author->email}}</td>
            <td>
                {!! Form::open( ['route' => ['author.destroy',$author->id],'method' => 'DELETE' ]) !!}
                    <a href="{{ route('author.edit',$author->id) }}" class="btn btn-primary btn-xs"> Edit</a>
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            </td>
        </tr> 
        @endforeach
    </table>
    @endif
    
@endsection