@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Upload image</div>
                <div class="panel-body">
                    {!! Form::model($images,['route'=> ['image.update',$images],'class' => 'form-horizontal','method'=>'PATCH']) !!}
                        <div class="form-group {{ $errors->has('title') ? 'has-errors' : '' }}">
                            {!! Form::label('title','Title',['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('title',null,['class' => 'form-control']) !!}
                                {!! $errors->first('title','<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        {!! Form::submit('Simpan',['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection