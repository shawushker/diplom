<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Good;

class GoodController extends Controller
{

        public function index(Request $request)
    {
        $category = $request->get('category');
        $query = Good::query();

        if ($category) {
            $query->where('category', $category);
        }

        $goods = $query->orderBy('id', 'DESC')->paginate(8);
        return view('goods.index', compact('goods'));
    }
    public function show($id)
    {
        $good = Good::findOrFail($id);
        return view('goods.show', compact('good'));
    }

}

