<?php namespace Anomaly\Streams\Platform\Model\Pages;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PagesDefaultPagesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'pages_default_pages';

    protected $titleName = 'id';

    protected $rules = [
'content' => '',
];

    protected $fields = [
'content',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['content'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Pages\PagesDefaultPagesEntryTranslationsModel';

    protected $stream = [
'id' => '38',
'namespace' => 'pages',
'slug' => 'default_pages',
'prefix' => 'pages_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'hidden' => '1',
'sortable' => '0',
'searchable' => '0',
'trashable' => '1',
'translatable' => '1',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 221,
'sort_order' => 125,
'stream_id' => 38,
'field_id' => 127,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '127',
'namespace' => 'pages',
'slug' => 'content',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:0:{}',
'locked' => '0',
'translations' => [
[
'id' => 127,
'field_id' => 127,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.content.name',
'placeholder' => 'anomaly.module.pages::field.content.placeholder',
'warning' => 'anomaly.module.pages::field.content.warning',
'instructions' => 'anomaly.module.pages::field.content.instructions',
],
],
],
'translations' => [
[
'id' => 221,
'assignment_id' => 221,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 38,
'stream_id' => 38,
'locale' => 'en',
'name' => 'Default',
'description' => 'A simple page type.',
],
],
];

    
}
