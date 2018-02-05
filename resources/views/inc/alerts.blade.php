@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <div class="close" data-dismiss="alert">&times;</div>
                {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        <div class="close" data-dismiss="alert">&times;</div>
            {{session('success')}}
    </div>
@endif
