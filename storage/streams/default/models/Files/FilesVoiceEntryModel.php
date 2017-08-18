<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesVoiceEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'files_voice';

    protected $titleName = '';

    protected $rules = [
];

    protected $fields = [
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Files\FilesVoiceEntryTranslationsModel';

    protected $stream = [
'slug' => 'voice',
'namespace' => 'files',
'translatable' => '1',
'trashable' => '1',
'locked' => '',
'config' => 'a:0:{}',
'prefix' => 'files_',
'id' => '53',
'assignments' => [
],
'translations' => [
[
'id' => 53,
'stream_id' => 53,
'locale' => 'en',
'name' => 'Voice',
'description' => '音频存储目录',
],
],
];

    
}
