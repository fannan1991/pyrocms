<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class PostsVoicePostsEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'posts_voice_posts_translations';
}
