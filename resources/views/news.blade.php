@extends('Layouts.master')
@section('content')

    <h1>News list</h1>

    @foreach($news as $article)
        <div class="flex">
            <div class="" style="margin: 15px 20px; border: 2px solid black; padding: 10px 15px; width: 100%">

        <div class="flex justify-center ">
            <img src="{{ $article['urlToImage'] }}" alt="article image" width="300px" height="300px"/>
        </div>

        <div>
            <div class="flex justify-center">
                <h5>{{ $article['title'] }}</h5>
            </div>

            <div class="text-center l">
                {{ $article['description'] }}
            </div>
        </div>



    </div>
        </div>


    @endforeach

@endsection
