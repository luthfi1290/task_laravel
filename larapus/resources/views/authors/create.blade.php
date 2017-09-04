@extends('../layouts.master')

@section('panel_heading','Author List')
    
@section('content')
    {!! Form::open(['route' => 'author.store','class' => 'form-horizontal']) !!}
        <div class="form-group {{ $errors->has('name') ? 'has-errors' : '' }}">
            {!! Form::label('name','Author',['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                    {!! $errors->first('name','<p class="alert alert-danger">:message</p>') !!}
                </div>
        </div>

        <div class="form-group {{ $errors->has('email') ? 'has-errors' : '' }}">
            {!! Form::label('email','Email',['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::email('email',null,['class'=>'form-control']) !!}
                    {!! $errors->first('email','<p class="alert alert-danger">:message</p>') !!}
                </div>
        </div>

        <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection