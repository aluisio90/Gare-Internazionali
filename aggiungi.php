<?php
  $db = new mysqli('192.168.1.1','root', 'pass', 'GARE_INTERNAZIONALI' );

  if(!$db->connect_errno){
    die("<h1>Connesione fallita</h1>");
  }

  $query = "INSERT INTO ATLETI VALUES(".$_POST['ID_A'].','.$_POST['Nome_A'].','.$_POST['Cognome_A'].','.$_POST['Data_N'].','.$_POST['Istituto'].','.$_POST['Nazionalità_A'].','.$_POST['ID_Sq'].');';

  if( $db->query( $query ) )
    echo "Registrazione Eseguita";
  else
    echo "Errore inaspettato, impossibile registrare nuovo utente";

  $db->close();

?>
