<?php 

    $db = new mysqli('localhost', 'root', 'pass', 'GARE_INTERNAZIONALI');

    if($db->connect_errno){
        die("Impossibile conettersi al db");
    }

    $query = " SELECT * FROM ATLETI, SQUADRE, PARTECIPANO_A, PARTECIPANO_S, GARE
               WHERE ATLETI.ID_A = PARTECIPANO_A.ID_A AND SQUADRE.ID_Sq = PARTECIPANO_S.ID_Sq AND
               PARTECIPANO_A.ID_G = GARE.ID_G AND PARTECIPANO_S.ID_G = GARE.ID_G
               GROUP BY GARE.Nome_G;";

    if(! $r_query = $db->query($query))
		die ("La query non può essere eseguita");
	else{
		/*
		  Se la query va a buon fine restitusce un oggetto che 
		  rappresenta il risultato, sui cui è possibile applicare
		  iterazioni per estrarre i valori contenuti nell'oggetto
		*/

		echo "<table style= \"border-color: black black black black ; border-style: double;border-width:10px; \">";
		echo "<header><td>Gara </td><td>Nome Atleta</td><td>Cognome Atleta</td><td>Posizione</td><td>Squadra di Appartenenza</td></header>";

			while ($row = $r_query->fetch_assoc() ){
				echo "<tr>";
				echo "<td>".$row['Nome_G']."</td><td>".$row['Nome_A']."</td><td>".$row['Cognome_A']."</td><td>".$row['Posizione']."</td><td>".$row['Nome_Sq']."</td> ";

				echo "</tr>";
			}
		echo "</table>";
		
		
	}

?>