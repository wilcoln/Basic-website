@extends('layouts.app')

@section('content')
    <h1>Messages</h1>
    @if(count($messages))
        <div class="list-group">
            @foreach($messages as $message)
                <div class="list-group-item">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{$message->name}}</strong> - {{$message->email}}
                        </div>
                        <div class="card-body">
                            <p>{{$message->message}}</p>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
    @endif
@endsection