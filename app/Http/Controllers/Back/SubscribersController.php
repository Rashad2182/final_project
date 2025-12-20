<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubscribersRequest;
use App\Http\Requests\UpdateSubscribersRequest;
use App\Models\Subscribers;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $subscribers = Subscribers::where('email', 'like', '%' . request('search') . '%')
                ->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $subscribers = Subscribers::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('back.pages.subscribers.subscribers', compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreSubscribersRequest $request)
    {
        Subscribers::create([
            'email' => $request->email
        ]);
        return response()->json(['message' => 'success'], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscribersRequest $request)
    {
        Subscribers::create([
            'email' => $request->email
        ]);
        return response()->json([
            'danger' => __('toaster.danger'),
            'error' => __('toaster.error'),
            'info' => __('toaster.info'),
            'warning' => __('toaster.warning'),
            'empty' => __('toaster.empty'),
            'incorrect' => __('toaster.incorrect'),
            'success' => __('toaster.success'),
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
    public function destroy($id)
    {
        $subscriber = Subscribers::where('id', $id)->firstOrFail();

        $subscriber->delete();

        return redirect()->back()->with('success', __('delete successed'));
    }
}
