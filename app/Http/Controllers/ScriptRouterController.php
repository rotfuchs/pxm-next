<?php

namespace App\Http\Controllers;

class ScriptRouterController extends Controller
{
    public function getAssetFile($filePath = null)
    {
        $absolutePath = resource_path('assets').$filePath;

        if ($absolutePath != realpath($absolutePath) || !is_file($absolutePath)) {
            abort(404);
        }

        $headers = [
            'Content-Type' => get_mime_type($absolutePath),
            'Last-Modified' => date('r', filemtime($absolutePath))
        ];

        return response()->file($absolutePath, $headers);
    }
}
