<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesVideoEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'files_video';

    protected $titleName = '';

    protected $rules = [
];

    protected $fields = [
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Files\FilesVideoEntryTranslationsModel';

    protected $stream = [
'slug' => 'video',
'namespace' => 'files',
'translatable' => '1',
'trashable' => '1',
'locked' => '',
'config' => 'a:0:{}',
'prefix' => 'files_',
'id' => '51',
'assignments' => [
],
'translations' => [
[
'id' => 51,
'stream_id' => 51,
'locale' => 'en',
'name' => 'Video',
'description' => '视频存储目录',
],
],
];

    
}
