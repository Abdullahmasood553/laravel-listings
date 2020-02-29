@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}}<a href="/items" style="float:right" class="btn btn-default btn-sm">Back</a></div>

                <div class="card-body">
                  <ul class = "list-group">
                    <li class = "list-group-item">{{$listing->address}}</li>
                    <li class = "list-group-item">{{$listing->email}}</li>
                    <li class = "list-group-item">{{$listing->phone}}</li>
                 </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
