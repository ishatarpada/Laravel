@props(['action', 'method' => 'POST', 'enctype' => 'multipart/form-data'])

<form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" enctype="{{ $enctype }}"
    {{ $attributes }}>
    @csrf

    @unless (in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless

    {{ $slot }}
</form>
