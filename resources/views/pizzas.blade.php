@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        <p>{{ ucfirst($type) }} - {{ $base }} - {{ $price }}</p>
        @if($price > 15)
            <p> this pizza is expensive</p>
        @elseif($price < 5)
            <p> this pizza is cheap</p>
        @endif
    </div>
</div>
@endsection
