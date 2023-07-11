<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>affichage</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <div class="main-card">
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/"> <img src="{{asset('img/jaja.jpg')}}" alt=""></a>
           
           </div>
           <div class="details">
             <div class="name">jaja</div>
             <div class="info">tanger</div>
             <div class="number">06235899</div>
           </div>
           <div class="icons">
             <i ><img src="{{asset('img/BloodB.png')}}" alt=""></i>
              
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="">
                <img src="{{asset('img/tata.jpeg')}}" alt="">
            </a>
            
           </div>
           <div class="details">
             <div class="name">tata</div>
             <div class="info">tetouan</div>
             <div class="number">06235899</div>
           </div>
           <div class="icons">
             <i ><img src="{{asset('img/o-.png')}}" alt=""></i>
              
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="" alt="">
           </div>
           <div class="details">
             <div class="name">mohammed</div>
             <div class="info">hociema</div>
             <div class="number">06235899</div>
           </div>
           <div class="icons">
             <i ><img src="{{asset('img/B-.png')}}" alt=""></i>
              
           </div>
         </div>
        </div>
      </div>
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="">
                <img src="" alt="">
            </a>
             
           </div>
           <div class="details">
             <div class="name">hakimi</div>
             <div class="info">9sa kbir</div>
             <div class="number">06235899</div>
           </div>
           <div class="icons">
             <i ><img src="{{asset('img/BloodB.png')}}" alt=""></i>
              
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            {{-- doit ajouter lien de page d'information  --}}
            <a href=""><img src="" alt=""></a>
           </div>
           <div class="details">
             <div class="name">messoudi</div>
             <div class="info">larach</div>
             <div class="number">06235899</div>
           </div>
           <div class="icons">
             <i ><img src="{{asset('img/BloodB.png')}}" alt=""></i>
              
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
            <a href="">  
                <img src="" alt="">
            </a>
             
           </div>
           <div class="details">
             <div class="name">toto</div>
             <div class="info">marakech</div>
             <div class="number">06235899</div>
           </div>
           <div class="icons">
             <i ><img src="{{asset('img/BloodB.png')}}" alt=""></i>
              
           </div>
         </div>
        </div>
      </div>
    </div>
    <div class="button">
      <label for="one" class=" active one"></label>
      <label for="two" class="two"></label>
    </div>
  </div>
</body>
</html>