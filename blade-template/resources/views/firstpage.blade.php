@php
    $fruits = ['one' => 'apple', 'two' => 'banana', 'three' => 'mango', 'four' => 'Grapes', 'five' => 'orange'];
    // $boolean = true;
    $value = "";
@endphp

{{-- @include('pages.header', ['names' => $fruits])
<h1>Home Page</h1> --}}

{{-- @includeWhen(empty($value) , 'pages.header', ['names' => $fruits]) --}}

{{-- @includeUnless(empty($value) , 'pages.header', ['names' => $fruits]) --}}

@include('pages.content')

@includeIf('pages.banner')

@include('pages.footer')
