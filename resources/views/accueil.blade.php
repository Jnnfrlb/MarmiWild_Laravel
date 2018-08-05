@extends ('layout')

@section ('contenu')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="title_text_header">
        <img src="" alt="" style="width: 180px;"><br>
        <h1 style="color: #FFFDE1;text-shadow: 3px 4px 2px black;">RECETTES WILD</h1>
    </div>
</div>

<div class="bikerr_container">

    <h2 style="text-align: center;">Découvrez toutes nos recettes :</h2>
    <div class="container_velo">
        <div class="row">
            {{--{% for recette in recettes %}--}}
            <div class="col-lg-4 col-md-6 col-sm-12 bikerr-card">
                <div class="shadow">
                    <div class="card crop">
                        <a href="">

                        </a>

                    </div>
                    <div class="card-body">
                        <h5 class="title-announce">recette</h5>
                    </div>
                </div>
            </div>
            {{--{% endfor %}--}}
        </div>
    </div>
</div>

    @endsection