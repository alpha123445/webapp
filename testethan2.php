<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Détails du logement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="theme-color" content="#712cf9">
            <meta charset="utf-8">
<style>
        .seller-info {
            text-align: right;
        }

        .seller-info img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .property-info h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<body>

<div class="container mt-4">
    <h1>Détails du logement</h1>

    <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/800x500" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/700x400" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/1920x1080" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
        <div class="col-md-6">
            <div class="seller-info mt-3">
                <img src="https://via.placeholder.com/150" alt="Photo de profil">
                <h3>Nom du commercial</h3>
                <p>Inscrit Depuis : 2 mois</p>
            </div>
        </div>
    </div>

    <div class="property-info mt-4">
        <h2>Nom du logement</h2>
        <p>Nombre de pièces : 3 · Rue : Rue du Logement · Code postal : 12345 · Ville : Ville du Logement · Disponible Depuis : 2 mois</p>
        <h3>300€<h3>
    </div>

    <div class="mt-4">
        <h3>Description du logement</h3>
        <p>Description du logement...</p>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Pièces</h3>
            <ul class="list-group">
                <li class="list-group-item">Salon - Surface : 20m²</li>
                <li class="list-group-item">Chambre 1 - Surface : 15m²</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h3>Équipements</h3>
            <ul class="list-group">
                <li class="list-group-item">Cuisine équipée</li>
                <li class="list-group-item">WiFi</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
