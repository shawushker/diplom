<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Good;
use App\Models\Category;

class GoodController extends Controller
{
    public function index()
    {
        $query = Good::query();

        if ($categoryId = request('category')) {
            $query->where('category_id', $categoryId);
        }

        $goods = $query->paginate(8);
        $categories = Category::all(); //

        return view('goods.index', compact('goods', 'categories'));
    }

    public function show($id)
    {
        $good = Good::findOrFail($id);
        return view('goods.show', compact('good'));
    }

}

