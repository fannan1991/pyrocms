<?php
namespace App\Api\Transformers;

use Anomaly\PostsModule\Post\PostModel;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    public function transform(PostModel $postModel)
    {
        return [
            'id' => $postModel['id'],
            'title' => $postModel['title'],
            'summary' => $postModel['summary'],
            'meta_title' => $postModel['meta_title'],
            'meta_description' => $postModel['meta_description'],
            'meta_keywords' => $postModel['meta_keywords'],
            'created_at' => $postModel['created_at'],
            'sort_order' => $postModel['sort_order']

        ];
    }
}