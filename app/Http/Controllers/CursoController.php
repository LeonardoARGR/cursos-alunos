<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CursoController extends Controller
{
    // link ou endereço da API
    private $urlApi = '';

    public function index() {
        $response = Http::get($this->urlApi);
        $data = $response->json();
        return view('cursos.index', ['cursos' => $data['data'] ?? [], 'message' => $data['message'] ?? '']);
    }
}
