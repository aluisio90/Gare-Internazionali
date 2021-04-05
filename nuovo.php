<?php 
    $user = new mysqli('localhost', 'root', 'pass', 'GARE_INTERNAZIONALI');

    if($user->connect_errno){
        die("Impossibile conettersi al database");

        $query = "INSERT INTO USER VALUES("."'$_POST[Username]',"."'$_POST[Password]');";
        echo $query;

        if( $user->query($query) ){
            echo "Registrazione Effettuata con successo";
        }
        else
            {
                echo "Errore Sconosciuto";
            }

        $user->close();
    }
    
?>