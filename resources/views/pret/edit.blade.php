@extends('base',["pageTitle"=>"edition du pret"])

@section('content')
    <div class="card">
        <div class="card-header">
            Formulaire
        </div>
        <div class="card-body">
            <form action="{{url('pret')}}" method="post">
            {!! csrf_field() !!}
            <label for="clientName">Name</label>
            <input type="text" name="clientName" id="clientName">
            <label for="montant">montant</label>
            <input type="number" name="montant" id="montant">
            <label for="endAt">fin du remboursement</label>
            <input type="datetime" name="endAt" id="endAt">
            <label for="interet">Interet</label>
            <input type="number" name="interet" id="interet">
            <label for="pourcentage">pourcentage</label>
            <input type="number" name="pourcentage" id="pourcentage">
            <label for="modePayement">mode de Payement</label>
            <input type="text" name="modePayement" id="modePayement">
            <button type="submit">faire un pret</button>
        </form>
        </div>
    </div>

@endsection
