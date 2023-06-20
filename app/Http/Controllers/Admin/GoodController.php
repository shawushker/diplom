<?php

namespace App\Http\Controllers\Admin;

use App\Models\Good;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GoodController extends Controller
{
    public function index()
    {
        $goods = Good::with('category')->paginate(10); // Задайте нужное количество элементов на странице
        return view('admin.goods.index', compact('goods'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.goods.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('storage/goods/images'), $imageName);

        $good = new Good();
        $good->title = $request->title;
        $good->description = $request->description;
        $good->price = $request->price;
        $good->quantity = $request->quantity;
        $good->category_id = $request->category_id;
        $good->save();

        $image = new Image(); // Создаем новый экземпляр модели Image
        $image->path = $imageName; // Сохраняем путь к изображению
        $image->good_id = $good->id; // Присваиваем ID товара, к которому относится изображение
        $image->save(); // Сохраняем новое изображение

        return redirect()->route('admin.goods.index')->with('success', 'Товар успешно добавлен.');
    }

    public function edit(Good $good)
    {
        $categories = Category::all();
        return view('admin.goods.edit', compact('good', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $good = Good::find($id);
        $good->title = $request->title;
        $good->description = $request->description;
        $good->price = $request->price;
        $good->quantity = $request->quantity;
        $good->category_id = $request->category_id;
        $good->save();

        if($request->hasFile('image')){
            $oldImage = Image::where('good_id', $id)->first();
            if($oldImage){
                Storage::delete(public_path().$oldImage->path); // Удаляем старое изображение
                $oldImage->delete(); // Удаляем запись в базе данных
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('storage/goods/images'), $imageName);

            $image = new Image();
            $image->path = "/images/".$imageName;
            $image->good_id = $good->id;
            $image->save();
        }

        return redirect()->route('admin.goods.index')->with('success', 'Товар успешно обновлен.');
    }


    public function destroy(Good $good)
    {
        $good->delete();
        return redirect()->route('admin.goods.index')->with('success', 'Товар успешно удален.');
    }
}


