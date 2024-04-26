<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
  public function allCategories()
  {
      return view('admin.BlogCategories.all-categories',[
         'categories' => Category::all(),
      ]);
  }

  public function createCategory()
  {
      return view('admin.BlogCategories.create-categories');
  }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name'=>['required','min:2','max:200','unique:categories']
        ]);
        Category::create($request->all());
        return redirect()->route('blog.categories');
    }

    public function editCategory(Category $category)
    {
        return view('admin.BlogCategories.edit-categories',[
            'category' => $category
        ]);
    }

    public function updateCategory(Request $request,Category $category)
    {
        $request->validate([
            'name'=>['required','min:2','max:200','unique:categories,name,'.$category->id],
        ]);

        $category->update($request->all());

        return redirect()->route('blog.categories');
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        return back();
    }

}
