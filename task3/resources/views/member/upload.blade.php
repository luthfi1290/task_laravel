@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Upload image</div>
                <div class="panel-body">
                    {!! Form::open(['route'=> 'image.store','class' => 'form-horizontal','files'=>'true']) !!}
                        <div class="form-group {{ $errors->has('title') ? 'has-errors' : '' }}">
                            {!! Form::label('title','Title',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('title',null,['class' => 'form-control']) !!}
                                {!! $errors->first('title','<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('path') ? 'has-errors' : '' }}">
                            {!! Form::label('path','Upload',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::file('path') !!}
                                {!! $errors->first('path','<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                        <div class="col-md-offset-5">
                        {!! Form::submit('Simpan',['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection