@extends('layouts.app')

@section('content')
  {{-- <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
          </div>
          <div class="panel-body">
            @foreach ($cek as $c)
              <p>file upload anda adalah {{ $c->title }}</p>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div> --}}

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
