<?php

// $password = readline("Inserisci la tua password : ");

// funzione per vedere se ha minimo 8 caratteri
function checkMinChar($psw){
   
    if(strlen($psw) >= 8){
        return true;
    }

    return  false;   
}
// funzione per vedere se ha almeno un numero
function checkNumber($psw){
    for ($i=0; $i < strlen($psw); $i++) { 
     if(is_numeric($psw[$i])){
        return true;
     }
    }
    return false;
    } 


// Funzione per vedere se c'è almeno un carattere Maiusc
function checkMaiusc($psw){
    for ($i=0; $i < strlen($psw); $i++) { 
        if(ctype_upper($psw[$i])){
           return true;
        }
    }
    return false;
}
// Funzione globale del check password
function checkPassword($psw){
    $check = true;
    if(checkMinChar($psw) && checkNumber($psw)  && checkMaiusc($psw)){
        echo "La password inserita è corretta!\n";
        $check = true;
    }else{
        echo "La Password non è valida!\n";
        if(!checkMinChar($psw)){echo "La password deve avere almeno 8 caratteri\n";}
        if(!checkNumber($psw)){ echo "La Password deve contenere almeno un numero\n";}
        if(!checkMaiusc($psw)){ echo "La Password deve contenere almeno una lettera Maiuscola\n";}
        $check = false;
        // $password = readline("Inserisci la tua password : ");
        
    }
    return $check;
}

// checkPassword($password);

do {
$password = readline("Inserisci la tua password : ");

} while (!checkPassword($password));