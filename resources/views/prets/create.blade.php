@extends('base',["pageTitle"=>"Faire un pret"])

@section('content')
    <div class="card">
        <div class="card-header">
            Formulaire
        </div>
        <form action="{{url('pret')}}" method="post">
            <div class="form-groupe p-4">
                {!! csrf_field() !!}
                <div class="form-row">
                    <div class="col">
                        <label for="ClientName">Name</label>
                        <input type="text" class="form-control" name="ClientName" id="ClientName">

                    </div>
                    <div class="col">
                        <label for="montant">montant</label>
                        <input type="number" class="form-control" name="montant" id="montant">

                    </div>
                    <div class="col">
                        <label for="end-at">fin du remboursement</label>
                        <input type="datetime-local" class="form-control" name="end_at" id="end_at">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="interet">Interet</label>
                        <input type="number" class="form-control" name="interet" id="interet">

                    </div>
                    <div class="col">
                        <label for="pourcentage">pourcentage</label>
                        <input type="number" class="form-control" name="pourcentage" id="pourcentage">

                    </div>
                    <div class="col">
                        <label for="mode_payement">mode de Payement</label>
                        <input type="text" class="form-control" name="mode_payement" id="mode_payement">

                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">faire un pret</button>
            </div>
        </form>
    </div>
@endsection
