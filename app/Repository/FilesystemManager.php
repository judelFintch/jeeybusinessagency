<?php
declare(strict_types=1);

namespace App\Repository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait FilesystemManager
{
    public function uploadFile(Request $request): string
    {
        return $request->file('files')
            ->storePublicly('/', ['disk' => 'public']);
    }

    public function unsetFilesUploads($model)
    {
        Storage::disk('public')->delete($model->files);
    }
}
