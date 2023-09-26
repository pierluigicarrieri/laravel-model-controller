@extends ('layouts.public')

@section('content')

<main class="bg-secondary-subtle">

    <div class="container">

    <h1 class="py-5 text-center text-danger">Movie cards using MVC</h1>

        <div class="row row-cols-4 g-5">

            @foreach ($movies as $movie)

            <div class="col">

            <div class="card h-100 text-center">

                <div class="card-header">
                    {{$movie->title}}
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$movie->original_title}}</li>
                    <li class="list-group-item">{{$movie->nationality}}</li>
                    <li class="list-group-item">{{$movie->date}}</li>
                </ul>


                </div>
            
            </div>

            @endforeach


        </div>

    </div>


</main>



@endsection