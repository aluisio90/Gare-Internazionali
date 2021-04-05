<?php 
    $db = new mysqli('localhost', 'root', 'pass', 'GARE_SPORTIVE');

    if( $db->connect_errno ){
        die("Impossibile stabilire una connesione");
    }

    $query = "INSERT INTO PARTECIPANO_S
              VALUES('".$_POST[ID_Sq]."','".$_POST[ID_G]."','".$_POST[Punteggio_Sq]."','".$_POST[Posizione_Sq].");";
    
    if( !$db->query( $query ) ){
        echo "<h2>Impossibile completare la registrazione...</h2>";
    }

    $db->close();