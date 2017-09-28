<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
          @foreach ($cek as $c)
            <p>Status File : {{ $c->status }}</p>
            @if ($c->status == 'accept')
              <p>file upload anda adalah {{ $c->title }}</p>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
