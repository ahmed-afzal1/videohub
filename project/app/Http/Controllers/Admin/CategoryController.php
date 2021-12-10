<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageTitle = 'All Categories';

        $search = $request->search;

        $categories = Category::when($request, function($query) use($search){
            $query->where('name','LIKE','%'.$search.'%')->get();
        })->latest()->paginate(6);

        return view('admin.category.index',compact('pageTitle','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $pageTitle = 'Create Category';

       return view('admin.category.create',compact('pageTitle'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

       
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => 1,
        ]);

        $notify[] = ['success','Category Created Successfully'];

        return redirect()->back()->withNotify($notify);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $pageTitle = 'Edit Category';

        return view('admin.category.edit',compact('pageTitle','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
      
        $request->validate([
            'name' => 'required|unique:categories,name,'.$category->id,
        ]);

        
       
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

            $notify[] = ['success','Category Updated Successfully'];

            return redirect()->back()->withNotify($notify);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        $category->delete();

        $notify[] = ['success','Category Deleted Successfully'];

        return redirect()->back()->withNotify($notify);
    }

    public function status(Request $request, $id)
    {
        $data = Category::findOrFail($id);
        $data->status = $request->status;
        $data->update();

        $notify = ['success' => __('Status Updated Successfull')];
        return response()->json($notify);
    }
}