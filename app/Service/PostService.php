<?php

namespace App\Service;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PostService
{
    public function store(StoreRequest $request)
    {

        $data = $request->validated();

        try {
            DB::beginTransaction();
            $tagIds = $data['tag_ids'] ?? [];
            unset($data['tag_ids']);
            if ($request->hasFile('main_image')) {
                $data['main_image'] = $request->file('main_image')->store('images', 'public');
            }
            $post = Post::firstOrCreate($data);
            if (!empty($tagIds)) {
                $post->tags()->sync($tagIds);
            }
            DB::commit();
            return $post;
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Ошибка при создании поста: ' . $e->getMessage());
            throw $e;
        }
    }
}
