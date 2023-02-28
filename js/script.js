//variables des champs de l'authentification
const matriculeIn = document.getElementById('matricule');
const passwordIn = document.getElementById('password');
const invalidField = document.getElementById('invalid-field');
const formIndex = document.getElementById('form-index');


function verifChampIndexVide() {
    let boolMatricule = false;
    let boolPassword = false;
    let result = false;
    
    if(matriculeIn.value.trim() == "") {
        matriculeIn.style.borderColor = 'red';
        boolMatricule = true;
    }else {
        invalidField.innerHTML = "";
    }

    if(passwordIn.value.trim() == "") {
        boolPassword = true;
    }else {
        invalidField.innerHTML = "";
    }

    if(boolMatricule || boolPassword)
        result = true;
        
    return result;
}

formIndex.addEventListener('submit', (e) => {
    if(verifChampIndexVide()){
        e.preventDefault();
        invalidField.style.color = 'red';
        invalidField.innerHTML = "Veuillez remplir tout les champs !";
    }
})

