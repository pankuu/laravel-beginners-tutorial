@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
   <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            Pizza House
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <div class="links">
            <a href="/pizzas/create">Order a pizza</a>
            <a href="/pizzas">Pizzas list order</a>
        </div>
    </div>
</div>
@endsection
