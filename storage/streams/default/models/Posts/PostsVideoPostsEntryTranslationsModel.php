<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class PostsVideoPostsEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'posts_video_posts_translations';
}
