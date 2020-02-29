@extends('layouts.app')


@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing</div>

                <div class="card-body">
                 <form action="{{ action('ListingController@update', $listing->id) }}" method="POST">
                    @csrf
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <input type="text" value="{{$listing->name}}" class="form-control" name="name" id="">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{$listing->website}}" class="form-control" name="website" id="">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{$listing->email}}" value="{{$listing->name}}" class="form-control" name="email" id="">
                    </div>

                    <div class="form-group">
                            <input type="text" value="{{$listing->phone}}" class="form-control" name="phone" id="">
                    </div>


                    <div class="form-group">
                        <input type="text" value="{{$listing->address}}" class="form-control" name="address" id="">
                    </div>

                    <div class="form-group">
                        <textarea class = "form-control" name="description" id="" cols="15" rows="2">{{$listing->description}}</textarea>
                    </div>

                    <input type="submit" value="Submit" class = "btn btn-primary btn-sm">

                 </form>
                </div>
            </div>
        </div>
    </div>

@endsection