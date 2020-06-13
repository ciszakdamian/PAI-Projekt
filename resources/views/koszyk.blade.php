<!doctype html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="#">


    <title>Koszyk</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <style>

        body {
            background-color: #f5f5f5;
        }

        .Product-img img {
            width: 100%;
        }

        .main-section {
            font-family: 'Roboto Condensed', sans-serif;
            margin-top: 100px;
        }

    </style>


</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="/">PAI PROJEKT</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="katalog_filmow">Katalog filmow</a>
        </li>
    </ul>

    <!-- Right -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="/koszyk" class="nav-link navbar-link-2 waves-effect">
                <svg class="bi bi-basket" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 1 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z"/>
                    <path fill-rule="evenodd"
                          d="M1 7v1h14V7H1zM.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H.5z"/>
                    <path fill-rule="evenodd"
                          d="M14 9H2v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V9zM2 8a1 1 0 0 0-1 1v5a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V9a1 1 0 0 0-1-1H2z"/>
                    <path fill-rule="evenodd"
                          d="M4 10a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </a>
        </li>
    </ul>
</nav>

<main role="main">
    <div class="container main-section">
        <div class="row">
            <div class="col-lg-12 pb-2">
                <h4>Lista wybranych filmów: </h4>
            </div>

            <div class="col-lg-12 pl-3 pt-3">
                <table class="table table-hover border bg-white">
                    <thead>
                    <tr>
                        <th>Filmy</th>
                        <th>Cena</th>
                        <th>Usun</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($koszykPusty == 0)
                        @foreach($koszykLista as $film)
                            @foreach($film as $f)
                                <tr>
                                    <td>

                                        <div class="row">
                                            <div class="col-lg-2 Product-img">
                                                <img src="{{ asset('img/okladki_filmow/'.$f->okladka)}}"
                                                     class="img-responsive"/>
                                            </div>
                                            <div class="col-lg-10">
                                                <h4 class="nomargin">{{$f->tytul}}</h4>
                                                <p>{{$f->opis_fabuly}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$f->cena}}</td>
                                    <td class="actions" data-th="" style="width:10%;">
                                        <a href="{{ 'usun_z_koszyka/'.$f->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <td><a href="katalog_filmow" class="btn btn-warning text-white"><i
                                    class="fa fa-angle-left"></i>
                                Dodaj filmy</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center" style="width:10%;"><strong>Suma: {{ $koszykSuma }} </strong>
                        </td>
                        <td><a href="#" class="btn btn-success btn-block">Kupuje <i class="fa fa-angle-right"></i></a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

</body>
</html>

