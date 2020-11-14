@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifer des articles </div>
                                            
                    <div class="card-body">
                
                        <form method="post" action="{{route('articles.update', $article)}}" role="form">   
                        @csrf 
                        @method('PATCH')
    
                            @foreach ($categories as $categorie)
                            <div class="form-check">

                                <input type="checkbox" name="categories[]" value=" {{$categorie->id}} " id="{{$categorie->id}}">
                                <label for ="{{$categorie->id}}" class="form-check-label">{{$categorie->name}} </label>
                            </div>
                            @endforeach
                                <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success" style="color: green;">Update</button></div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection