<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        return view('binary.pages.register',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newpost = new Post;
        $newpost->name = $request->input('user_name');
        $newpost->phone = $request->input('phone');
        $newpost->body = $request->input('account');
        $newpost->other = $request->input('explain');
        $newpost->address = $request->input('target');
        $newpost->title = $request->input('email');
        $newpost->bank = $request->input('bank');
        $newpost->category = $request->input('category');
        $newpost->business = $request->input('business');
        $newpost->period = $request->input('period');
        $newpost->need = $request->input('need');
        $newpost->analysis = $request->input('analysis');
        $newpost->yes = $request->input('yes');
        $newpost->obsatcle = $request->input('obsatcle');
        $newpost->competition = $request->input('competition');
        $newpost->strategy = $request->input('strategy');
        $newpost->grant = $request->input('grant');
        $newpost->save();
        return 'Successfully Submitted';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
