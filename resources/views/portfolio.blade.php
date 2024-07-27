@extends('layout')
@section('title', 'Portfolio')

@section('content')

<h1>Portfolio</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus distinctio ex eveniet tempore cumque vero quo deserunt neque ad consectetur numquam facere, quis vel voluptate aliquid perferendis non, amet exercitationem?</p>


<ul>

    @forelse($portfolio as $portfolioItem)
    <li>{{ $portfolioItem['title'] }}</li>
    @empty
    <li>No hay Portfolios</li>
    @endforelse

</ul>

@endsection