function verifMDP(mdp) {

if (mdp.value.length < 8) {
alert("Le mot de passe doit contenir au moins 8 caractères");
mdp.focus();
return false;
} else {
return true;
}

}


function validationnombre(check1){

var test =true;
if (!Number.isInteger(check1.value)){
alert("la quantité doit etre des chiffres");
check1.focus();
test=false;}
else{
test=true}
}


function validationconnexion(mdp1,mdp2,check) {

var test = true;
if (!verifMDP(mdp1)) {
test = false;
} else if (!verifMDP(mdp2)) {
test = false;
} else if (mdp1.value !== mdp2.value) {
alert("Mots de passe non conformes");
mdp1.focus();
test = false;
} else if (check.valu.length!=8) {
alert("le numéro de télephone doit contenir 8 chiffres exactement");
test = false;
}
return test;
}