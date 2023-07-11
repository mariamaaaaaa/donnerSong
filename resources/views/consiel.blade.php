<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Filterable Image Gallery Bootstrap | CodingNepal</title>
    <link rel="stylesheet" href="{{asset('css/conseilStyle.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="script.js" defer></script>
  </head>
  <body>
    <div class="container">
      <!-- Images Filter Buttons Section -->
      <div class="row mt-5" id="filter-buttons">
        <div class="col-12">
          <button class="btn mb-2 me-1 active" data-filter="all">precedent</button>
          <button class="btn mb-2 mx-1" data-filter="nature">Next</button>
          
        </div>
      </div>

      <!-- Filterable Images / Cards Section -->
      <div class="row px-2 mt-4 gap-3" id="filterable-cards">
        <div class="card p-0" >
          <img src="{{asset('img/O+.png')}}" alt="img">
          <div class="card-body">
            <p class="card-text">vous pouvez donner du sang à A+, AB+,B+ et O+
                vous pouvez recevoir du sang de O+et O-</p>
          </div>
        </div>
        <div class="card p-0" >
          <img src="{{asset('img/o-.png')}}" alt="img">
          <div class="card-body">
            <p class="card-text">Les donneurs de groupe sanguin O- 
                sont des donneurs universels dont les dons peuvent être donnés à 
                des personnes de tous les groupes sanguins.</p>
          </div>
        </div>
        <div class="card p-0" >
          <img src="{{asset('img/A+.png')}}" alt="img">
          <div class="card-body">
            <p class="card-text">vous pouvez donner du sang à A+ et AB+
                             vous pouvez recevoir du sang de A+, A- et O-</p>
          </div>
        </div>
        <div class="card p-0" >
          <img src="{{asset('img/A-.png')}}" alt="img">
          <div class="card-body">
            <p class="card-text">vous pouvez donner du sang à A+,A-,AB- et AB+
                vous pouvez recevoir du sang de A- et O-</p>
          </div>
        </div>
        <div class="card p-0" data-name="cars">
          <img src="{{asset('img/BloodB.png')}}" alt="img">
          <div class="card-body">
            <p class="card-text">vous pouvez donner du sang à B+ et AB+
                vous pouvez recevoir du sang de B+, B-, O+ et O-</p>
          </div>
        </div>
        <div class="card p-0" >
          <img src="{{asset('img/B-.png')}}" alt="img">
          <div class="card-body">
            <p class="card-text">vous pouvez donner du sang à B+, B-, AB- et AB+
                vous pouvez recevoir du sang de B- et O-</p>
          </div>
        </div>
        <div class="card p-0" >
          <img src="{{asset('img/AB+.png')}}" alt="img">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
        <div class="card p-0" >
          <img src="{{asset('img/AB-.png')}}" alt="img">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor..</p>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>