<?php 

    $db = new mysqli('localhost', 'root', 'pass', 'GARE_INTERNAZIONALI');

    if($db->connect_errno){
        die("Impossibile conettersi al db");
    }

    $query = " SELECT Nome_A, Cognome_A, Nome_G, Posizione_A, Punteggio_A, ID_Sq  
			   FROM ATLETI, GARE, PARTECIPANO_A
			   WHERE ATLETI.ID_A = PARTECIPANO_A.ID_A AND GARE.ID_G = PARTECIPANO_A.ID_G
			   GROUP BY Nome_G, ID_Sq
			   ORDER BY Posizione_A, Punteggio_A;";

    if(! $r_query = $db->query($query))
		die ("La query non può essere eseguita");
	else{
		/*
		  Se la query va a buon fine restitusce un oggetto che 
		  rappresenta il risultato, sui cui è possibile applicare
		  iterazioni per estrarre i valori contenuti nell'oggetto
		*/

		echo "<table style= \"border-color: black black black black ; border-style: double;border-width:10px; \">";
		echo "<header><td>Gara </td><td>Nome Atleta</td><td>Cognome Atleta</td><td>Posizione</td><td>Squadra di Appartenenza</td><td>Punteggio</td></header>";

			while ($row = $r_query->fetch_assoc() ){
				echo "<tr>";
				echo "<td>".$row['Nome_G']."</td><td>".$row['Nome_A']."</td><td>".$row['Cognome_A']."</td><td>".$row['Posizione_A']."</td><td>".$row['ID_Sq']."</td><td>".$row['Punteggio_A']."</td> ";

				echo "</tr>";
			}
		echo "</table>";
		
		
	}

?>