<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsCategoriesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'posts_categories';

    protected $titleName = 'name';

    protected $rules = [
'name' => 'required|unique:posts_categories,name',
'slug' => 'required|unique:posts_categories,slug',
'description' => '',
'parent' => '',
];

    protected $fields = [
'name',
'slug',
'description',
'parent',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['parent'];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsCategoriesEntryTranslationsModel';

    protected $stream = [
'id' => '46',
'namespace' => 'posts',
'slug' => 'categories',
'prefix' => 'posts_',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '1',
'searchable' => '0',
'trashable' => '1',
'translatable' => '1',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 272,
'sort_order' => 103,
'stream_id' => 46,
'field_id' => 246,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '246',
'namespace' => 'posts',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 246,
'field_id' => 246,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.name.name',
'placeholder' => 'anomaly.module.posts::field.name.placeholder',
'warning' => 'anomaly.module.posts::field.name.warning',
'instructions' => 'anomaly.module.posts::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 272,
'assignment_id' => 272,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.name.label.categories',
'warning' => 'anomaly.module.posts::field.name.warning.categories',
'placeholder' => 'anomaly.module.posts::field.name.placeholder.categories',
'instructions' => 'anomaly.module.posts::field.name.instructions.categories',
],
],
],
[
'id' => 273,
'sort_order' => 104,
'stream_id' => 46,
'field_id' => 248,
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
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
'id' => 273,
'assignment_id' => 273,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.slug.label.categories',
'warning' => 'anomaly.module.posts::field.slug.warning.categories',
'placeholder' => 'anomaly.module.posts::field.slug.placeholder.categories',
'instructions' => 'anomaly.module.posts::field.slug.instructions.categories',
],
],
],
[
'id' => 274,
'sort_order' => 105,
'stream_id' => 46,
'field_id' => 253,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '253',
'namespace' => 'posts',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 253,
'field_id' => 253,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.description.name',
'placeholder' => 'anomaly.module.posts::field.description.placeholder',
'warning' => 'anomaly.module.posts::field.description.warning',
'instructions' => 'anomaly.module.posts::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 274,
'assignment_id' => 274,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.description.label.categories',
'warning' => 'anomaly.module.posts::field.description.warning.categories',
'placeholder' => 'anomaly.module.posts::field.description.placeholder.categories',
'instructions' => 'anomaly.module.posts::field.description.instructions.categories',
],
],
],
[
'id' => 275,
'sort_order' => 106,
'stream_id' => 46,
'field_id' => 266,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '266',
'namespace' => 'posts',
'slug' => 'parent',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:42:"Anomaly\PostsModule\Category\CategoryModel";}',
'locked' => '1',
'translations' => [
[
'id' => 266,
'field_id' => 266,
'locale' => 'en',
'name' => 'anomaly.module.posts::field.parent.name',
'placeholder' => 'anomaly.module.posts::field.parent.placeholder',
'warning' => 'anomaly.module.posts::field.parent.warning',
'instructions' => 'anomaly.module.posts::field.parent.instructions',
],
],
],
'translations' => [
[
'id' => 275,
'assignment_id' => 275,
'locale' => 'en',
'label' => 'anomaly.module.posts::field.parent.label.categories',
'warning' => 'anomaly.module.posts::field.parent.warning.categories',
'placeholder' => 'anomaly.module.posts::field.parent.placeholder.categories',
'instructions' => 'anomaly.module.posts::field.parent.instructions.categories',
],
],
],
],
'translations' => [
[
'id' => 46,
'stream_id' => 46,
'locale' => 'en',
'name' => 'anomaly.module.posts::stream.categories.name',
'description' => 'anomaly.module.posts::stream.categories.description',
],
],
];

    
public function parent()
{

return $this->getFieldType('parent')->getRelation();
}

}
