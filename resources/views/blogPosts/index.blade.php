@extends('layout')

@section('content')

    <?php if(count($posts)==0) { ?>
        <div class="row my-3 py-3">
            <div class="col text-center">
                <p class="h4">Brak postów do wyświetlenia</p>
            </div>        
        </div>       
    <?php } ?>     

    @foreach($posts as $post)    
    
        <div class="row my-3 py-3 border-bottom">
    <!--        W ponizszej linijce lamanie kolumn najnowszych postow foto - text. -->
            <div class="col-xl-3">
                <a href="{{route('blogPosts.show', $post->id)}}"> <img src="{{asset($post->imageURL)}}" class="img-fluid mb-3"> </a>
            </div>
            <div class="col-xl">    
                <p class="h5 mb-0 text-justify"> <a href="{{route('blogPosts.show', $post->id)}}"> {{$post->title}}</a> </p>
                <small class="text-muted"> <a href="{{route('categories.posts',$post->category_id)}}"> {{$post->category->name}} </a> {{" | ".date("d-m-Y",strtotime($post->created_at))." | "."Komentarze: ".$post->getCommentsQuantity()}} </small>                
                <p class="mt-3 text-justify" style="font-size: 1.2em; line-height: 2em;">                     
                    {!! $post->getFirstPartOfContent(250)."..." !!}    
                    <a class="btn btn-outline-secondary py-1 px-2" href="{{route('blogPosts.show', $post->id)}}">Czytaj</a>                    
                </p>
            </div>
    
<!--            OBSZAR EDYCYJNY-->
        <?php if(Auth::check()){ ?> 
                <div class="col-xl-2 align-self-center">
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
        <?php } ?>
        </div>
    @endforeach
    
<!--    Linki do paginacji-->
    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div> 

<!--Przycisk: dodawanie posta-->
    <?php if(Auth::check()){ ?> 
        <div class="row justify-content-center">
        <a href="{{route('blogPosts.create')}}" class="btn btn-success px-5 py-3">Dodaj</a>
        </div> 
    <?php } ?>

@endsection
