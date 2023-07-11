<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Patient Signup</title>
      <link rel="stylesheet" href="{{asset('css/regiteStyle.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="container">
         <header> Inscription des patients</header>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Nom
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Birth
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form action="#">
               <div class="page slide-page">
                  <div class="title">
                     Informations de base:
                  </div>
                  <div class="field">
                     <div class="label">
                       Nom
                     </div>
                     <input type="text" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Prénom
                     </div>
                     <input type="text" required>
                  </div>
                  <div class="field">
                     <button class="firstNext next">Suivant</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Contact Info:
                  </div>
                  <div class="field">
                     <div class="label">
                        Address
                     </div>
                     <input type="text" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Numéro de téléphone
                     </div>
                     <input type="Number" required>
                  </div>
                  <div class="field btns">
                     <button class="prev-1 prev">Précédent</button>
                     <button class="next-1 next">Suivant</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Naissance et Groupe:
                  </div>
                  <div class="field">
                     <div class="label" >
                        Age
                     </div>
                     <input type="text" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Groupe Sang
                     </div>
                     <select>
                        <option>O+</option>
                        <option>O-</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                     </select>
                  </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Précédent</button>
                     <button class="next-2 next">Suivant</button>
                  </div>
               </div>
               <div class="page">
                  <div class="title">
                     Login Details:
                  </div>
                  <div class="field">
                     <div class="label">
                        Nom d'utilisateur
                     </div>
                     <input type="text" required>
                  </div>
                  <div class="field">
                     <div class="label">
                        Mot de passe
                     </div>
                     <input type="password" required>
                  </div>
                  <div class="field btns">
                     <button class="prev-3 prev">Précédent</button>
                     <button class="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script src="{{asset('js/index.js')}}"></script>
   </body>
</html>
