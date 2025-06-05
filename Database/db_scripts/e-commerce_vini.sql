create database vinum_novum;
use vinum_novum;

-- Tabella Utente: registrazione e gestione degli utenti
CREATE TABLE vinum_novum.Utente (
    user_id INT PRIMARY key AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    data_registrazione DATETIME DEFAULT CURRENT_TIMESTAMP,
    ruolo ENUM('utente', 'amministratore') DEFAULT 'utente',
    indirizzo VARCHAR(255),
    citta VARCHAR(100),
    cap VARCHAR(10),
    paese VARCHAR(100),
    telefono VARCHAR(20)
);

-- Tabella Vino: contiene i dati anagrafici e le caratteristiche sensoriali
CREATE TABLE vinum_novum.Vino (
    vino_id INT PRIMARY key AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    anno YEAR NOT NULL,
    cantina VARCHAR(100),
    categoria ENUM('Rosso', 'Bianco', 'Spumante', 'Champagne') NOT NULL,
    prezzo_vendita DECIMAL(10,2) NOT NULL,
    punteggio_qualita INT CHECK (punteggio_qualita BETWEEN 0 AND 100),
    gusto INT CHECK (gusto BETWEEN 1 AND 5),
    salinita INT CHECK (salinita BETWEEN 1 AND 5),
    acidita INT CHECK (acidita BETWEEN 1 AND 5),
    forte INT CHECK (forte BETWEEN 1 AND 5),
    tannicita INT CHECK (tannicita BETWEEN 1 AND 5),
    immagine varchar(15)
);

-- Tabella per i vitigni
CREATE TABLE vinum_novum.Vitigno (
    vitigno_id INT PRIMARY key AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL UNIQUE
);

-- Tabella di associazione tra vini e vitigni (many-to-many)
CREATE TABLE vinum_novum.Vino_Vitigno (
    vino_id INT NOT NULL,
    vitigno_id INT NOT NULL,
    PRIMARY KEY (vino_id, vitigno_id),
    FOREIGN KEY (vino_id) REFERENCES vinum_novum.Vino(vino_id) ON DELETE CASCADE,
    FOREIGN KEY (vitigno_id) REFERENCES vinum_novum.Vitigno(vitigno_id) ON DELETE CASCADE
);

-- Tabella StoricoPrezzo: storico dei prezzi per ogni vino
CREATE TABLE vinum_novum.Storico_Prezzo (
    storico_id INT PRIMARY key AUTO_INCREMENT,
    vino_id INT NOT NULL,
    data_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    prezzo DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (vino_id) REFERENCES vinum_novum.Vino(vino_id) on delete cascade
);

-- Tabella Magazzino: gestione della giacenza e ordinabilità per ogni vino
CREATE TABLE vinum_novum.Magazzino (
    magazzino_id INT PRIMARY key AUTO_INCREMENT,
    vino_id INT NOT NULL,
    giacenza_interna INT NOT NULL,
    ordinabilita ENUM('Si','No','Forse') NOT NULL,
    FOREIGN KEY (vino_id) REFERENCES vinum_novum.Vino(vino_id) on delete cascade
);

-- Tabella per definire gli stati possibili degli ordini
CREATE TABLE vinum_novum.Stato_Ordine (
    stato_id INT PRIMARY key AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL UNIQUE,
    descrizione TEXT
);

-- Tabella Ordine: contiene i dati degli ordini effettuati dagli utenti
CREATE TABLE vinum_novum.Ordine (
    ordine_id INT PRIMARY key AUTO_INCREMENT,
    user_id INT NOT NULL,
    data_ordine DATETIME DEFAULT CURRENT_TIMESTAMP,
    totale_ordine DECIMAL(10,2) NOT NULL,
    stato_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES vinum_novum.Utente(user_id) on delete cascade,
    FOREIGN KEY (stato_id) REFERENCES vinum_novum.Stato_Ordine(stato_id)
);

-- Tabella per definire i livelli di abbonamento disponibili
CREATE TABLE vinum_novum.Livello_Abbonamento (
    livello_id INT PRIMARY key AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descrizione TEXT,
    prezzo DECIMAL(10,2) NOT NULL,
    numero_bottiglie INT NOT NULL,
    frequenza_giorni INT NOT NULL DEFAULT 30,
    attivo BOOLEAN DEFAULT TRUE
);

-- Tabella Abbonamento: gestione degli abbonamenti degli utenti
CREATE TABLE vinum_novum.Abbonamento (
    abbonamento_id INT PRIMARY key AUTO_INCREMENT,
    user_id INT NOT NULL,
    livello_id INT NOT NULL,
    prezzo_abbonamento DECIMAL(10,2) NOT NULL,
    data_inizio DATE,
    data_scadenza DATE,
    FOREIGN KEY (user_id) REFERENCES vinum_novum.Utente(user_id) on delete cascade,
    FOREIGN KEY (livello_id) REFERENCES vinum_novum.Livello_Abbonamento(livello_id)
);

-- Tabella Bundle: i bundle di vini associati agli abbonamenti oppure direttamente all'utente
CREATE TABLE vinum_novum.Bundle (
    bundle_id INT PRIMARY key AUTO_INCREMENT,
    abbonamento_id INT,
    user_id INT,
    tipologia ENUM('3','6') NOT NULL,
    data_creazione DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (abbonamento_id) REFERENCES vinum_novum.Abbonamento(abbonamento_id) on delete cascade,
    FOREIGN KEY (user_id) REFERENCES vinum_novum.Utente(user_id) on delete cascade
);

-- Tabella di associazione Bundle_Vino: relazione many-to-many tra Bundle e Vino
CREATE TABLE vinum_novum.Bundle_Vino (
    bundle_id INT NOT NULL,
    vino_id INT NOT NULL,
    PRIMARY KEY (bundle_id, vino_id),
    FOREIGN KEY (bundle_id) REFERENCES vinum_novum.Bundle(bundle_id) on delete cascade,
    FOREIGN KEY (vino_id) REFERENCES vinum_novum.Vino(vino_id) on delete cascade
);

-- Tabella per tenere traccia dei vini già inviati agli utenti (per evitare ripetizioni)
CREATE TABLE vinum_novum.Storico_Vini_Utente (
    storico_id INT PRIMARY key AUTO_INCREMENT,
    user_id INT NOT NULL,
    vino_id INT NOT NULL,
    data_invio DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES vinum_novum.Utente(user_id) ON DELETE CASCADE,
    FOREIGN KEY (vino_id) REFERENCES vinum_novum.Vino(vino_id) ON DELETE CASCADE,
    UNIQUE KEY (user_id, vino_id)
);

-- Tabella Recensione: gestione delle recensioni dei prodotti da parte degli utenti
CREATE TABLE vinum_novum.Recensione (
    recensione_id INT PRIMARY key AUTO_INCREMENT,
    user_id INT NOT NULL,
    vino_id INT NOT NULL,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    commento TEXT,
    data_recensione DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES vinum_novum.Utente(user_id) on delete cascade,
    FOREIGN KEY (vino_id) REFERENCES vinum_novum.Vino(vino_id) on delete cascade
);

-- Tabella Domanda: contiene il testo delle domande del questionario
CREATE TABLE vinum_novum.Questionario (
    domanda_id INT PRIMARY key AUTO_INCREMENT,
    testo_domanda TEXT NOT null,
    caratteristica ENUM('Amarezza', 'Tannicita', 'Dolcezza', 'Acidita', 'Corpo','Persistenza', 'Intensita', 'Equilibrio', 'Complessita','Aromaticita', 'Freschezza', 'Morbidezza', 'Effervescenza','Calore') NOT NULL
);

-- Tabella per le opzioni di risposta predefinite
CREATE TABLE vinum_novum.Opzioni_Risposta (
    opzione_id INT PRIMARY key AUTO_INCREMENT,
    domanda_id INT NOT NULL,
    testo_risposta TEXT NOT NULL,
    punteggio INT CHECK (punteggio BETWEEN 0 AND 5),
    FOREIGN KEY (domanda_id) REFERENCES vinum_novum.Questionario(domanda_id) ON DELETE CASCADE
);

-- Tabella RispostaQuestionario: risposte date dagli utenti al questionario
CREATE TABLE vinum_novum.Risposta_Questionario (
    risposta_id INT PRIMARY key AUTO_INCREMENT,
    user_id INT NOT NULL,
    domanda_id INT NOT NULL,
    opzione_scelta_id INT NOT NULL,
    data_risposta DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES vinum_novum.Utente(user_id) ON DELETE CASCADE,
    FOREIGN KEY (domanda_id) REFERENCES vinum_novum.Questionario(domanda_id) ON DELETE CASCADE,
    FOREIGN KEY (opzione_scelta_id) REFERENCES vinum_novum.Opzioni_Risposta(opzione_id) ON DELETE CASCADE,
    UNIQUE KEY (user_id, domanda_id)
);

-- Tabella per il profilo di gusto dell'utente basato sul questionario
CREATE TABLE vinum_novum.Profilo_Gusto_Utente (
    profilo_id INT PRIMARY key AUTO_INCREMENT,
    user_id INT NOT NULL,
    gusto_preferito INT CHECK (gusto_preferito BETWEEN 1 AND 5),
    salinita_preferita INT CHECK (salinita_preferita BETWEEN 1 AND 5),
    acidita_preferita INT CHECK (acidita_preferita BETWEEN 1 AND 5),
    intensita_preferita INT CHECK (intensita_preferita BETWEEN 1 AND 5),
    tannicita_preferita INT CHECK (tannicita_preferita BETWEEN 1 AND 5),
    data_ultimo_aggiornamento DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES vinum_novum.Utente(user_id) ON DELETE CASCADE
);

-- Tabella Carrello: gestione del carrello utente
CREATE TABLE vinum_novum.Carrello (
    carrello_id INT PRIMARY key AUTO_INCREMENT,
    user_id INT NOT NULL,
    data_creazione DATETIME DEFAULT CURRENT_TIMESTAMP,
    data_ultimo_aggiornamento DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES vinum_novum.Utente(user_id) ON DELETE CASCADE
);

-- Tabella Carrello_Item: elementi nel carrello dell'utente
CREATE TABLE vinum_novum.Carrello_Item (
    item_id INT PRIMARY key AUTO_INCREMENT,
    carrello_id INT NOT NULL,
    vino_id INT NOT NULL,
    quantita INT NOT NULL DEFAULT 1,
    FOREIGN KEY (carrello_id) REFERENCES vinum_novum.Carrello(carrello_id) ON DELETE CASCADE,
    FOREIGN KEY (vino_id) REFERENCES vinum_novum.Vino(vino_id) ON DELETE CASCADE,
    UNIQUE KEY (carrello_id, vino_id)
);

