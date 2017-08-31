@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add User</div>
                    <div class="panel-body">
                        {!! Form::model($users,['route'=> ['admin.update',$users],'method'=>'PATCH','class' => 'form-horizontal']) !!}
                            <div class="form-group {{ $errors->has('name') ? 'has-errors' : '' }}">
                                {!! Form::label('name','Name',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('name',null,['class' => 'form-control']) !!}
                                    {!! $errors->first('name','<p class="alert alert-danger">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('email') ? 'has-errors' : '' }}">
                                {!! Form::label('email','Email',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::email('email',null,['class' => 'form-control']) !!}
                                    {!! $errors->first('email','<p class="alert alert-danger">:message</p>') !!}
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection