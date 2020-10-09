<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResumeResource;
use App\Models\File;
use App\Models\FileType;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function latest()
    {
        $resume = File::fileType(FileType::RESUME)->live()->orderBy('id', 'DESC')->take(1)->first();

        if (empty($resume)) {
            return response([
                'message' => 'No resume found.',
            ], 422);
        }

        return new ResumeResource($resume);
    }
}
