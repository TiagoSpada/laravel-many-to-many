## giorno 1 consegna:

Ciao ragazzi,
creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti.
Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere.
Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando SASS.
Descrizione:
Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto usando laravel breeze per utilizzare il sistema di autenticazione.
Trovate sulla mia repo github il progetto con tutte le indicazioni per creare un vostro template, partendo da un progetto laravel 10 pulito:
Seguite le istruzioni del README:
https://github.com/taniot/laravel-auth-classe126
Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:

1. Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office
2. Creazione del modello Project con relativa migrazione, seeder, controller e rotte
   _Bonus_
   Per la parte di back-office creiamo un resource controller Admin\ProjectController per gestire tutte le operazioni CRUD dei progetti
   Implementiamo la validazione dei dati dei Progetti nelle operazioni CRUD che lo richiedono usando due form requests.

## giorno 2 consegna:

Ciao ragazzi,
continuate con l'esercitazione cominciata ieri - stessa repository e portate a conclusione le CRUD per la gestione dei progetti.
nome repo: laravel-auth
Bonus:
provate a modificare il comportamento di default di laravel creando un campo SLUG per ogni progetto e riferendovi a quello per le operazioni di EDIT, SHOW, CREATE, DELETE;
create una versione pubblica dei vostri progetti creando un controller Guest\ProjectController
Buon lavoro e buon weekend!

## giorno 3 consegna (relazione one-to-many):

Ciao ragazzi,
Esercizio di oggi: Laravel Boolfolio - Project Typology
nome repo: laravel-one-to-many
Continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Type. Questa entità rappresenta la tipologia di progetto ed è in relazione one to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

-   [x] creare la migration per la tabella types
-   [x] creare il model Type
-   [x] creare la migration di modifica per la tabella projects per aggiungere la chiave esterna
-   [x] aggiungere ai model Type e Project i metodi per definire la relazione one to many
-   [x] visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente
-   [x] permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto
-   [x] gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione
-   Bonus 1:
-   -   [] creare il seeder per il model Type.
-   Bonus 2:
-   -   [] aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.
-   -   [] Buon lavoro e buon divertimento!

## relazione many to many (giorno 1)

Ciao ragazzi,
Esercizio di oggi: Laravel Boolfolio - Project Technology
nome repo: laravel-many-to-many
Continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Technology.
Questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:

-   [x] creare la migration per la tabella technologies
-   [x] creare il model Technology
-   [x] creare la migration per la tabella pivot project_technology
-   [x] aggiungere ai model Technology e Project i metodi per definire la relazione many to many
-   [x] visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti
-   Bonus 1:
-   -   [x] creare il seeder per il model Technology.
-   Bonus 2:
-   -   [] aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.
-   -   [] Buon lavoro e buon divertimento!

## relazione many to many (giorno 2)

Ciao ragazzi,
Esercizio di oggi: Laravel Boolfolio - Project Technology
nome repo: laravel-many-to-many
Continuiamo a lavorare sul codice di ieri, stessa repo.
I task sono:

-   [x] permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto
-   [x] gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione
-   [x] eliminare opportunamente le relazioni alla cancellazione del progetto/technology

Buon lavoro e buon divertimento!
A lunedì!
