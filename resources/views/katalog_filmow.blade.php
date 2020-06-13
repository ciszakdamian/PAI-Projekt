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


    <title>Katalog filmów</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">


</head>

<body>
    <style>
        .main-title{
            color: #777;
            font-size: 400%;
            text-transform: uppercase;
            text-align: center;
        }
        .movie-title{
            font-size: 150%;
            padding: 15px;
            font-weight: 700;
            color: #666;
        }
        .btn-add, .btn-more{
            padding-top: 10px;
            padding-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-add{
            color: rgb(146, 146, 146);
            background-color: #75ccff4b;
            font-weight: 700;
        }

        .modal-footer .btn-add{
            border-color: #555;
        }
        .btn-add:hover{
            background-color: #58b4ff;
            color: white;
        }


        .modal-footer .btn-more{
            background-color: #fff;
            color: #444;
        }

        .btn-more:hover{
            background-color: #eeeeee;
            color: black;
        }



        .card-one:hover{
            box-shadow: #55555549 0px 0px 10px 2px;
        }

        .card-one{
            transition: all ease-out 0.2s;
        }
        .info-flex{
            display: flex;
            width: 100%;
            justify-content: space-between;
            flex-direction: row;
        }
        .info-big{
            font-size: 110%;
            margin-left: 25px;
            margin-right: 25px;
        }
        .info-big-title{
            font-size: 120%;
            font-weight: 700;
            color: #777;
        }
        .info-title-header{
            font-size: 150%;
            color: #555;
        }
        .info-flex-price{
            font-size: 120%;
            font-weight: 700;
            color: #777;
        }

        .text-price{
            font-size: 115%;
            font-weight: 700;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
        }

        .small-hr{
            width: 75%;
        }

        .form-select{
            margin-bottom: 30px;
            background-color: #fff;
            padding: 15px;
            border-radius: 30px;
            border-color: #ddd;
            border-width: 1px;
            border-style: solid;
            transition: all ease-out 0.2s;
        }

        .form-select:hover{
            box-shadow: #55555549 0px 0px 10px 2px;
        }

        .category-select{
            font-weight: 700;
            
            color: #999;
        }

        .basket-counter{
            background-color: #777;
            border-radius: 50%;
            min-width: 40px;
            max-height: 40px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all ease-out 0.2s;
        }

        .basket-counter:hover{
            border-radius: 25%;
        }

        .basket-counter a span{
            color: #ccc;
        }

    </style>


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
        @if($koszykIlosc > 0)
        <li class="nav-item basket-counter">
            <a href="/koszyk" class="nav-link navbar-link-2 waves-effect">
            <span>
                {{$koszykIlosc}}</span>
            </a>
        </li>
        @endif
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
    <div class="album py-5 bg-light">
        <div class="container">

            <p class="main-title">Katalog filmów</p>

            <form method="post" action="{{action('FilmyController@kategorie')}}" role="form">
                @csrf
                <div class="form-row align-items-end d-flex justify-content-center form-select">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2 category-select" for="inlineFormCustomSelect">Pokaż według kategorii:</label>
                        <select name='kategoria' class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option value="Wszystkie" selected>Wszystkie</option>
                            @foreach($katalogKategorie as $kategoria)
                                <option value="{{ $kategoria->kategoria }}">{{ $kategoria->kategoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Wyświetl</button>
                    </div>
                </div>
            </form>

            <div class="row">
                @foreach($katalogFilmow as $film)

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow card-one">
                        <h5 class="text-center movie-title" class="card-title">{{ $film->tytul }}</h5>
                        <img class="card-img-top" src="{{ asset('img/okladki_filmow/'.$film->okladka)}}"
                             alt="Okladka filmu">
                        <div class="card-body">
                                <div class="d-flex justify-content-between align-items-right">
                                <span>Reżyser:</span> <span>{{ $film->rezyser }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-right">
                                <span>Rok produkcji:</span> <span>{{ $film->rok_produkcji }}</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-right">
                                <span>Gatunek:</span> <span>{{ $film->kategoria }}</span>
                                </div>


                                <hr>
                            <div class="d-flex flex-column justify-content-between align-items-right">
                                <small class="text-muted text-price"><p>CENA:</p><p>{{ str_replace(".",",",$film->cena) }} PLN</p></small>

                                <div class="btn-group">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-outline-secondary btn-more"
                                            data-toggle="modal"
                                            data-target="#exampleModalCenter{{ $film->id }}"><span>Szczegóły</span>
                                    </button>


                                    <a href="{{ 'dodaj_do_koszyka/'.$film->id }}" type="button"
                                        class="btn btn-sm btn-outline-secondary btn-add">Dodaj do
                                         koszyka
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter{{ $film->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title info-title-header" id="exampleModalLongTitle">{{ $film->tytul }}</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>

                               <div class="modal-body">
                                   <div class="info-flex">
                                       <p>REŻYSER:</p>
                                       <p>
                                       {{ $film->rezyser }}
                                       </p>
   
                                   </div>
                                   <div class="info-flex">
                                       <p>GATUNEK:</p>
                                       <p>
                                       {{ $film->kategoria }}
                                       </p>
   
                                   </div>
                                   <div class="info-flex">
                                       <p>ROK PRODUKCJI:</p>
                                       <p>
                                       {{ $film->rok_produkcji }}
                                       </p>
   
                                   </div>
                                   <hr class="small-hr">

                                   <p class="info-big-title">Fabuła:</p>
                                   <p class="info-big">
                                   "{{ $film->opis_fabuly }}"
                                   </p>


                                   <hr class="small-hr">
                               <div class="info-flex info-flex-price">
                                   <p>CENA:</p>
                                   <p>
                                   {{ str_replace(".",",",$film->cena) }} PLN
                                   </p>

                               </div>

                               </div>

                               <div class="modal-footer">

                                   <button type="button" class="btn btn-secondary btn-more" data-dismiss="modal">Wróc</button>
                                   <a href="{{ 'dodaj_do_koszyka/'.$film->id }}" type="button" class="btn btn-primary btn-add">Dodaj
                                    do koszyka</a>

                               </div>
                           </div>
                       </div>
                   </div>


                @endforeach


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

