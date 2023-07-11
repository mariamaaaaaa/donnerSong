<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="{{asset('css/donneurStyle.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
  <form method="POST" action="{{ route('storeDonneur') }}">
    @csrf
  <div class="container">
    <div class="title">Donneur</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom</span>
            <input type="text" name="nom" placeholder="Enter votre Nom" required>
          </div>
          <div class="input-box">
            <span class="details">Prénom</span>
            <input type="text" name="prenom" placeholder="Enter votre prenom" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" name="age" placeholder="Enter votre age" required>
          </div>
         
         
          <div class="input-box">
            <span class="details">groupe</span>
            <input list="mySelect" name="groupe" >
            <datalist id="mySelect">
                <option value="O+">
                <option value="O-">
                <option value="A+">
                <option value="A-">
                <option value="B+">
                <option value="B-">
                <option value="AB+">
                <option value="AB-">

               </datalist>
          </div>
          
          <div class="input-box">
            <span class="details">Ville</span>
            <input type="text" name="ville" placeholder="Enter votre Adresse" required>
          </div>
          <div class="input-box">
            <span class="details">Téléphone</span>
            <input type="text" name="tele" placeholder="Enter votre phone" required>
          </div>
          <div class="input-box">
            <span class="details">photo</span>
            <input type="file" name="photo" required  placeholder="choisir votre photo">
          </div>
          <div class="input-box">
            <span class="details">poid(kg)</span>
            <input type="text" name="poid" placeholder="Enter votre " required>
          </div>
          <div class="input-box">
            <span class="details">Votre dernier don date de moins de 8 semaines ou 4 
              semaines ou 2 semaines?</span>
            <input type="text" name="q1" required>
          </div>
          <div class="input-box">
            <span class="details">Avez-vous ressenti, dans les dernières semaines, une douleur thoracique ou 
              un essoufflement anormal à la suite d’un effort ?</span>
            <input type="text" name="q2" required>
          </div>
          <div class="input-box">
            <span class="details">Avez-vous déjà eu une transfusion de sang  ou une greffe d’organe ?</span>
            <input type="text" name="q3" required>
          </div>
        </div>
       

        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
  </form>
</body>

</html>
