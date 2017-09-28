@if ( session()->has('notice.message'))
  <div class="alert alert-{{ session()->get('notice.level') }}">
    <h4>{{ session()->get('notice.message') }}</h4>
  </div>
@endif
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"> Upload Book</h3>
        </div>
        <div class="panel-body">
          {{ Form::open(['route' => 'members.store' , 'files' => 'true','class' => 'form-horizontal']) }}

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
              {{ Form::label('title','Title',['class' => 'col-md-3 control-label'])}}
              <div class="col-md-6">
                {{ Form::text('title',null,['class' => 'form-control'])}}
                {!! $errors->first('title','<p class"help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
              {{ Form::label('description','Description',['class' => 'col-md-3 control-label'])}}
              <div class="col-md-6">
                {{ Form::textarea('description',null,['class' => 'form-control'])}}
                {!! $errors->first('description','<p class"help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group {{ $errors->has('cover') ? 'has-error' : '' }}">
              {{ Form::label('cover','Cover',['class' => 'col-md-3 control-label'])}}
              <div class="col-md-6">
                {{ Form::file('cover') }}
                {!! $errors->first('cover','<p class"help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-offset-3 col-md-6">
                {{ Form::submit('Save',['class' => 'btn btn-primary'])}}
              </div>
            </div>

          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</div>
