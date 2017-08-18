<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsAtlasPostsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'posts_atlas_posts';

    protected $titleName = 'id';

    protected $rules = [
'image' => '',
'content' => '',
'atlas' => '',
];

    protected $fields = [
'image',
'content',
'atlas',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['image', 'atlas'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsAtlasPostsEntryTranslationsModel';

    protected $stream = [
'id' => '49',
'namespace' => 'posts',
'slug' => 'atlas_posts',
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
'id' => 298,
'sort_order' => 129,
'stream_id' => 49,
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
'id' => 298,
'assignment_id' => 298,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 299,
'sort_order' => 130,
'stream_id' => 49,
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
'id' => 299,
'assignment_id' => 299,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 300,
'sort_order' => 131,
'stream_id' => 49,
'field_id' => 268,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '268',
'namespace' => 'posts',
'slug' => 'atlas',
'type' => 'anomaly.field_type.files',
'config' => 'a:4:{s:7:"folders";a:1:{i:0;s:1:"1";}s:3:"min";N;s:3:"max";N;s:4:"mode";s:7:"default";}',
'locked' => '0',
'translations' => [
[
'id' => 268,
'field_id' => 268,
'locale' => 'zh-cn',
'name' => '图集',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 300,
'assignment_id' => 300,
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
'id' => 49,
'stream_id' => 49,
'locale' => 'en',
'name' => '图集',
'description' => '',
],
],
];

    
public function image()
{

return $this->getFieldType('image')->getRelation();
}

public function atlas()
{

return $this->getFieldType('atlas')->getRelation();
}

}
