<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category');
        $query = Good::query();

        if ($category) {
            $query->where('category', $category);
        }

        $goods = $query->orderBy('id', 'DESC')->paginate(12);
        return view('main', compact('goods'));

    }
    public function categories(){
        return view('categories.index');
    }


}
