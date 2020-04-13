<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/skole.png" width="1100" height="500">
      <div class="carousel-caption">
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/barn.png" width="1100" height="500">
      <div class="carousel-caption">
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/sol.png" width="1100" height="500">
      <div class="carousel-caption">
        <p></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>  

  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase bg invisible">#</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img src="images/enviro.png" width="150" height="150">
          </span>
          <h4 class="service-heading">Miljøvennlig</h4>
          <p class="text-muted">Norges første null utslipp skole</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img src="images/smart.png" width="150" height="150">
          </span>
          <h4 class="service-heading">Innovativ</h4>
          <p class="text-muted">Med innovativt, moderne og nyskapende design ønsker vi å gjøre Røa smart-skole unik </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <img src="images/bok.png" width="150" height="150">
          </span>
          <h4 class="service-heading">Fremtidsrettet</h4>
          <p class="text-muted">Vi strever for å skape en fremtidsrettet skole, tilpasset dagens samfunn og elever</p>
        </div>
      </div>
    </div>
  </section>

<?php include('footer.php');?>
