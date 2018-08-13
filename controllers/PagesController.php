<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $models = App::get('database')->getAll("models", "Model");

        $models[0]->lowVotes();

        return view('index', compact('models'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function storeTask()
    {
        App::get('database')->addNew("tasks", $_POST);

        return redirect('/');
    }

    public function models()
    {
        $models = App::get('database')->getAll("models");

        return view('models', compact('models'));
    }

    public function apiModels()
    {
        $models = App::get('database')->getAll("models");

        echo json_encode($models);
    }

        public function modelView($id)
    {
        $modelId = App::get('database')->getOne('models', $id);

        echo json_encode($modelId);

        return view('model'.$id);
    }
}