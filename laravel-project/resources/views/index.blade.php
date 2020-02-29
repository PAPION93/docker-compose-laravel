@extends('master')

@section('style')
<style>
    body {
        background: #ddddff;
    }
</style>
@stop

@section('content')
<p>
    {{ $greeting }} <br>
    <?= $name ? $name : ''; ?>.<br>
    Welcome Back~

    @foreach ($collection as $item)
    <li>
        {{-- $item --}}
        {{ $item }}
    </li>
    @endforeach

    <?php $items = []; ?>
    @forelse ($items as $item)
    <p>item : {{ $item }} </p>
    @empty
    <p> no item </p>
    @endforelse
</p>
@stop

@section('script')
<script>
    alert("Hello Blade~ ^^/");
</script>
@stop