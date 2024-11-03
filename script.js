function togglePassword() {
    const passwordInput = document.getElementById('mdp');
    const IconOeil = document.getElementById('toggleEye');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        IconOeil.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        IconOeil.classList.replace('fa-eye-slash', 'fa-eye');
    }
}


function AffichageModif() {
	//Récup la valeur de id mdp
    const password = document.getElementById('mdp').value;
    /* Lettre MAJUSCULE */
    Verifcondition(password, 'LettreMaj', /[A-Z]/); 
    /* Caractère Spéciaux */
    Verifcondition(password, 'CaracSpeciaux', /[!@#$%^&*()\-_=+]/);
    /* Nombre 0 à 9 */ 
    Verifcondition(password, 'Nbx', /[0-9]/); 
    /* Caractère MINIMUM ici 12 */
    Verifcondition(password, 'CaracMin', /.{12,}/); 
}

function Verifcondition(password, elementId, regex) {
    const element = document.getElementById(elementId);
    const validIcon = element.querySelector('.fa-check');
    const invalidIcon = element.querySelector('.fa-times');
    if (regex.test(password)) {
        validIcon.style.display = 'inline';
        invalidIcon.style.display = 'none';
    } else {
        validIcon.style.display = 'none';
        invalidIcon.style.display = 'inline';
    }
}



function ApparitionBTN() {
    const bouton = document.getElementById('btn');

    const majusculeValide = document.getElementById('LettreMaj').querySelector('.fa-check').style.display === 'inline';
    const caractereSpecialValide = document.getElementById('CaracSpeciaux').querySelector('.fa-check').style.display === 'inline';
    const nombreValide = document.getElementById('Nbx').querySelector('.fa-check').style.display === 'inline';
    const longueurValide = document.getElementById('CaracMin').querySelector('.fa-check').style.display === 'inline';

    console.log("Majuscule valide:", majusculeValide);
    console.log("Caractère spécial valide:", caractereSpecialValide);
    console.log("Nombre valide:", nombreValide);
    console.log("Longueur valide:", longueurValide);

    if (majusculeValide && caractereSpecialValide && nombreValide && longueurValide) {
        bouton.style.display = "inline";
    } else {
        bouton.style.display = "none";
    }
}

document.getElementById('mdp').addEventListener('input', ApparitionBTN);
