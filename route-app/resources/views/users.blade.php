<h1>User page</h1>

{{-- <h3>Hello {{ $user }}</h3> --}}
{{-- <h3>City : {{ !empty($city) ? $city : 'No city' }}</h3> --}}


@foreach ($user as $id => $value)
    <h3>{{ $id }} :- {{ $value['name'] }} || {{ $value['number'] }} || {{ $value['city'] }} || <a
            href="{{ route('view.users', $id) }}">Show</a> </h3>
@endforeach
