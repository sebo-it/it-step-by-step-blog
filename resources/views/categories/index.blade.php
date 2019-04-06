@extends('layout')

@section('content')

    @foreach($categories as $category)    

        <div class="row my-3 py-3 border-bottom justify-content-center">
            <div class="col-1 text-center">    
                <p> {{$category->id}} </p>
            </div>
            
            <div class="col-3 text-center">    
                <a href="{{route('categories.posts',$category->id)}}"> {{$category->name}} </a>
            </div>
    
<!--            OBSZAR EDYCYJNY-->
            <div class="col-sm-3 text-center">
                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">Edytuj</a>
                
                    <form action="{{route('categories.destroy', $category->id)}}" method="POST" id="delete-form-{{$category->id}}" style="display:none;">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                    </form>
                <a class="btn btn-danger" href="" onclick="
                       if(confirm('Czy na pewno usunąć wskazaną kategorię?'))
                       {
                           event.preventDefault();
                           document.getElementById('delete-form-{{$category->id}}').submit();
                       } 
                       else
                       {
                           event.preventDefault();
                       }">Usuń</a>
            </div>
        </div>
    @endforeach
    
    <div class="row justify-content-center">
<!--    Przycisk przekierowujacy na strone, gdzie mozna dodac kategorię-->
    <a href="{{route('categories.create')}}" class="btn btn-success px-5 py-3">Dodaj</a>
    </div> 
@endsection