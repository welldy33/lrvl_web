<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator as Generator;
use App\Models\LayoutBus;

class CLayoutBus extends Controller
{
    public function index()
    {
        $articles = LayoutBus::all();
 
        return $articles->toJson();
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'model_nm' => 'required',
          'rowmap' => 'required',
          'colmap' => 'required',
          'seal' => 'required',
        ]);
 
        $project = LayoutBus::create([
          'model_nm' => $validatedData['model_nm'],
          'colmap' => $validatedData['colmap'],
          'rowmap' => $validatedData['rowmap'],
          'seal' => $validatedData['seal'],
        ]);
 
        $msg = [
            'success' => true,
            'message' => 'Article created successfully!'
        ];
 
        return response()->json($msg);
    }
 
    public function getArticle($id) // for edit and show
    {
        $article = LayoutBus::find($id);
 
        return $article->toJson();
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'title' => 'required',
          'content' => 'required',
        ]);
 
        $article = LayoutBus::find($id);
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->save();
 
        $msg = [
            'success' => true,
            'message' => 'Article updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $article = LayoutBus::find($id);
        if(!empty($article)){
            $article->delete();
            $msg = [
                'success' => true,
                'message' => 'Article deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Article deleted failed!'
            ];
            return response()->json($msg);
        }
    }
    public function savemodel(Request $request){
        return response()->json([$request->all()]);
    }
    
}
