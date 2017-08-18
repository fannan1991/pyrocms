<?php namespace Anomaly\Streams\Platform\Model\Dashboard;

use Anomaly\Streams\Platform\Entry\EntryModel;

class DashboardDashboardsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'dashboard_dashboards';

    protected $titleName = 'name';

    protected $rules = [
'name' => 'required',
'slug' => 'required|unique:dashboard_dashboards,slug',
'description' => '',
'layout' => 'required',
'allowed_roles' => '',
];

    protected $fields = [
'name',
'slug',
'description',
'layout',
'allowed_roles',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['allowed_roles'];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Dashboard\DashboardDashboardsEntryTranslationsModel';

    protected $stream = [
'id' => '17',
'namespace' => 'dashboard',
'slug' => 'dashboards',
'prefix' => 'dashboard_',
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
'id' => 100,
'sort_order' => 85,
'stream_id' => 17,
'field_id' => 90,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '90',
'namespace' => 'dashboard',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 90,
'field_id' => 90,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.name.name',
'placeholder' => 'anomaly.module.dashboard::field.name.placeholder',
'warning' => 'anomaly.module.dashboard::field.name.warning',
'instructions' => 'anomaly.module.dashboard::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 100,
'assignment_id' => 100,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.name.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.name.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.name.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.name.instructions.dashboards',
],
],
],
[
'id' => 101,
'sort_order' => 86,
'stream_id' => 17,
'field_id' => 91,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '91',
'namespace' => 'dashboard',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 91,
'field_id' => 91,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.slug.name',
'placeholder' => 'anomaly.module.dashboard::field.slug.placeholder',
'warning' => 'anomaly.module.dashboard::field.slug.warning',
'instructions' => 'anomaly.module.dashboard::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 101,
'assignment_id' => 101,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.slug.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.slug.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.slug.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.slug.instructions.dashboards',
],
],
],
[
'id' => 102,
'sort_order' => 87,
'stream_id' => 17,
'field_id' => 92,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '92',
'namespace' => 'dashboard',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 92,
'field_id' => 92,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.description.name',
'placeholder' => 'anomaly.module.dashboard::field.description.placeholder',
'warning' => 'anomaly.module.dashboard::field.description.warning',
'instructions' => 'anomaly.module.dashboard::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 102,
'assignment_id' => 102,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.description.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.description.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.description.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.description.instructions.dashboards',
],
],
],
[
'id' => 103,
'sort_order' => 88,
'stream_id' => 17,
'field_id' => 93,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '93',
'namespace' => 'dashboard',
'slug' => 'layout',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:9:{i:24;s:48:"anomaly.module.dashboard::field.layout.option.24";s:5:"12-12";s:51:"anomaly.module.dashboard::field.layout.option.12-12";s:4:"16-8";s:50:"anomaly.module.dashboard::field.layout.option.16-8";s:4:"8-16";s:50:"anomaly.module.dashboard::field.layout.option.8-16";s:5:"8-8-8";s:51:"anomaly.module.dashboard::field.layout.option.8-8-8";s:6:"6-12-6";s:52:"anomaly.module.dashboard::field.layout.option.6-12-6";s:6:"12-6-6";s:52:"anomaly.module.dashboard::field.layout.option.12-6-6";s:6:"6-6-12";s:52:"anomaly.module.dashboard::field.layout.option.6-6-12";s:7:"6-6-6-6";s:53:"anomaly.module.dashboard::field.layout.option.6-6-6-6";}}',
'locked' => '1',
'translations' => [
[
'id' => 93,
'field_id' => 93,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.layout.name',
'placeholder' => 'anomaly.module.dashboard::field.layout.placeholder',
'warning' => 'anomaly.module.dashboard::field.layout.warning',
'instructions' => 'anomaly.module.dashboard::field.layout.instructions',
],
],
],
'translations' => [
[
'id' => 103,
'assignment_id' => 103,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.layout.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.layout.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.layout.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.layout.instructions.dashboards',
],
],
],
[
'id' => 104,
'sort_order' => 89,
'stream_id' => 17,
'field_id' => 99,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '99',
'namespace' => 'dashboard',
'slug' => 'allowed_roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => 99,
'field_id' => 99,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.allowed_roles.name',
'placeholder' => 'anomaly.module.dashboard::field.allowed_roles.placeholder',
'warning' => 'anomaly.module.dashboard::field.allowed_roles.warning',
'instructions' => 'anomaly.module.dashboard::field.allowed_roles.instructions',
],
],
],
'translations' => [
[
'id' => 104,
'assignment_id' => 104,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.allowed_roles.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.allowed_roles.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.allowed_roles.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.allowed_roles.instructions.dashboards',
],
],
],
],
'translations' => [
[
'id' => 17,
'stream_id' => 17,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::stream.dashboards.name',
'description' => 'anomaly.module.dashboard::stream.dashboards.description',
],
],
];

    
public function allowedRoles()
{

return $this->getFieldType('allowed_roles')->getRelation();
}

}
