@extends('layouts.app')
@section('content')
<p class="text"></p>
@endsection
@section('scripts')
<script>

  let regex  = /e/g;
  let string = "regex is great";
  let result = string.match(regex);
  alert(result)
  $.ajax('info.txt')
  .done(function(data){
    $('.text').html(data)
  })
  .fail(function(data){
      alert("couldn't get data")
  })
</script>
@endsection