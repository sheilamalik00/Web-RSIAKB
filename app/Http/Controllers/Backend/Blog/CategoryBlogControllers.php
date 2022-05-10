<?php

namespace App\Http\Controllers\Backend\Blog;

use App\Http\Controllers\Controller;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryBlogControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = CategoryBlog::select('*');
            return DataTables::of($kategori)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    //form delete
                    $formdelete = '<form action="' . route('category.destroy', $row->id) . '" method="POST">' . csrf_field() . method_field("DELETE") . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i> Hapus</button></form>';
                    //form edit
                    $formedit = '<a href="' . route('category.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';
                    $btn = $formedit . '
                        <br/>
                        ' . $formdelete . '';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);
        $category = CategoryBlog::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        if($category){
            return redirect()->route('category.index')->with('success', 'Category created successfully');
        }else{
            return redirect()->route('category.index')->with('error', 'Category created failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryBlog::find($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);
        $category = CategoryBlog::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        if($category){
            return redirect()->route('category.index')->with('success', 'Category updated successfully');
        }else{
            return redirect()->route('category.index')->with('error', 'Category updated failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryBlog::find($id);
        $category->delete();
        if($category){
            return redirect()->route('category.index')->with('success', 'Category deleted successfully');
        }else{
            return redirect()->route('category.index')->with('error', 'Category deleted failed');
        }
    }
}
