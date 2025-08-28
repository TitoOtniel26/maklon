<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function get($id)
    {
        $category = Category::findOrFail($id);
        return response()->json([
            'id' => $category->id,
            'name' => $category->name
        ]);
    }
}
