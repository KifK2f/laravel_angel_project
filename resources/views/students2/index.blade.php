<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
     <div class="container-fluid py-3">
        <header class="text-center">
            <h1 class="display-6">Liste des étudiants</h1>
        </header>
    </div>
     <table class="table table-bordered">
         <thead class="text-center opacity-75">
                 <th class="col-2">Nom</th>
                 <th class="col-2">Prénom</th>
                 <th class="col-2">Date de naissance</th>
                 <th class="col-2">Sexe</th>
                 <th class="col-2">Téléphone</th>
                 <!-- <th class="col-2">Actions</th> -->
         </thead>
         <tbody>
                 <tr>
                    <td>nhjhj</td>
                    <td>dffdjjfsjksjd</td>
                    <td>nhjhj</td>
                    <td>dffdjjfsjksjd</td>
                    <td>nhjhj</td>                
                 </tr>
         </tbody>
     </table>
    <script src="{{ asset('bootstrap-5.3.3-dist/js/bootstrap.js')"></script>
    
</body>
</html>
<!-- devops, infra, Docker
Crer les depot apprener a utiliser 
dockeriser notre projet de classe avec Laravel sail et mettre notre projet de classe sur Github
comment gerer le branches et commit (les bonnes pratiques) -->