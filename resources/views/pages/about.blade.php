@extends('layouts/landing')

@section('content')

<div class="container mt-5">
    <div class="page-banner">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6">
          <nav aria-label="Breadcrumb">
            <ul class="breadcrumb justify-content-center py-0 bg-transparent">
              <li class="breadcrumb-item"><a href="/">Accueil</a></li>
              <li class="breadcrumb-item active">Qui sommes-nous?</li>
            </ul>
          </nav>
          <h1 class="text-center">A propos de nous</h1>
        </div>
      </div>
    </div>
</div>


<main>
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place">
              <img src="../assets/dashboard/img/logo.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3 pr-lg-5">
            <h2 class="title-section"><span class="marked">Shipp</span> est une start up qui développe le concept de livraison collaborative </h2>
            <div class="divider"></div>
            <p>Tout ça, grâce à une application de mise en relation</p>
            <a href="/commande" class="btn btn-primary">+1 sur ta bénédiction!</a>
            <a href="#" class="btn btn-outline border ml-2">Notre story</a>
          </div>
        </div>
      </div> <!-- .container -->
  
    <!-- Testimonials -->
    <div class="page-section bg-light">
      <div class="container">
        
        <div class="owl-carousel" id="testimonials">
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  {{-- <img src="../assets/dashboard/img/logo.png" alt=""> --}}
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Plus besoin de faire des statuts Whatsapp ou d’appeler plusieurs contacts avant d’obtenir un livreur.
                    SHIPP permet à des particuliers de profiter de leurs trajets quotidiens à pied, à vélo ou en véhicule motorisé pour proposer une livraison alternative et flexible à tous. 
                    Les livreurs reçoivent en échange une commission. Notre modèle nous permet de proposer des prix modérés et un service plus responsable d'un point de vue environnemental à nos clients. </p>
                  
                </div>
              </div>
            </div>
          </div>
  
          <div class="item">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="testi-image">
                  {{-- <img src="../assets/dashboard/img/person/person_2.jpg" alt=""> --}}
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="testi-content">
                  <p>Nous avons pour sécuriser les livraisons, mis en place des critères de sélection des livreurs, mais aussi les sensibiliser sur des sujets de sécurité, de respect des délais ou encore d'attitude face au client. Nous avons aussi déployé un système d'évaluation des livreurs.</p>
                  
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
    
    
  </main>


    


@endsection