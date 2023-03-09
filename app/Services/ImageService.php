<?php

namespace App\Services;

use Carbon\Carbon;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ImageService
{
    public function __construct(Image $image)
    {
        $this->image = $image;
    }
    
    public function handleGetAllImage()
    {
        $p = $this->image->get();
        return $p;
    }
}