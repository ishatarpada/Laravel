<h1>Home Page</h1>

<h1>5 + 2 :- {{ 5 + 2 }}</h1>

{{ 'Hello word' }}
<br><br>

{{ '<h1>Hello word</h1>' }}

{!! '<h1>Hello word</h1>' !!}

{{-- {!! "<script>alert('Hello word')</script>" !!} --}}

{{ "<script>alert('Hello word')</script>" }}
<br><br>

@php
    $user = 'isha';
    $names = ['Isha', 'Disha', 'Mansi' , 'Isha', 'Disha', 'Mansi'] ;
@endphp

{{ $user }}


{{-- <ul>
    @foreach ($names as $name)
        <li> {{$loop->index}}  {{ $name }}</li>
        <li> {{$loop->iteration}}  {{ $name }}</li>
        <li> {{$loop->count}}  {{ $name }}</li>
    @endforeach
</ul> --}}



{{-- <ul>
    @foreach ($names as $name)
        @if ($loop->first)
            <li style="color: orange">{{ $name }}</li>
        @elseif ($loop->last)
            <li style="color: green">{{ $name }}</li>
        @else
            <li style="color: blue">{{ $name }}</li>
        @endif
    @endforeach
</ul> --}}


<ul>
    @foreach ($names as $name)
    @if ($loop->odd)
    <li style="color: #99255b">{{ $name }}</li>
    @elseif ($loop-> even)
    <li style="color: teal">{{ $name }}</li>
    @endif
    @endforeach
</ul>


{{-- Blade Template : Includeing Subviews --}}
{{-- 

1. @include();
2. @includeIf();
3. @includeWhen();
4. @includeUnless();



--}}