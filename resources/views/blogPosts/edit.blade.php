@extends('layout')

@section('endOfHeadTag')
	<script src=" {{ asset('../vendor/ckeditor/ckeditor/ckeditor.js') }} "></script>    
@endsection

@section('content')
    
    <div class="row mb-3 pb-3 justify-content-center"> 
        <div class="col-md-4 text-center align-self-center">
                <p class="h3">Edycja posta</p>
        </div>

        <div class="col-md-4">
            <img src="{{asset($post->imageURL)}}" class="img-fluid mt-4">
        </div>
    </div>
    
    <form action="{{route('blogPosts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <input type="text" class="form-control" id='title' name="title" value="{{$post->title}}" placeholder="Wpisz tytuł">
        </div>
        
        <div class="form-group">
            <textarea class="form-control" id="content" name="content" placeholder="Wpisz treść">{{$post->content}}</textarea>
            <script>
                CKEDITOR.replace( 'content', {
                    language: 'pl'
                });
                CKEDITOR.config.autoParagraph = false;
            </script>
        </div>
        
        <div class="form-group">
            <label for="imageURL">Zmień zdjęcie nagłówkowe: </label>
            <input type="file" name="imageURL" id="imageURL" class="form-control-file">
        </div>
        
        <div class="form-group">
            <select class="form-control" id="category_id" name="category_id">
                <option value="">Wybierz kategorie:</option>
                @foreach($categoryNames as $categoryName)
                    <option value="{{$categoryName->id}}"
                        <?php 
                            if($categoryName->id == $post->category_id)
                            {
                                echo "selected='selected'";                                                               
                            }
                        ?>
                    > {{ $categoryName->name }} </option>
                @endforeach
            </select>            
        </div>
        
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class='alert alert-danger'>
                    {{$error}}
                </div>
            @endforeach
        @endif        

        <button type="submit" class="btn btn-success">Aktualizuj</button>
              
    </form>
    

    
@endsection