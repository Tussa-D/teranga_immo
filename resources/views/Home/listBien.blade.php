<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TerangaImmo-</title>
  <title>@yield('title', 'My app')</title>
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./asset/assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link href="./asset/css/styleR.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->
  <header class="header" data-header>
          

    <div class="overlay" data-overlay></div>
  
    <div class="header-top">
      <div class="container">
  
        <ul class="header-top-list">
  
          <li>
            <a href="mailto:info@TerangaImmo.com" class="header-top-link">
              <ion-icon name="mail-outline"></ion-icon>
  
              <span>info@TerangaImmo.com</span>
            </a>
          </li>
  
          <li>
            <a href="#" class="header-top-link">
              <ion-icon name="location-outline"></ion-icon>
  
              <address>15/A, Dakar, Senegal</address>
            </a>
          </li>
  
        </ul>
  
        <div class="wrapper">
          <ul class="header-top-social-list">
  
            <li>
              <a href="#" class="header-top-social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="header-top-social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="header-top-social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
  
            <li>
              <a href="#" class="header-top-social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>
  
          </ul>
  
          <button class="header-top-btn" onclick="window.location.href='/login';">Ajouter une annonce</button>
  
        </div>
  
      </div>
    </div>
  
    <div class="header-bottom">
      <div class="container">
        
        <a href="#" class="logo">
            <img  src="./asset/images/Teranga.png" style="width: 60px; height: auto;" alt="Logo Teranga" >
          </a>
      
  
        <nav class="navbar" data-navbar>
  
          <div class="navbar-top">
  
            <a href="#" class="logo">
              <img src="./assets/images/logo.png" alt="Logo Teranga">
            </a>
  
            <button class="nav-close-btn" data-nav-close-btn aria-label="Fermer le menu">
              <ion-icon name="close-outline"></ion-icon>
            </button>
  
          </div>
  
          <div class="navbar-bottom">
            <ul class="navbar-list">
  
              <li>
                <a href="/" class="navbar-link" data-nav-link>Accueil</a>
              </li>
  
              <li>
                <a href="/" class="navbar-link" data-nav-link>À propos</a>
              </li>
  
              <li>
                <a href="/" class="navbar-link" data-nav-link>Services</a>
              </li>
  
              <li>
                <a href="/" class="navbar-link" data-nav-link>Biens</a>
              </li>
  
             
            </ul>
          </div>
  
        </nav>
  
        <div class="header-bottom-actions">
  
          <button class="header-bottom-actions-btn" aria-label="Recherche">
            <ion-icon name="search-outline"></ion-icon>
  
            <span>Recherche</span>
          </button>
  
          <button class="header-bottom-actions-btn" aria-label="Profil">
            <ion-icon name="person-outline"></ion-icon>
  
            <span>Profil</span>
          </button>
  
          <button class="header-bottom-actions-btn" aria-label="Panier">
            <ion-icon name="cart-outline"></ion-icon>
  
            <span>Panier</span>
          </button>
  
          <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Ouvrir le menu">
            <ion-icon name="menu-outline"></ion-icon>
  
            <span>Menu</span>
          </button>
  
        </div>
  
      </div>
    </div>
  
  </header>
  
  
<section class="property" id="property">
    <div class="container">

        <p class="section-subtitle">Nos Propriétés</p>

        <h2 class="h2 section-title">Annonces en Vedette</h2>

        <ul class="property-list has-scrollbar">
            @foreach($biens as $property) <!-- Utilisation de $biens au lieu de $properties -->
                <li>
                    <div class="property-card">

                        <figure class="card-banner">
                            <a href="#">
                                <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->titre }}" class="w-100"> <!-- Affichage de l'image -->
                            </a>

                            <div class="card-badge {{ $property->statut == 'For Rent' ? 'green' : 'orange' }}">{{ $property->statut }}</div>

                            <div class="banner-actions">
                                <button class="banner-actions-btn">
                                    <ion-icon name="location"></ion-icon>
                                    <address>{{ $property->adresse }}</address>
                                </button>

                                <button class="banner-actions-btn">
                                    <ion-icon name="camera"></ion-icon>
                                    <span>{{ $property->Nbpiece }}</span> <!-- Nombre de pièces -->
                                </button>

                                <button class="banner-actions-btn">
                                    <ion-icon name="film"></ion-icon>
                                    <span>{{ $property->video ? '1' : '0' }}</span> <!-- Vérifier si la vidéo existe -->
                                </button>
                            </div>

                        </figure>

                        <div class="card-content">

                            <div class="card-price">
                                <strong>Frcfa {{ number_format($property->prix, 0, ',', ' ') }}</strong>/Mois
                            </div>

                            <h3 class="h3 card-title">
                                <a href="#">{{ $property->titre }}</a> <!-- Affichage du titre -->
                            </h3>

                            <p class="card-text">
                                {{ $property->description }} <!-- Description du bien -->
                            </p>

                           

                        </div>

                        <div class="card-footer">

                            <div class="card-author">
                                <figure class="author-avatar">
                                    <img src="{{ asset('storage/' . $property->proprietaire->avatar) }}" alt="{{ $property->proprietaire->nom }}" class="w-100">
                                </figure>

                                <div>
                                    <p class="author-name">
                                        <a href="#">{{ $property->proprietaire->prenom }} {{ $property->proprietaire->nom }}</a>

                                    </p>
                                    <p class="author-title">Proprietaire</p>
                                </div>

                            </div>

                            <div class="card-footer-actions">
                                <button class="card-footer-actions-btn">
                                    <ion-icon name="resize-outline"></ion-icon>
                                </button>

                                <button class="card-footer-actions-btn">
                                    <ion-icon name="heart-outline"></ion-icon>
                                </button>

                                <button class="card-footer-actions-btn">
                                    <ion-icon name="add-circle-outline"></ion-icon>
                                </button>

                            </div>
                                                    <h3 class="h3 card-title">
                        </h3>
                        </div>

                    </div>
                    <p>
                      <a href="{{ route('property.details', ['id' => $property->id]) }}" class="btn btn-primary">Détail</a>
                  </p>
                </li>
            @endforeach
        </ul>

        <!-- Pagination -->
        <div class="pagination">
            {{ $biens->links() }} <!-- Pagination pour les biens -->
        </div>

    </div>
</section>
<!-- Footer -->
@include('layout.footer')
<!-- 
  - #FOOTER
-->
<!-- 
  - custom js link
-->
<script src="./assets/js/script.js"></script>

<!-- 
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
