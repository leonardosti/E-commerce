create database cantina;
use cantina;

-- Tabella Utente: registrazione e gestione degli utenti
CREATE TABLE cantina.Utente (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    data_registrazione DATETIME DEFAULT CURRENT_TIMESTAMP,
    ruolo ENUM('utente', 'amministratore') DEFAULT 'utente'
);

-- Tabella Vino: contiene i dati anagrafici e le caratteristiche sensoriali
CREATE TABLE cantina.Vino (
    vino_id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    anno YEAR NOT NULL,
    cantina VARCHAR(100),
    vitigni VARCHAR(100),
    prezzo_vendita DECIMAL(10,2) NOT NULL,
    punteggio_qualita INT CHECK (punteggio_qualita BETWEEN 0 AND 100),
    gusto INT CHECK (gusto BETWEEN 1 AND 5),
    salinita INT CHECK (salinita BETWEEN 1 AND 5),
    acidita INT CHECK (acidita BETWEEN 1 AND 5),
    forte INT CHECK (forte BETWEEN 1 AND 5),
    tannicita INT CHECK (tannicita BETWEEN 1 AND 5)
);

-- Tabella StoricoPrezzo: storico dei prezzi per ogni vino (si può integrare con JSON esterno se richiesto)
CREATE TABLE cantina.StoricoPrezzo (
    storico_id INT AUTO_INCREMENT PRIMARY KEY,
    vino_id INT NOT NULL,
    data_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    prezzo DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (vino_id) REFERENCES cantina.Vino(vino_id) on delete cascade
);

-- Tabella Magazzino: gestione della giacenza e ordinabilità per ogni vino
CREATE TABLE cantina.Magazzino (
    magazzino_id INT AUTO_INCREMENT PRIMARY KEY,
    vino_id INT NOT NULL,
    giacenza_interna INT NOT NULL,
    ordinabilita ENUM('Si','No','Forse') NOT NULL,
    FOREIGN KEY (vino_id) REFERENCES cantina.Vino(vino_id) on delete cascade
);

-- Tabella Ordine: contiene i dati degli ordini effettuati dagli utenti
CREATE TABLE cantina.Ordine (
    ordine_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    data_ordine DATETIME DEFAULT CURRENT_TIMESTAMP,
    totale_ordine DECIMAL(10,2) NOT NULL,
    stato_ordine VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES cantina.Utente(user_id) on delete cascade
);

-- Tabella DettaglioOrdine: contiene i vini (o bottiglie) relativi ad ogni ordine
CREATE TABLE cantina.DettaglioOrdine (
    dettaglio_id INT AUTO_INCREMENT PRIMARY KEY,
    ordine_id INT NOT NULL,
    vino_id INT NOT NULL,
    quantita INT NOT NULL,
    prezzo_unitario DECIMAL(10,2) NOT NULL,
    -- Eventualmente, per distinguere annate diverse: annata_specifica YEAR,
    FOREIGN KEY (ordine_id) REFERENCES cantina.Ordine(ordine_id) on delete cascade,
    FOREIGN KEY (vino_id) REFERENCES cantina.Vino(vino_id) on delete cascade
);

-- Tabella Abbonamento: gestione degli abbonamenti degli utenti (3 livelli)
CREATE TABLE cantina.Abbonamento (
    abbonamento_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    livello ENUM('livello_1', 'livello_2', 'livello_3') NOT NULL,
    prezzo_abbonamento DECIMAL(10,2) NOT NULL,
    data_inizio DATE,
    data_scadenza DATE,
    FOREIGN KEY (user_id) REFERENCES cantina.Utente(user_id) on delete cascade
);

-- Tabella Bundle: i bundle di vini associati agli abbonamenti oppure direttamente all'utente (in base alla logica di composizione)
CREATE TABLE cantina.Bundle (
    bundle_id INT AUTO_INCREMENT PRIMARY KEY,
    abbonamento_id INT,
    user_id INT,
    tipologia ENUM('3','6') NOT NULL,
    data_creazione DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (abbonamento_id) REFERENCES cantina.Abbonamento(abbonamento_id) on delete cascade,
    FOREIGN KEY (user_id) REFERENCES cantina.Utente(user_id) on delete cascade
);

-- Tabella di associazione Bundle_Vino: relazione many-to-many tra Bundle e Vino
CREATE TABLE cantina.Bundle_Vino (
    bundle_id INT NOT NULL,
    vino_id INT NOT NULL,
    PRIMARY KEY (bundle_id, vino_id),
    FOREIGN KEY (bundle_id) REFERENCES cantina.Bundle(bundle_id) on delete cascade,
    FOREIGN KEY (vino_id) REFERENCES cantina.Vino(vino_id) on delete cascade
);

-- Tabella Recensione: gestione delle recensioni dei prodotti da parte degli utenti
CREATE TABLE cantina.Recensione (
    recensione_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    vino_id INT NOT NULL,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    commento TEXT,
    data_recensione DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES cantina.Utente(user_id) on delete cascade,
    FOREIGN KEY (vino_id) REFERENCES cantina.Vino(vino_id) on delete cascade
);

-- Tabella Domanda: contiene il testo delle domande del questionario
CREATE TABLE cantina.Questionario (
    domanda_id INT AUTO_INCREMENT PRIMARY KEY,
    testo_domanda TEXT NOT NULL
);

-- Tabella RispostaQuestionario: risposte date dagli utenti al questionario
CREATE TABLE cantina.RispostaQuestionario (
    risposta_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    domanda_id INT NOT NULL,
    punteggio_risposta INT CHECK (punteggio_risposta BETWEEN 1 AND 5),
    FOREIGN KEY (user_id) REFERENCES cantina.Utente(user_id) on delete cascade,
    FOREIGN KEY (domanda_id) REFERENCES cantina.Questionario(domanda_id) on delete cascade
);
