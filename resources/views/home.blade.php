@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi est quos dolor ea nobis. Repellendus obcaecati corrupti eius asperiores ut nemo magnam illum illo culpa, nisi ullam! Blanditiis, consectetur nesciunt?
</p>
@endsection

@section('sidebar')
@parent
<h3>this is appended to the sidebar</h3>
@endsection