<form action="{{route('students.store')}}" method="post"> <!--On peut mettre un DELETE ou d'autres verbes HTTP-->
    @csrf
    <h1>Formulaire de creation d'un Etudiant</h1>
   
    <fieldset>
        <br>
        <fieldset>
            <label for="name">Nom : </label>
            <input type="text" name="name" id="" placeholder="Veuillez entrer votre nom" required>
        </fieldset>
        <br>
        <fieldset>
            <label for="prenom">Prénom : </label>
            <input type="text" name="firstname" id="" placeholder="Veuillez entrer votre prenom" required>
        </fieldset>
        <br>
        <fieldset> 
            <label for="sex">Sexe : </label>
            <select name="sex" id="sex">
                <option value="M" selected>Mascullin</option>
                <option value="F">Feminin</option>
            </select>
        </fieldset>
        <br>
        <fieldset>
            <label for="tel">Telephone : </label>
            <input type="tel" name="phone" id="" placeholder="Veuillez entrer votre numero de telephone" required> 
        </fieldset>
        <br>
        <input type="submit" value="Valider">
        <input type="reset" value="Annuler">
    </fieldset>
    
</form>