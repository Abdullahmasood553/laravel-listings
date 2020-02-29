@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span style="float:right"><a href="items/create" class="btn btn-success btn-sm">Add Your Listings</a></span></div>

                <div class="card-body">
                    <h3>Your Listings</h3>
                    @if(count($listings))
                       <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>    
                        </tr>   
                        @foreach($listings as $listing)
                            <tr>

                                <td>{{ $listing->name }}</td>
                                <td><a style="float:right" href="/items/{{$listing->id}}/edit" class="btn btn-default btn-sm">Edit</a></td>
                                <td>
                                    <form  action="{{ action('ListingController@destroy', $listing->id) }}" method="POST" onsubmit='return confirm("Are You sure")'>
                                    
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class = "btn btn-danger btn-sm" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    </table> 
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
@endsection
