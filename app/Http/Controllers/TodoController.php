<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return response($request->user()->todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request): Response
    {
        $request->validate(
            [
                'title' => 'required|string|max:191',
            ],
            [
                'title.*' => ':attribute should be a string no longer than 191 characters'
            ]
        );

        return response($request->user()->todos()->save(new Todo(
            $request->only('title')
        )), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Todo $todo
     * @return Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Todo $todo
     * @return Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Models\Todo $todo
     * @return Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Todo $todo
     * @return Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
