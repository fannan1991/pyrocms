<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsDefaultPostsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'posts_default_posts';

    protected $titleName = 'id';

    protected $rules = [
'content' => '',
'image' => '',
];

    protected $fields = [
'content',
'image',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['image'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsDefaultPostsEntryTranslationsModel';

    protected $stream = [
'id' => '39',
'namespace' => 'posts',
'slug' => 'default_posts',
'prefix' => 'posts_',
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
'id' => 296,
'sort_order' => 127,
'stream_id' => 39,
'field_id' => 249,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '249',
'namespace' => 'posts',
'slug' => 'content',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:0:{}',
'locked' => '0',
'translations' => [
[
'id' => 249,
'field_id' => 249,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.content.name',
'placeholder' => 'anomaly.module.posts::field.content.placeholder',
'warning' => 'anomaly.module.posts::field.content.warning',
'instructions' => 'anomaly.module.posts::field.content.instructions',
],
],
],
'translations' => [
[
'id' => 296,
'assignment_id' => 296,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 297,
'sort_order' => 128,
'stream_id' => 39,
'field_id' => 267,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '267',
'namespace' => 'posts',
'slug' => 'image',
'type' => 'anomaly.field_type.file',
'config' => 'a:3:{s:7:"folders";a:1:{i:0;s:1:"1";}s:3:"max";N;s:4:"mode";s:7:"default";}',
'locked' => '0',
'translations' => [
[
'id' => 267,
'field_id' => 267,
'locale' => 'zh-cn',
'name' => '缩略图',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 297,
'assignment_id' => 297,
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
'id' => 39,
'stream_id' => 39,
'locale' => 'en',
'name' => 'Default',
'description' => '',
],
],
];

    
public function image()
{

return $this->getFieldType('image')->getRelation();
}

}
