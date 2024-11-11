@extends('layout')
@section('title', 'Portafolio |' . $projet->title)

@section('content')


<h1>{{$projet->title}}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus distinctio ex eveniet tempore cumque vero quo deserunt neque ad consectetur numquam facere, quis vel voluptate aliquid perferendis non, amet exercitationem?</p>


<ul>

    <br>
    <small>{{$projet->description}}</small>
    <br>
    {{$projet->created_at->diffForHumans()}}
    </li>
   
 
</ul>

@endsection