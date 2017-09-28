@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Create Author</h3>
          </div>
          <div class="panel-body">
            {{ Form::model($authors,['route' => ['authors.update',$authors->id],'method'=> 'PATCH','class' => 'form-horizontal']) }}
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('name','Name',['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                  {!! Form::text('name',null,['class' => 'form-control']) !!}
                  {!! $errors->first('name','<p class="help-block">:message</p>') !!}
                </div>
              </div>

              <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email','Email',['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                  {!! Form::email('email',null,['class' => 'form-control']) !!}
                  {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                </div>
              </div>

              <div class="form-group {{ $errors->has('role') ? 'has-error' : '' }}">
                {!! Form::label('role','Role',['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                  <select class="form-control" name="role">
                    @foreach ($roles as $role)
                      <option value="{{ $role->id }}" {{ $authors->role_id == $role->id ? 'selected' : ''}}> {{ $role->display_name }}</option>
                    @endforeach
                  </select>
                  {!! $errors->first('role','<p class="help-block">:message</p>') !!}
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  {{ Form::submit('Save',['class' => 'btn btn-primary']) }}
                </div>
              </div>
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
