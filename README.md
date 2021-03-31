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
