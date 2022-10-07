@extends('base',["pageTitle"=>"show the pret"])

@section('content')
<div class="container">
    <p>name : {{ $pret->ClientName }}</p>
    <p>debut du pret : {{ $pret->begin_at }}</p>
    <p>fin du pret : {{ $pret->end_at }}</p>
    <p>somme total : {{ $pret->montant }} ar</p>
    <p>les interets : {{ $pret->interet }}</p>
    <p>pourcentage : {{ $pret->pourcentage }} %</p>
    <p>nmode de payement : {{ $pret->mode_payement }}</p>
    <button class="btn btn-primary mt-2"><a href="{{url('/prets/'.$pret->id.'/edit')  }}">Modifier</a></button>
</div>
@endsection
