<?php
// App/Controller/API/VinoController.php
namespace App\Controller\API;

use App\Model\Vino;

class VinoController {
    private $model;

    public function __construct() {
        $this->model = new Vino();
    }

    // GET /api/vini
    public function index() {
        $vini = $this->model->getAll();
        $this->sendJsonResponse($vini);
    }

    // GET /api/vini/{id}
    public function show($id) {
        $vino = $this->model->getById($id);

        if (!$vino) {
            $this->sendJsonResponse(['error' => 'Vino non trovato'], 404);
            return;
        }

        $this->sendJsonResponse($vino);
    }

    // POST /api/vini
    public function store() {
        // Ottieni i dati dalla richiesta
        $data = json_decode(file_get_contents('php://input'), true);

        // Validazione dei dati
        if (!$this->validateVinoData($data)) {
            $this->sendJsonResponse(['error' => 'Dati non validi'], 400);
            return;
        }

        // Crea un nuovo vino
        $id = $this->model->create($data);

        $this->sendJsonResponse(['id' => $id, 'message' => 'Vino creato con successo'], 201);
    }

    // PUT /api/vini/{id}
    public function update($id) {
        // Verifica che il vino esista
        $vino = $this->model->getById($id);

        if (!$vino) {
            $this->sendJsonResponse(['error' => 'Vino non trovato'], 404);
            return;
        }

        // Ottieni i dati dalla richiesta
        $data = json_decode(file_get_contents('php://input'), true);

        // Validazione dei dati
        if (!$this->validateVinoData($data)) {
            $this->sendJsonResponse(['error' => 'Dati non validi'], 400);
            return;
        }

        // Aggiorna il vino
        $this->model->update($id, $data);

        $this->sendJsonResponse(['message' => 'Vino aggiornato con successo']);
    }

    // DELETE /api/vini/{id}
    public function destroy($id) {
        // Verifica che il vino esista
        $vino = $this->model->getById($id);

        if (!$vino) {
            $this->sendJsonResponse(['error' => 'Vino non trovato'], 404);
            return;
        }

        // Elimina il vino
        $this->model->delete($id);

        $this->sendJsonResponse(['message' => 'Vino eliminato con successo']);
    }

    private function validateVinoData($data) {
        // Implementa la validazione dei dati
        return isset($data['nome']) && isset($data['annata']) && isset($data['prezzo']);
    }

    private function sendJsonResponse($data, $statusCode = 200) {
        header('Content-Type: application/json');
        http_response_code($statusCode);
        echo json_encode($data);
    }
}