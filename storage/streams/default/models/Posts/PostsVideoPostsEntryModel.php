<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsVideoPostsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'posts_video_posts';

    protected $titleName = 'id';

    protected $rules = [
'image' => '',
'videourl' => '',
'video' => '',
'content' => '',
];

    protected $fields = [
'image',
'videourl',
'video',
'content',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['image', 'video'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsVideoPostsEntryTranslationsModel';

    protected $stream = [
'id' => '50',
'namespace' => 'posts',
'slug' => 'video_posts',
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
'id' => 301,
'sort_order' => 132,
'stream_id' => 50,
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
'id' => 301,
'assignment_id' => 301,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 302,
'sort_order' => 133,
'stream_id' => 50,
'field_id' => 269,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '269',
'namespace' => 'posts',
'slug' => 'videourl',
'type' => 'anomaly.field_type.url',
'config' => 'a:1:{s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 269,
'field_id' => 269,
'locale' => 'zh-cn',
'name' => '视频链接',
'placeholder' => '',
'warning' => '',
'instructions' => '视频链接和上传视频请选择一个字段填写，如都填写则默认读取视频链接',
],
],
],
'translations' => [
[
'id' => 302,
'assignment_id' => 302,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 303,
'sort_order' => 134,
'stream_id' => 50,
'field_id' => 270,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '270',
'namespace' => 'posts',
'slug' => 'video',
'type' => 'anomaly.field_type.file',
'config' => 'a:3:{s:7:"folders";a:1:{i:0;s:1:"3";}s:3:"max";N;s:4:"mode";s:7:"default";}',
'locked' => '0',
'translations' => [
[
'id' => 270,
'field_id' => 270,
'locale' => 'zh-cn',
'name' => '上传视频',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 303,
'assignment_id' => 303,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 304,
'sort_order' => 135,
'stream_id' => 50,
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
'id' => 304,
'assignment_id' => 304,
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
'id' => 50,
'stream_id' => 50,
'locale' => 'en',
'name' => '视频',
'description' => '',
],
],
];

    
public function image()
{

return $this->getFieldType('image')->getRelation();
}

public function video()
{

return $this->getFieldType('video')->getRelation();
}

}
