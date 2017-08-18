<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsVoicePostsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'posts_voice_posts';

    protected $titleName = 'id';

    protected $rules = [
'image' => '',
'voice' => '',
'content' => '',
];

    protected $fields = [
'image',
'voice',
'content',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['image', 'voice'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsVoicePostsEntryTranslationsModel';

    protected $stream = [
'id' => '52',
'namespace' => 'posts',
'slug' => 'voice_posts',
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
'id' => 305,
'sort_order' => 136,
'stream_id' => 52,
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
'id' => 305,
'assignment_id' => 305,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 306,
'sort_order' => 137,
'stream_id' => 52,
'field_id' => 271,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '271',
'namespace' => 'posts',
'slug' => 'voice',
'type' => 'anomaly.field_type.file',
'config' => 'a:3:{s:7:"folders";a:1:{i:0;s:1:"4";}s:3:"max";N;s:4:"mode";s:7:"default";}',
'locked' => '0',
'translations' => [
[
'id' => 271,
'field_id' => 271,
'locale' => 'zh-cn',
'name' => '上传音频',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 306,
'assignment_id' => 306,
'locale' => 'zh-cn',
'label' => '',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 307,
'sort_order' => 138,
'stream_id' => 52,
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
'id' => 307,
'assignment_id' => 307,
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
'id' => 52,
'stream_id' => 52,
'locale' => 'en',
'name' => '语音',
'description' => '',
],
],
];

    
public function image()
{

return $this->getFieldType('image')->getRelation();
}

public function voice()
{

return $this->getFieldType('voice')->getRelation();
}

}
