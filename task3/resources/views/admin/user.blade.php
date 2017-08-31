@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4>User List</h4> 
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary pull-right"> Add User</a><br><br>
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        @if($users->count() > 0)
                            <?php $no=1; ?>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $no++ }} </td>
                                <td>{{ $user->name }} </td>
                                <td>{{ $user->email }} </td>
    
                                <td>
                                    {!! Form::open(['route'=> ['admin.destroy',$user->id],'method'=>'DELETE'])  !!}
                                    <a href="{{ route('admin.edit',$user->id) }}" class="btn btn-primary btn-xs">Edit</a>
                                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            <tr>
                            @endforeach
                            
                        @endif
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection