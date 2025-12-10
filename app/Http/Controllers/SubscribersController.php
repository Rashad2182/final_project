<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use App\Http\Requests\StoreSubscribersRequest;
use App\Http\Requests\UpdateSubscribersRequest;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $subscribes = Subscribeers::where('email', 'like', '%' . request('search') . '%')->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $subscribes = Subscribers::orderBy('created_at', 'desc')->paginate(10);
        }

        return view('back.pages.subscribers.subscribers', [
            'subscribes' => $subscribes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscribersRequest $request)
    {
        Subscribe::create([
            'email' => $request->email
        ]);

        return response()->json([
            'subscribe success' => __('toaster.subscribe success'),
            'subscribe danger' => __('toaster.subscribe danger'),
            'subscribe error' => __('toaster.subscribe error'),
            'subscribe info' => __('toaster.subscribe info'),
            'subscribe warning' => __('toaster.subscribe warning'),
            'empty' => __('toaster.empty'),
            'incorrect' => __('toaster.incorrect'),
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscribers $subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscribersRequest $request, Subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribers $id)
    {
        $subscribe = Subscribe::where('id', $id)->firstOrFail();

        $subscribe->delete();

        return redirect()->back()->with('success', __('toaster.delete successed'));
    }
}
