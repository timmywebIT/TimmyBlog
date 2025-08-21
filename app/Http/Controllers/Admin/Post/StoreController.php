<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $tagIds = $data['tag_ids'] ?? [];
        unset($data['tag_ids']);

        if ($request->hasFile('main_image')) {
            $data['main_image'] = $request->file('main_image')->store('images', 'public');
        }

        $post = Post::firstOrCreate($data);

        if (!empty($tagIds)) {
            $post->tags()->sync($tagIds);
        }

        return redirect()->route('admin.posts.index');
    }
}
