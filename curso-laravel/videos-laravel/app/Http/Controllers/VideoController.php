<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Video;
use App\Comment;


class VideoController extends Controller
{
    public function createVideo(){
        return view('video.createVideo');
    }

    public function saveVideo(Request $request){

        //Validar formulario con Laravel

        //He reducido las opciones de validación a la espera de respuesta del instructor de Udemy.

        $validatedData = $this->validate($request, [
            //'title' => 'required|min:5',
            //'description' => 'required',
            'video' => 'mimes:mp4'
        ]);

        $video = new Video();
        $user = \Auth::user();
        $video->user_id = $user->id;
        $video->title = $request->input('title');
        $video->description = $request->input('description');

        $video->save();

        return redirect()->route('home')->with(array(
                'message' => 'El video se ha subido correctamente!!'
            ));

    }
}
