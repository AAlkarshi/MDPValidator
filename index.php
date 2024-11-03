<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">  
    <script src="script.js" defer></script>
    <script src="https://kit.fontawesome.com/b04d3e51a0.js" async></script>
    <title>Mot de passe Validator</title>
</head>

<body>      
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="display: flex; flex-direction: column; align-items: center; gap: 10px;">
        
        <!-- Partie mot de passe -->
        <div style="position: relative;">
            <i class="fa-solid fa-lock" 
            style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #888;"></i>

            <!-- oninput="AffichageModif()" signifie que 
                fonction JS AffichageModif() sera appelée chaque fois que le contenu du champ (<input>) est modifié 
            -->
            
            <input type="password" id="mdp" placeholder="Mot De Passe" 
            oninput="AffichageModif()">

            <i class="fa-regular fa-eye" id="toggleEye" onclick="togglePassword()"></i>
        </div>

        <!-- Liste des critères du mot de passe -->
        <div class="Validation">
            <p id="LettreMaj">
                <i class="fa fa-times" aria-hidden="true" style="color: red;"></i>
                <i class="fa fa-check" aria-hidden="true" style="display: none; color: #1FA055;"></i>
                <span> Majuscule </span>
            </p>

            <p id="CaracSpeciaux">
                <i class="fa fa-times" aria-hidden="true" style="color: red;"></i>
                <i class="fa fa-check" aria-hidden="true" style="display: none; color: #1FA055;"></i>
                <span> Caractère spécial </span>
            </p>

            <p id="Nbx">
                <i class="fa fa-times" aria-hidden="true" style="color: red;"></i>
                <i class="fa fa-check" aria-hidden="true" style="display: none; color: #1FA055;"></i>
                <span> Nombre </span>
            </p>

            <p id="CaracMin">
                <i class="fa fa-times" aria-hidden="true" style="color: red;"></i>
                <i class="fa fa-check" aria-hidden="true" style="display: none; color: #1FA055;"></i>
                <span> 12 caractères minimum </span>
            </p>
        </div>

            <div>
                <button id="btn"> 
                    Enregistrer votre Mot de Passe 
                </button>
            </div>
    </div>
</div>
</body>
</html>
