<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = BlogPost::published()
            ->latest()
            ->take(4)
            ->get();

        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|array',
            'is_published' => 'boolean'
        ]);

        $data = $request->all();

        // Handle file upload
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $filename = time() . '_' . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('blog-images', $filename, 'public');
            $data['featured_image'] = $path;
        }

        // Set published_at if publishing
        if ($data['is_published'] ?? false) {
            $data['published_at'] = now();
        }

        $post = BlogPost::create($data);

        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = BlogPost::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|array',
            'is_published' => 'boolean'
        ]);

        $data = $request->all();

        // Handle file upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }

            $file = $request->file('featured_image');
            $filename = time() . '_' . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('blog-images', $filename, 'public');
            $data['featured_image'] = $path;
        }

        // Set published_at if publishing for the first time
        if (($data['is_published'] ?? false) && !$post->published_at) {
            $data['published_at'] = now();
        }

        $post->update($data);

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = BlogPost::findOrFail($id);

        // Delete associated image
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }

        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }

    /**
     * Get latest posts for frontend display
     */
    public function latest()
    {
        $posts = BlogPost::published()
            ->latest()
            ->take(4)
            ->select(['id', 'title', 'excerpt', 'featured_image', 'slug', 'published_at'])
            ->get();

        return response()->json($posts);
    }
}
