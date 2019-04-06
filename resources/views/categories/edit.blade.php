@extends('layout')

@section('content')
    <p class="h3">Edycja kategorii</p>
    <form action="{{route('categories.update', $category->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <input type="text" class="form-control" id='name' name="name" value="{{$category->name}}" placeholder="Wpisz nazwę">
        </div>           
        
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class='alert alert-danger'>
                    {{$error}}
                </div>
            @endforeach
        @endif        

        <button type="submit" class="btn btn-primary">Dodaj</button>
              
    </form>
    

    
@endsection