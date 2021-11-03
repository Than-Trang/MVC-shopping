<?php

namespace App\Http\Controllers;

// use App\Category;
use Illuminate\Http\Request;
// use App\components\Recusive;

class CategoriesController extends Controller
{
    private $category;
    
    public function __construct(Category $category)
    {
        $this -> category = $category;
    }
    // public function create(){
    //    $data= $this -> category->all();
    //    $recusive = new Recusuve($data);
    //    $htmlOption = $recusive ->categoryRecusive();
    //    return view('category.add', compact('htmlOption'));

    // }
    public function index(){
        return view('category.add');
    }
    // public function create(){
    //     return view('category.index');
    // }
}
