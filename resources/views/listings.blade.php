@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Business Listings</div>

                <div class="card-body">
                    @if(count($listings))
                        <ul class = "listgroup">
                            @foreach($listings as $listing)
                            <li class = "list-group-item"><a href="/items/{{$listing->id}}">{{$listing->name}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
