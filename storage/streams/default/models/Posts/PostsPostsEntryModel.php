<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsPostsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = true;

    protected $table = 'posts_posts';

    protected $titleName = 'title';

    protected $rules = [
'str_id' => 'required|unique:posts_posts,str_id',
'title' => 'required',
'summary' => '',
'slug' => 'required|unique:posts_posts,slug',
'type' => 'required',
'publish_at' => 'required',
'author' => 'required',
'entry' => 'required',
'meta_title' => '',
'meta_description' => '',
'meta_keywords' => '',
'category' => '',
'featured' => '',
'enabled' => '',
'tags' => '',
];

    protected $fields = [
'str_id',
'title',
'summary',
'slug',
'type',
'publish_at',
'author',
'entry',
'meta_title',
'meta_description',
'meta_keywords',
'category',
'featured',
'enabled',
'tags',
];

    protected $dates = ['created_at', 'updated_at', 'publish_at', 'deleted_at'];

    protected $relationships = ['type', 'author', 'entry', 'category'];

    protected $translatedAttributes = ['title', 'summary', 'meta_title', 'meta_description', 'meta_keywords'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsPostsEntryTranslationsModel';

    protected $stream = [
'id' => '47',
'namespace' => 'posts',
'slug' => 'posts',
'prefix' => 'posts_',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '1',
'trashable' => '1',
'translatable' => '1',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 276,
'sort_order' => 107,
'stream_id' => 47,
'field_id' => 245,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '245',
'namespace' => 'posts',
'slug' => 'str_id',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 245,
'field_id' => 245,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.str_id.name',
'placeholder' => 'anomaly.module.posts::field.str_id.placeholder',
'warning' => 'anomaly.module.posts::field.str_id.warning',
'instructions' => 'anomaly.module.posts::field.str_id.instructions',
],
],
],
'translations' => [
[
'id' => 276,
'assignment_id' => 276,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.str_id.label.posts',
'warning' => 'anomaly.module.posts::field.str_id.warning.posts',
'placeholder' => 'anomaly.module.posts::field.str_id.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.str_id.instructions.posts',
],
],
],
[
'id' => 277,
'sort_order' => 108,
'stream_id' => 47,
'field_id' => 247,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '247',
'namespace' => 'posts',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 247,
'field_id' => 247,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.title.name',
'placeholder' => 'anomaly.module.posts::field.title.placeholder',
'warning' => 'anomaly.module.posts::field.title.warning',
'instructions' => 'anomaly.module.posts::field.title.instructions',
],
],
],
'translations' => [
[
'id' => 277,
'assignment_id' => 277,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.title.label.posts',
'warning' => 'anomaly.module.posts::field.title.warning.posts',
'placeholder' => 'anomaly.module.posts::field.title.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.title.instructions.posts',
],
],
],
[
'id' => 278,
'sort_order' => 109,
'stream_id' => 47,
'field_id' => 252,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '252',
'namespace' => 'posts',
'slug' => 'summary',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 252,
'field_id' => 252,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.summary.name',
'placeholder' => 'anomaly.module.posts::field.summary.placeholder',
'warning' => 'anomaly.module.posts::field.summary.warning',
'instructions' => 'anomaly.module.posts::field.summary.instructions',
],
],
],
'translations' => [
[
'id' => 278,
'assignment_id' => 278,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.summary.label.posts',
'warning' => 'anomaly.module.posts::field.summary.warning.posts',
'placeholder' => 'anomaly.module.posts::field.summary.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.summary.instructions.posts',
],
],
],
[
'id' => 279,
'sort_order' => 110,
'stream_id' => 47,
'field_id' => 248,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '248',
'namespace' => 'posts',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:2:{s:7:"slugify";s:5:"title";s:4:"type";s:1:"-";}',
'locked' => '1',
'translations' => [
[
'id' => 248,
'field_id' => 248,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.slug.name',
'placeholder' => 'anomaly.module.posts::field.slug.placeholder',
'warning' => 'anomaly.module.posts::field.slug.warning',
'instructions' => 'anomaly.module.posts::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 279,
'assignment_id' => 279,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.slug.label.posts',
'warning' => 'anomaly.module.posts::field.slug.warning.posts',
'placeholder' => 'anomaly.module.posts::field.slug.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.slug.instructions.posts',
],
],
],
[
'id' => 280,
'sort_order' => 111,
'stream_id' => 47,
'field_id' => 250,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '250',
'namespace' => 'posts',
'slug' => 'type',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\PostsModule\Type\TypeModel";}',
'locked' => '1',
'translations' => [
[
'id' => 250,
'field_id' => 250,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.type.name',
'placeholder' => 'anomaly.module.posts::field.type.placeholder',
'warning' => 'anomaly.module.posts::field.type.warning',
'instructions' => 'anomaly.module.posts::field.type.instructions',
],
],
],
'translations' => [
[
'id' => 280,
'assignment_id' => 280,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.type.label.posts',
'warning' => 'anomaly.module.posts::field.type.warning.posts',
'placeholder' => 'anomaly.module.posts::field.type.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.type.instructions.posts',
],
],
],
[
'id' => 281,
'sort_order' => 112,
'stream_id' => 47,
'field_id' => 254,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '254',
'namespace' => 'posts',
'slug' => 'publish_at',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 254,
'field_id' => 254,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.publish_at.name',
'placeholder' => 'anomaly.module.posts::field.publish_at.placeholder',
'warning' => 'anomaly.module.posts::field.publish_at.warning',
'instructions' => 'anomaly.module.posts::field.publish_at.instructions',
],
],
],
'translations' => [
[
'id' => 281,
'assignment_id' => 281,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.publish_at.label.posts',
'warning' => 'anomaly.module.posts::field.publish_at.warning.posts',
'placeholder' => 'anomaly.module.posts::field.publish_at.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.publish_at.instructions.posts',
],
],
],
[
'id' => 282,
'sort_order' => 113,
'stream_id' => 47,
'field_id' => 256,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '256',
'namespace' => 'posts',
'slug' => 'author',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:2:{s:4:"mode";s:6:"lookup";s:7:"related";s:34:"Anomaly\UsersModule\User\UserModel";}',
'locked' => '1',
'translations' => [
[
'id' => 256,
'field_id' => 256,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.author.name',
'placeholder' => 'anomaly.module.posts::field.author.placeholder',
'warning' => 'anomaly.module.posts::field.author.warning',
'instructions' => 'anomaly.module.posts::field.author.instructions',
],
],
],
'translations' => [
[
'id' => 282,
'assignment_id' => 282,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.author.label.posts',
'warning' => 'anomaly.module.posts::field.author.warning.posts',
'placeholder' => 'anomaly.module.posts::field.author.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.author.instructions.posts',
],
],
],
[
'id' => 283,
'sort_order' => 114,
'stream_id' => 47,
'field_id' => 255,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '255',
'namespace' => 'posts',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 255,
'field_id' => 255,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.entry.name',
'placeholder' => 'anomaly.module.posts::field.entry.placeholder',
'warning' => 'anomaly.module.posts::field.entry.warning',
'instructions' => 'anomaly.module.posts::field.entry.instructions',
],
],
],
'translations' => [
[
'id' => 283,
'assignment_id' => 283,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.entry.label.posts',
'warning' => 'anomaly.module.posts::field.entry.warning.posts',
'placeholder' => 'anomaly.module.posts::field.entry.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.entry.instructions.posts',
],
],
],
[
'id' => 284,
'sort_order' => 115,
'stream_id' => 47,
'field_id' => 261,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '261',
'namespace' => 'posts',
'slug' => 'meta_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 261,
'field_id' => 261,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_title.name',
'placeholder' => 'anomaly.module.posts::field.meta_title.placeholder',
'warning' => 'anomaly.module.posts::field.meta_title.warning',
'instructions' => 'anomaly.module.posts::field.meta_title.instructions',
],
],
],
'translations' => [
[
'id' => 284,
'assignment_id' => 284,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_title.label.posts',
'warning' => 'anomaly.module.posts::field.meta_title.warning.posts',
'placeholder' => 'anomaly.module.posts::field.meta_title.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.meta_title.instructions.posts',
],
],
],
[
'id' => 285,
'sort_order' => 116,
'stream_id' => 47,
'field_id' => 262,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '262',
'namespace' => 'posts',
'slug' => 'meta_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 262,
'field_id' => 262,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_description.name',
'placeholder' => 'anomaly.module.posts::field.meta_description.placeholder',
'warning' => 'anomaly.module.posts::field.meta_description.warning',
'instructions' => 'anomaly.module.posts::field.meta_description.instructions',
],
],
],
'translations' => [
[
'id' => 285,
'assignment_id' => 285,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_description.label.posts',
'warning' => 'anomaly.module.posts::field.meta_description.warning.posts',
'placeholder' => 'anomaly.module.posts::field.meta_description.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.meta_description.instructions.posts',
],
],
],
[
'id' => 286,
'sort_order' => 117,
'stream_id' => 47,
'field_id' => 263,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '263',
'namespace' => 'posts',
'slug' => 'meta_keywords',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 263,
'field_id' => 263,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_keywords.name',
'placeholder' => 'anomaly.module.posts::field.meta_keywords.placeholder',
'warning' => 'anomaly.module.posts::field.meta_keywords.warning',
'instructions' => 'anomaly.module.posts::field.meta_keywords.instructions',
],
],
],
'translations' => [
[
'id' => 286,
'assignment_id' => 286,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_keywords.label.posts',
'warning' => 'anomaly.module.posts::field.meta_keywords.warning.posts',
'placeholder' => 'anomaly.module.posts::field.meta_keywords.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.meta_keywords.instructions.posts',
],
],
],
[
'id' => 287,
'sort_order' => 118,
'stream_id' => 47,
'field_id' => 258,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '258',
'namespace' => 'posts',
'slug' => 'category',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:42:"Anomaly\PostsModule\Category\CategoryModel";}',
'locked' => '1',
'translations' => [
[
'id' => 258,
'field_id' => 258,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.category.name',
'placeholder' => 'anomaly.module.posts::field.category.placeholder',
'warning' => 'anomaly.module.posts::field.category.warning',
'instructions' => 'anomaly.module.posts::field.category.instructions',
],
],
],
'translations' => [
[
'id' => 287,
'assignment_id' => 287,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.category.label.posts',
'warning' => 'anomaly.module.posts::field.category.warning.posts',
'placeholder' => 'anomaly.module.posts::field.category.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.category.instructions.posts',
],
],
],
[
'id' => 288,
'sort_order' => 119,
'stream_id' => 47,
'field_id' => 260,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '260',
'namespace' => 'posts',
'slug' => 'featured',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => 260,
'field_id' => 260,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.featured.name',
'placeholder' => 'anomaly.module.posts::field.featured.placeholder',
'warning' => 'anomaly.module.posts::field.featured.warning',
'instructions' => 'anomaly.module.posts::field.featured.instructions',
],
],
],
'translations' => [
[
'id' => 288,
'assignment_id' => 288,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.featured.label.posts',
'warning' => 'anomaly.module.posts::field.featured.warning.posts',
'placeholder' => 'anomaly.module.posts::field.featured.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.featured.instructions.posts',
],
],
],
[
'id' => 289,
'sort_order' => 120,
'stream_id' => 47,
'field_id' => 259,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '259',
'namespace' => 'posts',
'slug' => 'enabled',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => 259,
'field_id' => 259,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.enabled.name',
'placeholder' => 'anomaly.module.posts::field.enabled.placeholder',
'warning' => 'anomaly.module.posts::field.enabled.warning',
'instructions' => 'anomaly.module.posts::field.enabled.instructions',
],
],
],
'translations' => [
[
'id' => 289,
'assignment_id' => 289,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.enabled.label.posts',
'warning' => 'anomaly.module.posts::field.enabled.warning.posts',
'placeholder' => 'anomaly.module.posts::field.enabled.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.enabled.instructions.posts',
],
],
],
[
'id' => 290,
'sort_order' => 121,
'stream_id' => 47,
'field_id' => 251,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '251',
'namespace' => 'posts',
'slug' => 'tags',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 251,
'field_id' => 251,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.tags.name',
'placeholder' => 'anomaly.module.posts::field.tags.placeholder',
'warning' => 'anomaly.module.posts::field.tags.warning',
'instructions' => 'anomaly.module.posts::field.tags.instructions',
],
],
],
'translations' => [
[
'id' => 290,
'assignment_id' => 290,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.tags.label.posts',
'warning' => 'anomaly.module.posts::field.tags.warning.posts',
'placeholder' => 'anomaly.module.posts::field.tags.placeholder.posts',
'instructions' => 'anomaly.module.posts::field.tags.instructions.posts',
],
],
],
],
'translations' => [
[
'id' => 47,
'stream_id' => 47,
'locale' => 'en',
'name' => 'anomaly.module.posts::stream.posts.name',
'description' => 'anomaly.module.posts::stream.posts.description',
],
],
];

    
public function type()
{

return $this->getFieldType('type')->getRelation();
}

public function author()
{

return $this->getFieldType('author')->getRelation();
}

public function entry()
{

return $this->getFieldType('entry')->getRelation();
}

public function category()
{

return $this->getFieldType('category')->getRelation();
}

}
