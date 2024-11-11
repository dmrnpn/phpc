@extends('layout')
@section('title', 'Portfolio')

@section('content')

<h1>Portfolio</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus distinctio ex eveniet tempore cumque vero quo deserunt neque ad consectetur numquam facere, quis vel voluptate aliquid perferendis non, amet exercitationem?</p>


<ul>

    @forelse($projects as $project)
    <li><a href="{{route('projects.show', $project)}}"> {{ $project -> title }}  </a>   

    </li>
    @empty
    <li>No hay Portfolios</li>
    @endforelse


        {{ 
            $projects->Links()
         }}
 
    
</ul>

@endsection