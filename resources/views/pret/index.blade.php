@extends('base',["pageTitle"=>"Liste des prets"])

@section('content')
    <div class="conteneur-search d-flex justify-content-between my-3">
        <div class="mx-2">
            <p>Acceuil</p>
        </div>
        <div  class="search col-3 d-flex">
            <input type="text" name="search" id="searchClient"  class="form-control "><button  class="btn"><i class="bi bi-search"></i></button>
        </div>
    </div>
    <div class="">
        <table  class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col"class="text-center">ACTION</th>
                    <th scope="col">CLIENT</th>
                    <th scope="col">MONTANT PRET</th>
                    <th scope="col">DATE DU PRET</th>
                    <th scope="col">FIN DU CONTRAT</th>
                    <th scope="col">MONTANT INTERET</th>
                    <th scope="col">POURCENTAGE</th>
                    <th scope="col">MODE DE PAIEMENT</th>
                </tr>
            </thead>
            <tbody>
                
                <!-- {% for client in clients %} -->
                @foreach ($prets as $pret)
                <tr class="p-1">
                    <th  class="d-flex py-0 h-100">
                        <button class="btn d-flex justify-content-center align-items-center">
                            <a href="{{url("/pret/".$pret->id)  }}">
                                <i class="bi bi-eye-fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0
                                        8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </i>
                            </a>
                        </button>
                        <button class="btn  d-flex justify-content-center align-items-center">
                            <a href="{{url("/pret/".$pret->id."/edit")  }}">
                                <i class="bi bi-eye">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5
                                        1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0
                                        1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854
                                        4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1
                                        1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44
                                        3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                    </svg>
                                </i>
                            </a>
                        </button>
                        <button class="btn d-flex justify-content-center align-items-center">
                            <a href="{{url("/pret/".$pret->id."/delete")  }}">
                                <i class="bi bi-pencil">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-trash3-fill "
                                        viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115
                                        16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5
                                        0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5
                                        0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1
                                        0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0
                                        .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5
                                        0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                    </svg>
                                </i>
                            </a>
                        </button>
                    </th>
                    <td >{{  $pret->ClientName}}  </td>
                    <td >{{  $pret->montant}}   ar</td>
                    <td >{{  $pret->begin_at}} </td>
                    <td >{{  $pret->end_at  }}</td>
                    <td >{{  $pret->interet }}  ar</td>
                    <td >{{  $pret->pourcentage }}  %</td>
                    <td >{{  $pret->mode_payement}}  </td>
                </tr >
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <pagination-controls previousLabel="Prev"
            nextLabel="Next"  >
            </pagination-controls>
        </div>
    </div>
@endsection
