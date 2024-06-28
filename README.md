Ciao ragazzi,
continuiamo a lavorare sul progetto dei giorni scorsi e aggiungiamo una nuova entità Technology. Questa entità rappresenta le tecnologie utilizzate ed è in relazione many to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto nelle lezioni dei giorni scorsi:
- creare la migration per la tabella technologies
- creare il model Technology
- creare la migration per la tabella pivot project_technology
- aggiungere ai model Technology e Project i metodi per definire la relazione many to many
- visualizzare nella pagina di dettaglio di un progetto le tecnologie utilizzate, se presenti
Bonus:
creare il seeder per il model Technology.

Ciao ragazzi,
continuiamo a lavorare sul progetto dei giorni scorsi nella stessa repository di ieri e aggiungiamo nelle operazioni CRUD del Progetto la possibilità di associare delle tecnologie.
Quindi dovete implemetare seguenti funzionalità:
- permettere all’utente di associare le tecnologie nella pagina di creazione e modifica di un progetto
- gestire il salvataggio dell’associazione progetto-tecnologie con opportune regole di validazione
Bonus:
aggiungere le operazioni CRUD per il model Technology, in modo da gestire le tecnologie utilizzate nei progetti direttamente dal pannello di amministrazione.