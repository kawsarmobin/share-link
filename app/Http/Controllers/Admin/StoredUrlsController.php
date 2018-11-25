<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Session;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\StoredUrl;
use App\Http\Controllers\Controller;

class StoredUrlsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.storedUrl.index')
                ->with('storedUrls', StoredUrl::all())
                ->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.storedUrl.create')
                ->with('categories', Category::all());
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
            'category_id' => 'required',
            'title' => 'min:2|max:255',
            'url' => 'required|url',
        ],
        $messages = [
            'category_id.required' => 'The category field is required.',
            'url.required' => 'The attribute is not a valid link',
        ]);

        $storedUrl = new StoredUrl();

        $storedUrl->category_id = $request->category_id;
        $storedUrl->title = $request->title;
        $storedUrl->url = $request->url;

        if ($storedUrl->save()) {
            Session::flash('success', 'Successfully stored your link.');
        }

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
        return view('admin.storedUrl.edit')
                ->with('categories', Category::all())
                ->with('storedUrl', StoredUrl::find($id));
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
            'category_id' => 'required',
            'title' => 'min:2|max:255',
            'url' => 'required|url',
        ],
        $messages = [
            'category_id.required' => 'The category field is required.',
            'url.required' => 'The attribute is not a valid link',
        ]);

        $storedUrl = StoredUrl::find($id);

        $storedUrl->category_id = $request->category_id;
        $storedUrl->title = $request->title;
        $storedUrl->url = $request->url;

        if ($storedUrl->save()) {
            Session::flash('success', 'Successfully updated your link.');
        }

        return redirect()->route('storedurl.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $storedUrl = StoredUrl::find($id);

        if ($storedUrl->delete()) {
            Session::flash('success', 'Successfully delete your link.');
        }

        return redirect()->back();
    }

    public function singleCategory($id)
    {
        $singleCategory = StoredUrl::where('category_id', $id)->get();

        return view('admin.storedUrl.singleCategory')
                ->with('singleCategory', $singleCategory)
                ->with('category', Category::find($id))
                ->with('categories', Category::all());
    }
}
