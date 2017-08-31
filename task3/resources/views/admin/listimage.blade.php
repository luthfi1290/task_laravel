@extends('../layouts.app')

@section('link')
<style>
    * {
    margin:0;
    padding:0;
    }
    .item {
        width: 200px;
        height: auto;
        margin-left:5px;
    }
    .item img {
        width: 100%;
        height: auto;
    }
</style>    
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{--  @if (session()->has('flash_notification.message'))      
                 <div class="alert alert-{{ session()->get('flash_notification.level') }}" id="success-alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {!! session()->get('flash_notification.message') !!}
                </div>
            @endif  --}}
            <div class="panel panel-default">
                <div class="panel-heading">Image List</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Image</th>
                        </tr>
                        @if($users->count() > 0)
                            <?php $no=1; ?>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $no++ }} </td>
                                <td>{{ $user->name }} </td>
                                <td>
                                    @foreach($user->images as $image)
                                        <div class="thumbnail col-md-2 item">
                                            {!! Html::image("$image->path","$image->title",['class' => 'thumb item'])!!}
                                                <div class="caption">
                                                    <p>{{ $image->title }}</p>
                                                </div>
                                        </div>  
                                    @endforeach
                                </td>
                            <tr>
                            @endforeach
                            
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
    var container = document.querySelector('#container');
    var msnry = new Masonry( container, {
    // options

    columnWidth: '.item',
    itemSelector: '.item'
    });

    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
    </script>
@endsection