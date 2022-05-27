<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use Illuminate\Support\MessageBag;

class MenuUploadController extends Controller
{
    /**
     * Handle an incoming File upload.
     *
     * @param  \App\Http\Requests $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreFileRequest $request,  MessageBag $message_bag)
    {
        
        if ($request->file('menuFile')) {
            $file = $request->file('menuFile');
            $filename = time() . '_' . $file->getClientOriginalName();

            // File upload location
            $location = 'menu-files';

            // Upload file
            $didFileMove = $file->move($location, $filename);

            if($didFileMove) {
                

                // Create new file model
                $file = new File;

                $file->title = $filename;

                if ($request->makeActiveCheckbox){
                    $fileToChange = File::where('is_active', 1)->update(['is_active' => null]);

                    $file->is_active = true;
                } else {
                    $file->is_active = null;
                }
                

                $file->save();

                return redirect('/dashboard')->withSuccess('File Uploaded');


            } else {
                return redirect('/dashboard')->withErrors( 'Could not upload file');
            }

            return redirect('/dashboard')->withSuccess('File Uploaded');

        } else {
            return redirect('/dashboard')->withErrors( 'Could not upload file');
        }

        
    }
}
