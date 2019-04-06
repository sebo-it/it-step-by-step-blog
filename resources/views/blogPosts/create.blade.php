@extends('layout')

@section('endOfHeadTag')
	<script src=" {{ asset('../vendor/ckeditor/ckeditor/ckeditor.js') }} "></script>    
@endsection

@section('content')

    <p class="h3">Tworzenie posta</p>
    <form action='{{route('blogPosts.store')}}' method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" id='title' name="title" placeholder="Wpisz tytuł" value="{{ old('title') }}">
        </div>
        
        <div class="form-group">
            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
            <script>
                CKEDITOR.replace( 'content', {
                    language: 'pl'
                });
                CKEDITOR.config.autoParagraph = false;
            </script>
        </div>
        
        <div class="form-group">
            <label for="imageURL">Wybierz zdjęcie nagłówkowe: </label>
            <input type="file" name="imageURL" id="imageURL" class="form-control-file">
        </div>       
        
        <div class="form-group">
            <select class="form-control" id="category_id" name="category_id">
                
<!--                Ponizszy skrypt:
                - odczytuje ostatnia czesc POPRZEDNIEGO adresu URL
                - wypisuje opcje=etykiete Wybierz kategorie, ktora nie posiada value
                - w petli wypisuje wszystkie opcje listy, sprawdzajac czy:
                    - poprzedni URL byl z konkretnej kategori, jesli tak ustawia liste na wybranej opcji,
                    - istniala poprzednia wartosc pola formularza, jesli tak ponownie wypelnia pola-->

<!--            Wersja bez sprawdzania poprzedniego URL
                <option value="">Wybierz kategorie:</option>
                                if wyswietla poprzednia wartosc w razie errora
                @foreach($categoryNames as $categoryName)
                    <option 
                        @if (old('category_id') == $categoryName->id) selected="selected" @endif 
                        value="{{ $categoryName->id }}"> {{ $categoryName->name }} 
                    </option>
                @endforeach-->

                <?php                    
                    $partsOfPreviousURL = parse_url(URL::previous());
                    $partsOfPreviousURL = explode("/", $partsOfPreviousURL['path']);  
                    $lastPartOfPreviousURL = end($partsOfPreviousURL);

                    echo "<option value=''>Wybierz kategorie:</option>";
                    foreach ($categoryNames as $categoryName) 
                    {
                        echo "<option value=$categoryName->id";
                        if(is_numeric($lastPartOfPreviousURL) && $categoryName->id == $lastPartOfPreviousURL)
                        {
                            echo " selected='selected'";
                        }
                        if(old('category_id') == $categoryName->id)
                            {
                            //ponizej MUSI byc spacja przed selected!
                            echo " selected='selected'";
                            }
                        echo ">$categoryName->name</option>";
                    }
                ?>
                
            </select>            
        </div>
        
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class='alert alert-danger'>
                    {{$error}}
                </div>
            @endforeach
        @endif        

        <button type="submit" class="btn btn-success">Dodaj</button>
              
    </form>
 
@endsection