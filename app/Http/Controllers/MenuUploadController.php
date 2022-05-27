<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use Illuminate\Http\Request;

class MenuUploadController extends Controller
{
     /**
     * Handle an incoming File upload.
     *
     * @param  \App\Http\Requests $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreFileRequest $request)
    {
        dd($request->all());
    }
}
