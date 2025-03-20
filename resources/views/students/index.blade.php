<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des etudiants</h1>

    <div>
        <table border="1">
            <thead>                  
                <th>Nom</th>
                <th>Prenom</th>
                <th>Sexe</th>
                <th>Telephone</th>
            </thead>

           <tbody>
             @foreach($students as $student)
             <tr>
                 <td>{{ $student["nom"] }}</td>
                 <td>{{ $student["prenom"] }}</td>
                 <td>{{ $student["sexe"] }}</td>
                 <td>{{ $student["telephone"] }}</td>
             </tr>
             @endforeach
           </tbody>

        </table>
    </div>
    
</body>
</html>