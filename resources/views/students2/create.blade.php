<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout des étudiants</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
     <div class="container-fluid py-3">
        <header class="text-center">
            <h1 class="display-6">Ajouter un étudiant</h1>
        </header>
    </div>
    <section class="container w-50 text-light p-2">
     <form class="row g-3 p-3">
         <div class="col-md-12">
             <label for="nom" class="form-label text-black">Nom</label>
             <input type="text" class="form-control" id="nom" name="nom" required>
           </div>
           <div class="col-md-12">
             <label for="prenom" class="form-label text-black">Prénom</label>
             <input type="text" class="form-control" id="prenom" name="prenom" required>
           </div>
           <div class="col-md-6">
             <label for="datenaiss" class="form-label text-black">Date de naissance</label>
             <input type="date" class="form-control" id="datenaiss" name="datenaiss" required>
           </div>
         <div class="col-md-6">
           <label for="sexe" class="form-label text-black">Sexe</label>
           <select id="sexe" class="form-select text-black">
             <option selected>Masculin</option>
             <option>Féminin</option>
           </select>
         </div>
         <div class="col-md-12">
            <label for="telephone" class="form-label text-black">Télephone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required>
          </div>
         </div>
         <div class="col-12 mt-5">
           <button type="submit" class="btn btn-primary">Ajouter</button>
         </div>
       </form>
    <!-- </section> -->
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.js')"></script>
    
</body>
</html>