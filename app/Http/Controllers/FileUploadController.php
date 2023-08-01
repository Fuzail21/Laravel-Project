<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\File;

class FileUploadController extends Controller
{
    public function render() {
        $fileModel = File::all();
        $data = compact('fileModel');
        return view('upload-file')->with($data);
    }


    public function upload(Request $req){
        $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
            $fileModel = new File;
            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();
                return back()
                ->with('_file', $fileName);
            }
    }

    public function download($id){
        $file = File::findOrFail($id);

        $fileName = $file->name;

        $filePath = storage_path('app/public/uploads/' . $file->name);

        if (!Storage::exists('public/uploads/' . $file->name)) {
            abort(404);
        }

        return response()->download($filePath, $file->name);


        // $filePath = storage_path('app/public/uploads/1690875614_airway-bill FINAL1.pdf');
        // return response()->download($filePath, '1690875614_airway-bill FINAL1.pdf');

    }
}
