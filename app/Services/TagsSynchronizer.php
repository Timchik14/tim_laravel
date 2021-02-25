<?php

namespace App\Services;

use App\Models\Tag;
use \Illuminate\Support\Collection;
use \App\Models\Post;

abstract class TagsSynchronizer
{
    public static function sync(Collection $tags, Post $model)
    {
        $postTags = $model->tags->keyBy('name');
        $syncIds = $postTags->intersectByKeys($tags)->pluck('id')->toArray();
        $tagsToAttach = $tags->diffKeys($postTags);
        foreach ($tagsToAttach as $tag) {
            $tag = Tag::firstOrCreate(['name' => $tag]);
            $syncIds[] = $tag->id;
        }
        $model->tags()->sync($syncIds);
    }
}
