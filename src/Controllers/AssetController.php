<?php

namespace AwemaPL\Assets\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RedirectsUsers;
use AwemaPL\Auth\Controllers\Traits\RedirectsTo;
use AwemaPL\Auth\Requests\TwoFactorVerifyRequest;
use Illuminate\Support\Facades\File;

class AssetController extends Controller
{
    public function asset($moduleName, $fileType, $filePath)
    {
        $path= sprintf('%1$s/vendor/awema-pl/module-%2$s/dist/%3$s/%4$s', base_path(),mb_strtolower($moduleName), $fileType, $filePath);

        if ($fileType === 'css'){
            $contentType = 'text/css';
        } else  if ($fileType === 'js'){
            $contentType = 'application/javascript';
        }else  {
            $contentType = mime_content_type($path);
        }

        if (!File::exists($path)){
            abort(404);
        }

        return response(File::get($path), 200)
            ->header('Content-Type', $contentType);
    }
}
