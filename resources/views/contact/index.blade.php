@extends('layout')

@section('content')
    <p class="h3">Formularz kontaktowy</p>
    <form>
        <div class="form-group">
            <input type="email" class="form-control" id="contactFormEmail" placeholder="Wpisz e-mail">
        </div>
        
        <div class="form-group">
            <input type='text' class="form-control" id='contactFormTopic' placeholder="Wpisz temat">
        </div>
        
        <div class="form-group">
            <textarea class="form-control" id="contactFormText"  placeholder="Wpisz treść"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Wyślij</button>
    </form>
@endsection