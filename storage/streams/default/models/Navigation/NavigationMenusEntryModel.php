<?php namespace Anomaly\Streams\Platform\Model\Navigation;

use Anomaly\Streams\Platform\Entry\EntryModel;

class NavigationMenusEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'navigation_menus';

    protected $titleName = 'name';

    protected $rules = [
'name' => 'required|unique:navigation_menus,name',
'slug' => 'required|unique:navigation_menus,slug',
'description' => '',
];

    protected $fields = [
'name',
'slug',
'description',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Navigation\NavigationMenusEntryTranslationsModel';

    protected $stream = [
'id' => '22',
'namespace' => 'navigation',
'slug' => 'menus',
'prefix' => 'navigation_',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '1',
'translatable' => '1',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 131,
'sort_order' => 87,
'stream_id' => 22,
'field_id' => 114,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '114',
'namespace' => 'navigation',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 114,
'field_id' => 114,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.name.name',
'placeholder' => 'anomaly.module.navigation::field.name.placeholder',
'warning' => 'anomaly.module.navigation::field.name.warning',
'instructions' => 'anomaly.module.navigation::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 131,
'assignment_id' => 131,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.name.label.menus',
'warning' => 'anomaly.module.navigation::field.name.warning.menus',
'placeholder' => 'anomaly.module.navigation::field.name.placeholder.menus',
'instructions' => 'anomaly.module.navigation::field.name.instructions.menus',
],
],
],
[
'id' => 132,
'sort_order' => 88,
'stream_id' => 22,
'field_id' => 118,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '118',
'namespace' => 'navigation',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 118,
'field_id' => 118,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.slug.name',
'placeholder' => 'anomaly.module.navigation::field.slug.placeholder',
'warning' => 'anomaly.module.navigation::field.slug.warning',
'instructions' => 'anomaly.module.navigation::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 132,
'assignment_id' => 132,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.slug.label.menus',
'warning' => 'anomaly.module.navigation::field.slug.warning.menus',
'placeholder' => 'anomaly.module.navigation::field.slug.placeholder.menus',
'instructions' => 'anomaly.module.navigation::field.slug.instructions.menus',
],
],
],
[
'id' => 133,
'sort_order' => 89,
'stream_id' => 22,
'field_id' => 116,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '116',
'namespace' => 'navigation',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 116,
'field_id' => 116,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.description.name',
'placeholder' => 'anomaly.module.navigation::field.description.placeholder',
'warning' => 'anomaly.module.navigation::field.description.warning',
'instructions' => 'anomaly.module.navigation::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 133,
'assignment_id' => 133,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.description.label.menus',
'warning' => 'anomaly.module.navigation::field.description.warning.menus',
'placeholder' => 'anomaly.module.navigation::field.description.placeholder.menus',
'instructions' => 'anomaly.module.navigation::field.description.instructions.menus',
],
],
],
],
'translations' => [
[
'id' => 22,
'stream_id' => 22,
'locale' => 'en',
'name' => 'anomaly.module.navigation::stream.menus.name',
'description' => 'anomaly.module.navigation::stream.menus.description',
],
],
];

    
}
