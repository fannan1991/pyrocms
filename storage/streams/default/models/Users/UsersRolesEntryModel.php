<?php namespace Anomaly\Streams\Platform\Model\Users;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UsersRolesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'users_roles';

    protected $titleName = 'name';

    protected $rules = [
'name' => 'required',
'slug' => 'required|unique:users_roles,slug',
'description' => '',
'permissions' => '',
];

    protected $fields = [
'name',
'slug',
'description',
'permissions',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Users\UsersRolesEntryTranslationsModel';

    protected $stream = [
'id' => '33',
'namespace' => 'users',
'slug' => 'roles',
'prefix' => 'users_',
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
'id' => 211,
'sort_order' => 115,
'stream_id' => 33,
'field_id' => 186,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '186',
'namespace' => 'users',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 186,
'field_id' => 186,
'locale' => 'en',
'name' => 'anomaly.module.users::field.name.name',
'placeholder' => 'anomaly.module.users::field.name.placeholder',
'warning' => 'anomaly.module.users::field.name.warning',
'instructions' => 'anomaly.module.users::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 211,
'assignment_id' => 211,
'locale' => 'en',
'label' => 'anomaly.module.users::field.name.label.roles',
'warning' => 'anomaly.module.users::field.name.warning.roles',
'placeholder' => 'anomaly.module.users::field.name.placeholder.roles',
'instructions' => 'anomaly.module.users::field.name.instructions.roles',
],
],
],
[
'id' => 212,
'sort_order' => 116,
'stream_id' => 33,
'field_id' => 194,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '194',
'namespace' => 'users',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 194,
'field_id' => 194,
'locale' => 'en',
'name' => 'anomaly.module.users::field.slug.name',
'placeholder' => 'anomaly.module.users::field.slug.placeholder',
'warning' => 'anomaly.module.users::field.slug.warning',
'instructions' => 'anomaly.module.users::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 212,
'assignment_id' => 212,
'locale' => 'en',
'label' => 'anomaly.module.users::field.slug.label.roles',
'warning' => 'anomaly.module.users::field.slug.warning.roles',
'placeholder' => 'anomaly.module.users::field.slug.placeholder.roles',
'instructions' => 'anomaly.module.users::field.slug.instructions.roles',
],
],
],
[
'id' => 213,
'sort_order' => 117,
'stream_id' => 33,
'field_id' => 187,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '187',
'namespace' => 'users',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 187,
'field_id' => 187,
'locale' => 'en',
'name' => 'anomaly.module.users::field.description.name',
'placeholder' => 'anomaly.module.users::field.description.placeholder',
'warning' => 'anomaly.module.users::field.description.warning',
'instructions' => 'anomaly.module.users::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 213,
'assignment_id' => 213,
'locale' => 'en',
'label' => 'anomaly.module.users::field.description.label.roles',
'warning' => 'anomaly.module.users::field.description.warning.roles',
'placeholder' => 'anomaly.module.users::field.description.placeholder.roles',
'instructions' => 'anomaly.module.users::field.description.instructions.roles',
],
],
],
[
'id' => 214,
'sort_order' => 118,
'stream_id' => 33,
'field_id' => 182,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '182',
'namespace' => 'users',
'slug' => 'permissions',
'type' => 'anomaly.field_type.checkboxes',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 182,
'field_id' => 182,
'locale' => 'en',
'name' => 'anomaly.module.users::field.permissions.name',
'placeholder' => 'anomaly.module.users::field.permissions.placeholder',
'warning' => 'anomaly.module.users::field.permissions.warning',
'instructions' => 'anomaly.module.users::field.permissions.instructions',
],
],
],
'translations' => [
[
'id' => 214,
'assignment_id' => 214,
'locale' => 'en',
'label' => 'anomaly.module.users::field.permissions.label.roles',
'warning' => 'anomaly.module.users::field.permissions.warning.roles',
'placeholder' => 'anomaly.module.users::field.permissions.placeholder.roles',
'instructions' => 'anomaly.module.users::field.permissions.instructions.roles',
],
],
],
],
'translations' => [
[
'id' => 33,
'stream_id' => 33,
'locale' => 'en',
'name' => 'anomaly.module.users::stream.roles.name',
'description' => 'anomaly.module.users::stream.roles.description',
],
],
];

    
}
