@extends('base', ['pageTitle' => 'Faire un pret'])

@section('content')
    <div class="">
        <div class="card-header">
            Formulaire de saisi de pret
        </div>
        <form action="{{ url('pret/add') }}" method="post">
            <div class="form-groupe p-4">
                {!! csrf_field() !!}
                <div class="row mt-3">
                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Responsable</option>
                            for
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Client</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input type="number" class="form-control" name="interet" id="interet" placeholder="interet">

                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="pourcentage" id="pourcentage"
                            placeholder="pourcentage">

                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="mode_payement" id="mode_payement"
                            placeholder="mode de Payement">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="begin_at">date du pret</label>
                        <input type="datetime-local" class="form-control" name="begin_at" id="begin_at">

                    </div>
                    <div class="col">
                        <label for="end-at">fin du remboursement</label>
                        <input type="datetime-local" class="form-control" name="end_at" id="end_at">

                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <select class="form-select" aria-label="Default select example" name="mode_remboursement">
                            <option selected>mode de remboursement</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select" aria-label="Default select example" name="mode_payement">
                            <option selected>mode de payement</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="form-outline">
                        <textarea class="form-control" id="form6Example7" rows="4" placeholder="commentaire"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-3">faire un pret</button>
            </div>
        </form>
    </div>
@endsection
