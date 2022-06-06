<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\File as FileL; 

class MenuUploadController extends Controller
{
    /**
     * Display the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $files = File::orderBy('is_active', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->get();;

        $activeFile = File::where('is_active', true)->get();



        return view('dashboard')->with(['files' => $files, 'activeFile' => $activeFile]);
    }


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
            $filename = time().'.'.$file->getClientOriginalName();

            // File upload location
            $location = 'menu-files';

            // Upload file
            $didFileMove = $file->move($location, $filename);

            if ($didFileMove) {


                // Create new file model
                $file = new File;

                $file->title = $filename;

                if ($request->makeActiveCheckbox) {
                    $fileToChange = File::where('is_active', 1)->update(['is_active' => null]);

                    $file->is_active = true;
                } else {
                    $file->is_active = null;
                }


                $file->save();

                return redirect('/dashboard')->withSuccess('File Uploaded');
            } else {
                return redirect('/dashboard')->withErrors('Could not upload file');
            }

            return redirect('/dashboard')->withSuccess('File Uploaded');
        } else {
            return redirect('/dashboard')->withErrors('Could not upload file');
        }
    }

    /**
     * Remove a menu file.
     *
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $file->delete();


        
        FileL::delete('menu-files/' . $file->title);


        return redirect('/dashboard'); 
    }

    /**
     * make a menu file active.
     *
     * @return \Illuminate\View\View
     */
    public function update($id)
    {
        $fileToChange = File::where('is_active', 1)->update(['is_active' => null]);
        $file = File::findOrFail($id)->update(['is_active' => 1]);




        return redirect('/dashboard'); 
    }
}
