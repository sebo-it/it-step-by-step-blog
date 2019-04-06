@extends('layout')

@section('content')
    <p class="h3">Tworzenie kategorii</p>
    <form action='{{route('categories.store')}}' method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" id='name' name="name" placeholder="Wpisz nazwę">
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