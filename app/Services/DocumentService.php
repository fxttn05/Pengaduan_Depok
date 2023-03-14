<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DocumentService
{
    public function __construct(Document $document)
    {
        $this->document = $document;
    }
    
    public function handleGetAllDocument()
    {
        $p = $this->document->get();
        return $p;
    }
}