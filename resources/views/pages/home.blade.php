@extends('layouts/landing')

@section('content')

<div class="page-banner home-banner">
    <div class="container h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1 class="mb-4 text-primary">Avec Shipp c'est express, fiable et facile .</h1>
          <p class="text-lg mb-5 text-dark">Nos colis sont délivrés en toute sécurité et au bon instant.</p>

          <a href="/about" class="btn btn-outline border text-secondary">Plus d'infos</a>
          <a href="#" class="btn btn-primary btn-split ml-2">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
        </div>
        <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place">
            <img src="../assets/landing/img/b.png" alt="">
          </div>
        </div>
      </div>
    </div>
</div>

<main>
  <div class="page-section features">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
          <div class="d-flex flex-row">
            <div class="img-fluid mr-3">
              <img src="../assets/landing/img/icon_pattern.svg" alt="">
            </div>
            <div>
              <h5 class="text-primary">Rapidité</h5>
              <p>Avec Shipp, envoyer un colis en un clin d'œil</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
          <div class="d-flex flex-row">
            <div class="img-fluid mr-3">
              <img src="../assets/landing/img/icon_pattern.svg" alt="">
            </div>
            <div>
              <h5 class="text-primary">Sécurité</h5>
              <p>Rester serein pour vos envoies de colis</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
          <div class="d-flex flex-row">
            <div class="img-fluid mr-3">
              <img src="../assets/landing/img/icon_pattern.svg" alt="">
            </div>
            <div>
              <h5 class="text-primary">Paiement facile</h5>
              <p>Vous pouvez payer à la livraison en espèce</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place text-center">
            <img src="../assets/landing/img/lieu.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <h2 class="title-section">Le meilleur endroit pour effectuer une  <span class="marked">Livraison</span></h2>
          <div class="divider"></div>
          <p>Essaies et tu auras plus +1 sur ta bénédiction!</p>
          <!-- <div class="img-place mb-3">
            <img src="../assets/landing/img/lieu.png" alt="">
          </div> -->
          <a href="/commande" class="btn btn-primary">Essayez maintemant!</a>
          <a href="#" class="btn btn-outline border ml-2">Notre Story</a>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
<!-- 
  <div class="page-section counter-section">
    <div class="container">
      <div class="row align-items-center text-center">
        <div class="col-lg-4">
          <p>Total Invest</p>
          <h2>$<span class="number" data-number="816278"></span></h2>
        </div>
        <div class="col-lg-4">
          <p>Yearly Revenue</p>
          <h2>$<span class="number" data-number="216422"></span></h2>
        </div>
        <div class="col-lg-4">
          <p>Growth Ration</p>
          <h2><span class="number" data-number="73"></span>%</h2>
        </div>
      </div>
    </div> .container
  </div> .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-3 wow fadeInLeft">
          <h2 class="title-section">Nous sommes  <span class="marked">prêts </span> à vous servir avec le meilleur</h2>
          <div class="divider"></div>
          <p class="mb-5">Nous fournissons un service de qualité tout en respectant votre vie privée</p>
          <a href="#" class="btn btn-primary">Essayezz maintenant</a>
          <a href="#" class="btn btn-outline ml-2">Notre story</a>
        </div>
        <div class="col-lg-6 py-3 wow zoomIn">
          <div class="img-place text-center size-23">
            <img src="../assets/landing/img/vie.png" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead text-dark">Pourquoi nous choisir?</div>
        <h2 class="title-section">Votre <span class="marked">satisfaction</span> notre priorité.</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5 text-center">
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="display-3"><span class="mai-shapes"></span></div>
          <h5>Haute performance</h5>
        </div>
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="display-3"><span class="mai-shapes"></span></div>
          <h5>Prix ​​d'amis</h5>
        </div>
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="display-3"><span class="mai-shapes"></span></div>
          <h5>Pas de confusion temporelle</h5>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- <div class="page-section border-top">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <h2 class="title-section">Comment ça marche?</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 col-lg-auto py-3 wow fadeInLeft">
          <div class="card-pricing">
            <div class="header">
              <div class="price-icon"><span class="mai-people"></span></div>
              <div class="price-title">Membership</div>
            </div>
            <div class="body py-3">
              <div class="price-tag">
                <span class="currency">$</span>
                <h2 class="display-4">30</h2>
                <span class="period">/monthly</span>
              </div>
              <div class="price-info">
                <p>Choose the plan that right for you</p>
              </div>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-auto py-3 wow fadeInUp">
          <div class="card-pricing active">
            <div class="header">
              <div class="price-labled">Best</div>
              <div class="price-icon"><span class="mai-business"></span></div>
              <div class="price-title">Dedicated</div>
            </div>
            <div class="body py-3">
              <div class="price-tag">
                <span class="currency">$</span>
                <h2 class="display-4">60</h2>
                <span class="period">/monthly</span>
              </div>
              <div class="price-info">
                <p>Choose the plan that right for you</p>
              </div>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-auto py-3 wow fadeInRight">
          <div class="card-pricing">
            <div class="header">
              <div class="price-icon"><span class="mai-rocket-outline"></span></div>
              <div class="price-title">Private</div>
            </div>
            <div class="body py-3">
              <div class="price-tag">
                <span class="currency">$</span>
                <h2 class="display-4">90</h2>
                <span class="period">/monthly</span>
              </div>
              <div class="price-info">
                <p>Choose the plan that right for you</p>
              </div>
            </div>
            <div class="footer">
              <a href="#" class="btn btn-outline rounded-pill">Choose Plan</a>
            </div>
          </div>
        </div> -->
        
      <!-- </div>
    </div> .container
  </div> .page-section -->

  <!-- <div class="page-section bg-light">
    <div class="container">
      
      <div class="owl-carousel wow fadeInUp" id="testimonials">
        <div class="item">
          <div class="row align-items-center">
            <div class="col-md-6 py-3">
              <div class="testi-image">
                <img src="../assets/landing/img/person/person_1.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6 py-3">
              <div class="testi-content">
                <p>•	Donner le nombre de colis à faire livrer</p>
                <div class="entry-footer">
                  <strong>o	1
o	<5
o	>5</strong> 
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="row align-items-center">
            <div class="col-md-6 py-3">
              <div class="testi-image">
                <img src="../assets/landing/img/person/person_2.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6 py-3">
              <div class="testi-content">
                <p>•	Choisir le type de colis à faire livrer</p>
                <div class="entry-footer">
                  <strong>
o	Vêtements
o	Courses
o	Produit frais
o	Repas chaud
o	Colis volumineux 
</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row align-items-center">
            <div class="col-md-6 py-3">
              <div class="testi-image">
                <img src="../assets/landing/img/person/person_2.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6 py-3">
              <div class="testi-content">
                <p>•	Donner le poids du colis à faire livrer</p>
                <div class="entry-footer">
                  <strong>o	<1 Kg
o	<3 Kg
o	3- 10 Kg
o	>10 Kg</strong>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div> .container
  </div> .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h2 class="title-section">Entrer en contact</h2>
          <div class="divider"></div>
          <p>Nous sommes ouvert à toutes vos préoccupations.<br>N'hésitez surtout pas! </p>

          <ul class="contact-list">
            <li>
              <div class="icon"><span class="mai-map"></span></div>
              <div class="content">Cocody Palmeraie</div>
            </li>
            <li>
              <div class="icon"><span class="mai-mail"></span></div>
              <div class="content"><a href="#">bakayoko@gmail.com</a></div>
            </li>
            <li>
              <div class="icon"><span class="mai-phone-portrait"></span></div>
              <div class="content"><a href="#">+225 0777054186</a></div>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 py-3 wow fadeInUp">
          <div class="subhead">Nous contacter</div>
          <h2 class="title-section">Ecrivez-nous</h2>
          <div class="divider"></div>
          
          <form action="#">
            <div class="py-2">
              <input type="text" class="form-control" placeholder="Nom complet">
            </div>
            <div class="py-2">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="py-2">
              <textarea rows="6" class="form-control" placeholder="Enter message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill mt-4">Envoyez votre message</button>
          </form>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <!-- <div class="page-section border-top">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Our Blog</div>
        <h2 class="title-section">Read our latest <span class="marked">News</span></h2>
        <div class="divider mx-auto"></div>
      </div>
      <div class="row my-5 card-blog-row">
        <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="entry-footer">
                <div class="post-author">Sam Newman</div>
                <a href="#" class="post-date">23 Apr 2020</a>
              </div>
            </div>
            <div class="body">
              <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
            </div>
            <div class="footer">
              <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="avatar">
                <img src="../assets/img/person/person_1.jpg" alt="">
              </div>
              <div class="entry-footer">
                <div class="post-author">Sam Newman</div>
                <a href="#" class="post-date">23 Apr 2020</a>
              </div>
            </div>
            <div class="body">
              <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
              <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="footer">
              <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="avatar">
                <img src="../assets/img/person/person_2.jpg" alt="">
              </div>
              <div class="entry-footer">
                <div class="post-author">Sam Newman</div>
                <a href="#" class="post-date">23 Apr 2020</a>
              </div>
            </div>
            <div class="body">
              <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
              <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="footer">
              <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="avatar">
                <img src="../assets/img/person/person_3.jpg" alt="">
              </div>
              <div class="entry-footer">
                <div class="post-author">Sam Newman</div>
                <a href="#" class="post-date">23 Apr 2020</a>
              </div>
            </div>
            <div class="body">
              <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>
              <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
            <div class="footer">
              <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center">
        <a href="blog.html" class="btn btn-outline-primary rounded-pill">Discover More</a>
      </div>
    </div> .container
  </div> .page-section -->

  <div class="page-section client-section">
    <div class="container-fluid">
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
        <div class="item wow zoomIn">
          <img src="../assets/img/clients/airbnb.png" alt="">
        </div>
        <div class="item wow zoomIn">
          <img src="../assets/img/clients/google.png" alt="">
        </div>
        <div class="item wow zoomIn">
          <img src="../assets/img/clients/stripe.png" alt="">
        </div>
        <div class="item wow zoomIn">
          <img src="../assets/img/clients/paypal.png" alt="">
        </div>
        <div class="item wow zoomIn">
          <img src="../assets/img/clients/mailchimp.png" alt="">
        </div>
      </div>
    </div> <!-- .container-fluid -->
  </div> <!-- .page-section -->
</main>









@endsection