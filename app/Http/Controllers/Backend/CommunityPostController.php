<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use Inertia\Inertia;
use App\Models\Community;
use Illuminate\Support\Facades\Redirect;

class CommunityPostController extends Controller
{
    public function create(Community $community)
    {
        return Inertia::render('Communities/Posts/Create', compact('community')); 
    }

    public function store(StorePostRequest $request, Community $community)
    {
        $community->posts()->create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description
        ]);

        return Redirect::route('communities.posts.store', $community->slug);
    }
}
