@extends('layout')

@section('content')

    <div class="row mb-3 pb-3 justify-content-center"> 
        <div class="col-md-4 text-center align-self-center">
            <p class="h2"> {{$post->title}} </p>           
            <small class="text-muted"> <a href="{{route('categories.posts',$post->category_id)}}"> {{$post->category->name}} </a> {{" | ".date("d-m-Y",strtotime($post->created_at))." | "." Komentarze: ".$post->getCommentsQuantity()}} </small>
        </div>

        <div class="col-md-4">
            <img src="{{asset($post->imageURL)}}" class="img-fluid mt-4">
        </div>
    </div>

    <div class="row mt-3 pt-3">
        <div class="col-12 col-sm-12 col-md-8 mx-auto">
            <p class="text-justify" style="font-size: 1.2em; line-height: 2em;"> {!! $post->content !!}</p>
        </div>
    </div>
    
    <!--obszary edycyjny-->
    <?php if(Auth::check()){ ?>
        <div class="row mb-3 pb-3">
            <div class="col-12 col-sm-12 col-md-8 mx-auto">
                <a href="{{route('blogPosts.edit', $post->id)}}" class="btn btn-warning">Edytuj</a>

                <form action="{{route('blogPosts.destroy', $post->id)}}" method="POST" id="delete-form-{{$post->id}}" style="display:none;">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                </form>

                <a class="btn btn-danger" href="" onclick="
                       if(confirm('Czy na pewno usunąć wskazany post?'))
                       {
                           event.preventDefault();
                           document.getElementById('delete-form-{{$post->id}}').submit();
                       } else
                       {
                           event.preventDefault();
                       }">Usuń</a>
            </div>
        </div>
    <?php } ?>

    <!--KOMENTARZE-->
    <div class="row my-3 py-3">
        <div class="col-12 col-sm-12 col-md-8 mx-auto">
            <p class="h3 mb-4">Komentarze({{$post->getCommentsQuantity()}}):</p>
            @foreach($post->comments as $comment)
                <div class="border-bottom bg-light pt-3">                
                    <p>{{$comment->author}} | {{date("d-m-Y G:i:s",strtotime($comment->created_at))}}</p>
                    <p>{{$comment->text}}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!--Tworzenie komentarza-->
    <div class="row my-3 py-3">
        <div class="col-12 col-sm-12 col-md-8 mx-auto">
            <form action="{{route('comments.store', $post->id)}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <input type='text' class="form-control" id='author' name="author" placeholder="Wpisz nick">
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="text" name="text" placeholder="Wpisz treść"></textarea>
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
        </div>
    </div>

@endsection
