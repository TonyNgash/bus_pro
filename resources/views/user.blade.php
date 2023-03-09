<x-header data="user component header" />

<h1>User page</h1>

<x-navbar />

@include('components/carousel')

<ol>
@foreach($users as $user)
    <li>{{ $user }}</li>
@endforeach
</ol>


<script>
    var data=@json($users);
    console.warn(data[0]);
    console.warn(data[1]);
    console.warn(data[2]);
    console.warn(data[3]);
</script>
