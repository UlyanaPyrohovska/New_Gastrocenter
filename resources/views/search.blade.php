@extends('welcome')
@section('content')
    <link href="{{ asset ('css/search_page.css') }}" rel="stylesheet"/>
<div class="big_div">
        @include('inc/search_form')
    <div class="wrap_search">
        <header class="header1">РЕЗУЛЬТАТИ ПОШУКУ</header>
        <span class="found">По запиту "{{$search_str}}" знайдено результатів : "{{$search_count}}"</span>
    </div>
    @if(isset($details))
        @foreach($details as $user)
            <div class="search_res">
                <header class="res_header">{{$user->header}}</header>
                <span class="res_text">{{$user->info}}</span>
            </div>
        @endforeach
    @endif
@include('inc/ask_form')
</div>
@endsection
