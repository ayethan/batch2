<?php
namespace App\Http\Controllers;
use App\Blog;
use Session;
use Illuminate\Http\Request;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blog.index', compact('blogs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'title' =>'required',
           'description' => 'required',
            ]);

        $input = $request->all();
        Blog::create($input);

        Session::flash('success_blog', 'Blog successfully added!');
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show', compact('blog'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit',compact('blog'));
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
        $blog = Blog::findOrFail($id);

         $this->validate($request, [

            'title' => 'required',
            'description' => 'required',
            ]);
         $input = $request->all();
         $blog->update($input);
         Session::flash('success_blog_update', 'Blog successfully updated');
         return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog =Blog::findOrFail($id);

        $blog->delete();

        Session::flash('blog_deleted', 'Blog successfully deleted!');
        return redirect()->route('blog.index');

    }
}