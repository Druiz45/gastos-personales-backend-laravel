<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\DocumentTypeResource;
use App\Models\DocumentType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DocumentTypeController extends Controller
{
    /**
     * Obtener todos los tipos de documento.
     */
    public function index(): JsonResponse | AnonymousResourceCollection
    {
        $documentTypes = DocumentType::orderBy('name', 'asc')->get();

        return DocumentTypeResource::collection($documentTypes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentType $documentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentType $documentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentType $documentType)
    {
        //
    }
}
