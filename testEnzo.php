<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


<div class="card">
    <img src="https://www.icône.com/images/icones/3/0/entree-interdite.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
            content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text text-right"><small class="text-body-secondary text-right">Last updated 3 mins ago</small>
        </p>
    </div>
</div>


<?php
$this->accueil();
echo '<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
foreach ($annonces as $annonce) {
    echo '
        <div class="card">
            <img src="/images/placeholder.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $annonce['nom_logement'] . '</h5>
                <p class="card-text">' . $annonce['rue_logement'] . ' à ' . $annonce['ville_logement'] . ' - ' . $annonce['cp_logement'] . '</p>
                <button type="button" class="btn btn-primary">Modifier</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
                <p class="card-text"><small class="text-body-secondary">Ajouté il y a XXX temps</small></p>
            </div>
        </div>';
}
echo '
    </div>
</div>';
$this->footer();
?>

<?php
function error403(){
$this->accueil();

$this->footer();
}
?>


<?php
function mesReservations($id)
{
    $this->accueil();
    echo '<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
    foreach ($id as $commercial) {
        echo '<div class="card">
            <img src="/images/placeholder.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $commercial['nom_logement'] . '</h5>
                <p class="card-text">' . $commercial['rue_logement'] . ' à ' . $commercial['ville_logement'] . ' - ' . $commercial['cp_logement'] . '</p>
                <button type="button" class="btn btn-primary">Modifier</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
                <p class="card-text"><small class="text-body-secondary">Ajouté il y a XXX temps</small></p>
            </div>';
    }
}
?>