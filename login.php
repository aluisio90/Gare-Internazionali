<?php
    $db= new mysqli('localhost', 'root', 'pass', 'GARE_INTERNAZIONALI');

    if( $db->connect_errno ){
        die("Impossibile verificare i dati immessi, Database inacessibile");
    }

    $query = "  SELECT * 
                FROM UTENTI
                 WHERE UTENTI.Username = '$_POST[username]' AND UTENTI.Password = '$_POST[password]';";

    if ( !$utente = $db->query( $query )  ) {
        echo "Impossibile verificare i dat immessi, errore generico";
        echo $query;
    }
    else
    {
        $row = $utente->fetch_array();
        if( $row[Username] == '' || $row[Password] == '' ){
            echo "Utente non registrato, impossibile accedere al servizio, registrarsi o cambiare credenziali";
            echo "<form action= 'index.html'>
                    <input type= 'submit' value= 'Riprova'>
                  </form>"; 
        }
        else
        {
            if ($row[Privileggi] == 0){
                echo "<h1>Le credenziali immesse sono valide: accesso come <b>UTENTE</b></h1>
                    <form action = 'classifica.php'>
                        <input type= submit value= 'Procedi'>
                    </form>
                    <form action = 'index.html'>
                        <input type= submit value= 'Indietro'>
                    </form>
                    ";
            }
            else
            {
                echo "<h1>Le credenziali immesse sono valide: accesso come <b>ORGANIZZATORE</b></h1>
                            <h2 style =  'color:red' ><i>Attenzione, accesso con alto gradi di privileggi</i></h2>
                    <form action = 'ControlPanel/ControlPanel.html'>
                        <input type= submit value= 'Procedi'>
                    </form>
                    <form action 'index.html'>
                        <input type= submit value= 'Indietro'>
                    </form>
                    ";
            }
        }
    }

    $db->close();