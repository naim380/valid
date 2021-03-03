@extends('layout')
@section('content')
    <section class="title sale">
        <div class="container">
            <h1 class="page-title">Vendre ma voiture</h1>
        </div>
    </section>
    <section class="content sale container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="subtilte">Service</h2>
                <h2 class="subtilte">Conditions</h2>
                <h2 class="subtilte">Garantie</h2>
            </div>
            <div class="col-sm-4">
                <form action="{{ route('validation') }}" method="POST">
                    {{ csrf_field() }}
                    <h2 class="subtilte">Vendeur</h2>
                    <div class=" d-flex mb-5 flex-column">
                        <input type="text" class="form-control mb-2 input-lc" placeholder="Votre prénom" name="first_name">
                        <input type="text" class="form-control mb-2 input-lc return" placeholder="votre nom" name="last_name">
                        <input type="text" class="form-control mb-2 input-lc" placeholder="Votre mail" name="mail">
                        <input type="text" class="form-control mb-2 input-lc return" placeholder="Votre n° de téléphone" name="phone">
                    </div>
                    <h2 class="subtilte">Voiture</h2>
                    <div class=" d-flex flex-column">
                        <input type="text" class="form-control mb-2" placeholder="Marque" name="marque">
                        <input type="text" class="form-control mb-2 return" placeholder="Modèle" name="model">
                        <input type="number" class="form-control mb-2" placeholder="Année" name="year">
                        <input type="number" class="form-control mb-2 return" placeholder="kilométrage" name="km">
                        <input type="number" class="form-control mb-2" placeholder="prix" name="prix">
                        {{--<input type="text" class="form-control mb-2 input-lc return" placeholder="image.jpg" name="picture">--}}
                        <textarea class="form-control  ml-2 mb-2" id="message" name="description" rows="4" placeholder="Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lc w-100 ml-3">Envoyer</button>
                    <div class="text-center col-sm-4 offset-4">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{--}}@if(Request::isMethod('post'))
        <p class="text-light">{{$form['first_name']}}, {{$form['last_name']}}, {{$form['mail']}}, {{$form['phone']}}, {{$form['marque']}}, {{$form['model']}}, {{$form['annee']}}, {{$form['kilometrage']}}, {{$form['prix']}}</p>
    @endif--}}
@endsection
