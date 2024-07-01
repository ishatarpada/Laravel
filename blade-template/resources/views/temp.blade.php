@php
    $user = 'isha';
    $fruits = ["apple" , "mango" , "orange" , "banana"];
@endphp

<script>
    // var data = {{ $user }};
    var data = @json($user);
    console.log(data);

    var data1 = @json($fruits);
    
    data1.forEach(function(entry){
      console.log(entry);
    });

    var data2 = {{ Js:: from($fruits)}};
</script>
