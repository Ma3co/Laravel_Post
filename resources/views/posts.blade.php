@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">

            @foreach($posts as $post)
            <!-- <div class="card bg-dark text-white"> -->
            <div class="card border-info bg-ligt ">
            <div class="card text-center text-ligh bg-dark"><br><h3>{{ $post->title }} </h3></dic>
                <div class="card text-white  bg-dark" >

                @if ($post->image)
                    <img src="{{ $post->get_image }}" class="card-img-top">
                    @endif
                @if ($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                {!! $post->iframe !!}
                        </div>
                @endif
                    <!-- <h5 class="card-title">{{ $post->title }}</h5> -->
                    <p class="text-info bg-dark"> <br>
                       {{ $post->get_excerpt }} 
                       <a href="{{ route('post', $post) }}">Ver todo...</a>
                    </p>
                    <p class="text-muted text-ligh bg-dark">
                        <em>
                          &ndash; {{ $post->user->name }}  
                        </em>
                        {{ $post->created_at->format('d M Y') }}
                    </p>
                </div><br>
            </div>
            @endforeach
            {{ $posts->links() }}
            
        </div>
    </div>
</div>
@endsection
