//Variables des champs de la recuperation du password
const matriculeRecup = document.getElementById('matricule-recup');
const nomRecup = document.getElementById('nom-recup');
const datenaissanceRecup = document.getElementById('datenaissance-recup');
const invalidFieldRecup = document.getElementById('invalid-field-recup');
const fgtPwd = document.getElementById('fgt-pwd');
const formRecup = document.getElementById('form-recup');

fgtPwd.hidden = true;

function verifChampRecupVide() {
    let boolMatriculeRecup = false;
    let boolNameRecup = false;
    let boolDatenaissance = false;
    let resultRecup = false;

    if(matriculeRecup.value.trim() == "") {
        matriculeRecup.style.borderColor.valueOf('red');
        boolMatriculeRecup = true;
    }else {
        invalidFieldRecup.innerHTML = "";
    }

    if(nomRecup.value.trim() == "") {
        boolNameRecup = true;
    }else {
        invalidFieldRecup.innerHTML = "";
    }

    if(datenaissanceRecup.value.trim() == "") {
        boolDatenaissance = true;
    }else {
        invalidFieldRecup.innerHTML = "";
    }

    if(boolMatriculeRecup || boolNameRecup || boolDatenaissance)
        resultRecup = true;
        
    return resultRecup;
}

formRecup.addEventListener('submit', (e) => {
    if(verifChampRecupVide()){
        e.preventDefault();
        invalidFieldRecup.style.color = 'red';
        invalidFieldRecup.innerHTML = "Veuillez remplir tout les champs !";
    }
    else{
        e.preventDefault();
        fgtPwd.hidden = false;
    }
})