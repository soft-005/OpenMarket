<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    //public function __construct(){
    //    $this->middleware('auth');
   //  }


    //
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'featured' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'tags' => ['required']
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('Uploads/products',$featured_new_name);

        $post = Product::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured' => 'Uploads/products/'.$featured_new_name,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->title)
        ]);

        //
        $post->tags()->attach($request->tags);
        
        return Redirect()->route('Products');
    }

    //
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        if($categories->count() == 0 || $tags->count() == 0){
            Session::flash('info', 'You must have some categories and posts before attempting to get a Product.');
            return redirect()->back();
        }
        return view('admin.products.create')->with(['category' => Category::all(), 'tags' => $tags]);
    }

    //
    public function index(){
        

        return view('admin.products.index')->with('posts', Product::orderBy('id','desc')->paginate(5));
    }

    //
    public function destroy($id){

        $post = Product::find($id); 
        $post->delete();

        Session::flash('success', 'Product deleted successfully.');

        return redirect()->route('Products');
    }

    //
    public function trashed(){
        $trash = Product::onlyTrashed()->get();

        return view('admin.products.trashed')->with('trash', $trash);
    }
    
    //
    public function kill($id){

        $kill = Product::withTrashed()->where('id',$id)->first();
        $kill->forceDelete();
        
        Session::flash('successs','Product permanetly deleted');

        return redirect()->route('Product.trashed');
    }

    //
    public function restore($id){
        $post = Product::withTrashed()->where('id',$id)->first();
        $post->restore();
        
        Session::flash('successs','Product restored successfully');

        return redirect()->route('Product.trashed');
    }

    //
    public function edit($id){
        $product = Product::find($id);

        return view('admin.products.edit')->with(['product' => $product, 'category' => Category::all(), 'tags' => Tag::all()]);
    }

    //
    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => ['required', 'max:250', 'string'],
            'featured' => ['image'],
            'content' => ['required'],
            'category' => ['reqiured'],
            'tags' => ['required']
        ]);


        $post = Product::find($id);

        if($request->hasFile('featured')){
            $featured = $request->featured;
            $featured_new_name = time() . $featured.getClientOriginalName();
            $featured->move('uploads/products',$featured_new_name);
            
            $post->featured = 'uploads/products'.$featured_new_name;
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->category_id;

        $post->save();
        //
        $post->tags()->sync($request->tags);

        Session::flash('success', 'edited successfully!');

        return redirect()->route('Products');
    }
}
