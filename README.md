# Gare-Internazionali
---------------------
Progetto DB per la gestione dei risultati di una serie di gare internazionali svolte durante un evento sportivo

## Schemi del Database
---------------------
|**Schema ER del nostro Database**|
|:-----------------------------:|
![Schema ER](source/garesportive.jpg)

|**Schema Logico del nostro Database**|
|-----------------------------------|
**ATLETI**( **ID_A**,Nome_A,Cognome_A,Data_N,Istituto,Nazionalita_A,*ID_Sq*)
**SQUADRE**( **ID_Sq**,Nazionalita_Sq,Nome_Sq)
**GARE**( **ID_G**,Nome_G,Tipologia,Punteggio_Max,ID_Se,*ID_F*)
**SEDI**( **ID_Se**,Nome_Se,Città,Nazione)
**FASI**( **ID_F**,Nome_F)
**PARTECIPANO_S**( ***ID_Sq***, ***ID_G***,Punteggio_Sq,Posizione_Sq)
**PARTECIPANO_A**( ***ID_A***,***ID_G***,Punteggio_A,Posizione_A)

## Concept del Sito
-------------------

![Concept sito](source/concept.jpg)


|Sintesi|
|-------|
Si vuole realizzare un sito web che permetta di visualizzare la classifica degli atleti che partecipano a vari gare all'interno di un campionato nazionale giocato in più luoghi nel mondo, inoltre sempre tramite il sito web gli organizzati potranno modificare i dati relativi agli atleti(e le relative squadre) partecipanti e nello specifico gli sarà permesso di elimina o aggiornare i dati degli atleti o delle squadre già presenti oppure di inserire nuovi atleti e/o squadre.

|Index|
|-----|
La prima pagina del sito Web che viene visualizzata dall'utente è quella del login, file ***index.html***, che permette di accedere ai dati della gara previo inserimento di credenziali di accesso; in base alle credenziali si distinguono due tipologie di utenti distinte:<br> <br><li>**Organizzatore** può visualizzare i dati del database anche modificarli;<br>  <li>**l'utente** che può solo vedere le informazioni relativi alle classifiche dei partecipante alle varie gare del campionato;<br><br>Se un utente non risulta registrato alla piattaforma può registrarsi tramite un form alla piattaforma.<br><br>**File di Riferimento**<br><br><li>[index.html](index.html) - [login.php](login.php)<li>[registra.html](registra.html) - [registra.php](registra.php)

|Classifiche|
|-----------|
Il file ***classifica.html*** implementa la pagina web che mostra le classifiche dei giocatori nelle varie gare abbinata a uno script php(***classifica.php***) che ha il compito di reperire i dati dalla base dati per popolare la pagina html. La pagina classifiche è riservata agli utenti che non posseggono particolari credenzialità.<br><br>**File di Riferimento**<br><br><li>[classifica.html](classifica.php) - [classifica.php](classifica.php)

|Panello di Controllo|
|--------------------|
La pagina panello di controllo rappresenta il *core* della piattaforma per mezzo di cui i soli organizzatori possono modificare i dati in merito agli atleti. Il file ***ControlPanel.html*** è costituito da una barra di navigazione (panello di sinistra) e un panello principale dove saranno visualizzate le pagine selezionate per mezzo del menu di sinistra. Nel riquadro Principale sono mostrati il file ***elimina.html*** che permette l'eliminazione dei partecipanti alle gare, il file ***ricerca.html*** che permette di compiere ricerche più approfondite sui dati del database in base ai dati dei partecipanti che a quelli delle gare, il file ***aggiungi.html*** per inserire nuovi partecipanti, il file ***modifica.html*** per aggiornare le informazioni sui partecipanti alle gare.<br><br>**File di Riferimento**<br><br><li>[ControlPanel.html](ControlPanel.html)<li>[elimina.html](elimina.html) - [elimina.php](elimina.php)<li>[ricerca.html](ricerca.js)<li>[aggiungi.html](aggiungi.html) - [aggiungi.php](aggiungi.php)<li>[modifica.html](modifica.html) - [modifica.php](modifica.php)

|SQL|File|
|---|----|
Script SQL per la gestione del database:|[create.sql](SQL/create.sql)
|...|...| 

<br>

## Ilustrazione
----------------
