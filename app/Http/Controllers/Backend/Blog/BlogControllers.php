<?php

namespace App\Http\Controllers\Backend\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class BlogControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = Blog::select('*');
            return DataTables::of($kategori)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    //form delete
                    $formdelete = '<form action="' . route('admin.blog.destroy', $row->id) . '" method="POST">' . csrf_field() . method_field("DELETE") . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')"><i class="fa fa-trash"></i> Hapus</button></form>';
                    //form edit
                    $formedit = '<a href="' . route('admin.blog.edit', $row->id) . '" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</a>';
                    $btn = $formedit . '
                        <br/>
                        ' . $formdelete . '';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryBlog::all();
        return view('backend.blog.create', compact('category'));
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'short_description' => 'required|string',
            
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_blog_id' => $request->category_id,
            'short_description' => $request->short_description,
            'slug' => Str::slug($request->title),
            'date_published' => now(),
            'status' => "0",
        ]);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image->storeAs('public/blog/', $image->hashName());
            //simpan icon database
            $blog->update([
                'image' => $image->hashName()
            ]);
        }
        if($blog){
            return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully');
        }else{
            return redirect()->route('admin.blog.index')->with('error', 'Blog created failed');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $category = CategoryBlog::all();
        return view('backend.blog.edit', compact('blog', 'category'));
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'short_description' => 'required|string',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $blog = Blog::find($id);
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_blog_id' => $request->category_id,
            'short_description' => $request->short_description,
            'slug' => Str::slug($request->title),
            'date_published' => now(),
            'status' => "0",
        ]);
        if ($request->file('image')) {
            $image = $request->file('image');
            $image->storeAs('public/blog/', $image->hashName());
            $oldImage = $blog->image;
            if (Storage::disk('public')->exists('blog/' . $oldImage)) {
                Storage::disk('public')->delete('blog/' . $oldImage);
            }
            //simpan icon database
            $blog->update([
                'image' => $image->hashName()
            ]);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $oldImage = $blog->image;
        if (Storage::disk('public')->exists('blog/' . $oldImage)) {
            Storage::disk('public')->delete('blog/' . $oldImage);
        }
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully');
    }
}
