@extends('../layouts.master')

@section('panel_heading','Author List')
    
@section('content')
    {!! Form::model($books,['route' => ['book.update',$books->id],'method' => 'PATCH','class' => 'form-horizontal']) !!}
        <div class="form-group {{ $errors->has('title') ? 'has-errors' : '' }}">
            {!! Form::label('title','Title',['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                    {!! $errors->first('title','<p class="alert alert-danger">:message</p>') !!}
                </div>
        </div>
        <div class="col-md-6 col-md-offset-4">
            {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
