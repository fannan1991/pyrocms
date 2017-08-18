<?php namespace Anomaly\Streams\Platform\Model\Dashboard;

use Anomaly\Streams\Platform\Entry\EntryModel;

class DashboardWidgetsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'dashboard_widgets';

    protected $titleName = 'title';

    protected $rules = [
'title' => 'required',
'description' => '',
'extension' => 'required',
'column' => 'required',
'dashboard' => 'required',
'allowed_roles' => '',
'pinned' => '',
];

    protected $fields = [
'title',
'description',
'extension',
'column',
'dashboard',
'allowed_roles',
'pinned',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['dashboard', 'allowed_roles'];

    protected $translatedAttributes = ['title', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Dashboard\DashboardWidgetsEntryTranslationsModel';

    protected $stream = [
'id' => '18',
'namespace' => 'dashboard',
'slug' => 'widgets',
'prefix' => 'dashboard_',
'title_column' => 'title',
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
'id' => 105,
'sort_order' => 90,
'stream_id' => 18,
'field_id' => 94,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '94',
'namespace' => 'dashboard',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 94,
'field_id' => 94,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.title.name',
'placeholder' => 'anomaly.module.dashboard::field.title.placeholder',
'warning' => 'anomaly.module.dashboard::field.title.warning',
'instructions' => 'anomaly.module.dashboard::field.title.instructions',
],
],
],
'translations' => [
[
'id' => 105,
'assignment_id' => 105,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.title.label.widgets',
'warning' => 'anomaly.module.dashboard::field.title.warning.widgets',
'placeholder' => 'anomaly.module.dashboard::field.title.placeholder.widgets',
'instructions' => 'anomaly.module.dashboard::field.title.instructions.widgets',
],
],
],
[
'id' => 106,
'sort_order' => 91,
'stream_id' => 18,
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
'id' => 106,
'assignment_id' => 106,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.description.label.widgets',
'warning' => 'anomaly.module.dashboard::field.description.warning.widgets',
'placeholder' => 'anomaly.module.dashboard::field.description.placeholder.widgets',
'instructions' => 'anomaly.module.dashboard::field.description.instructions.widgets',
],
],
],
[
'id' => 107,
'sort_order' => 92,
'stream_id' => 18,
'field_id' => 95,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '95',
'namespace' => 'dashboard',
'slug' => 'extension',
'type' => 'anomaly.field_type.addon',
'config' => 'a:2:{s:4:"type";s:9:"extension";s:6:"search";s:34:"anomaly.module.dashboard::widget.*";}',
'locked' => '1',
'translations' => [
[
'id' => 95,
'field_id' => 95,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.extension.name',
'placeholder' => 'anomaly.module.dashboard::field.extension.placeholder',
'warning' => 'anomaly.module.dashboard::field.extension.warning',
'instructions' => 'anomaly.module.dashboard::field.extension.instructions',
],
],
],
'translations' => [
[
'id' => 107,
'assignment_id' => 107,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.extension.label.widgets',
'warning' => 'anomaly.module.dashboard::field.extension.warning.widgets',
'placeholder' => 'anomaly.module.dashboard::field.extension.placeholder.widgets',
'instructions' => 'anomaly.module.dashboard::field.extension.instructions.widgets',
],
],
],
[
'id' => 108,
'sort_order' => 93,
'stream_id' => 18,
'field_id' => 96,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '96',
'namespace' => 'dashboard',
'slug' => 'column',
'type' => 'anomaly.field_type.integer',
'config' => 'a:2:{s:3:"min";i:1;s:13:"default_value";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 96,
'field_id' => 96,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.column.name',
'placeholder' => 'anomaly.module.dashboard::field.column.placeholder',
'warning' => 'anomaly.module.dashboard::field.column.warning',
'instructions' => 'anomaly.module.dashboard::field.column.instructions',
],
],
],
'translations' => [
[
'id' => 108,
'assignment_id' => 108,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.column.label.widgets',
'warning' => 'anomaly.module.dashboard::field.column.warning.widgets',
'placeholder' => 'anomaly.module.dashboard::field.column.placeholder.widgets',
'instructions' => 'anomaly.module.dashboard::field.column.instructions.widgets',
],
],
],
[
'id' => 109,
'sort_order' => 94,
'stream_id' => 18,
'field_id' => 98,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '98',
'namespace' => 'dashboard',
'slug' => 'dashboard',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:48:"Anomaly\DashboardModule\Dashboard\DashboardModel";}',
'locked' => '1',
'translations' => [
[
'id' => 98,
'field_id' => 98,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.dashboard.name',
'placeholder' => 'anomaly.module.dashboard::field.dashboard.placeholder',
'warning' => 'anomaly.module.dashboard::field.dashboard.warning',
'instructions' => 'anomaly.module.dashboard::field.dashboard.instructions',
],
],
],
'translations' => [
[
'id' => 109,
'assignment_id' => 109,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.dashboard.label.widgets',
'warning' => 'anomaly.module.dashboard::field.dashboard.warning.widgets',
'placeholder' => 'anomaly.module.dashboard::field.dashboard.placeholder.widgets',
'instructions' => 'anomaly.module.dashboard::field.dashboard.instructions.widgets',
],
],
],
[
'id' => 110,
'sort_order' => 95,
'stream_id' => 18,
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
'id' => 110,
'assignment_id' => 110,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.allowed_roles.label.widgets',
'warning' => 'anomaly.module.dashboard::field.allowed_roles.warning.widgets',
'placeholder' => 'anomaly.module.dashboard::field.allowed_roles.placeholder.widgets',
'instructions' => 'anomaly.module.dashboard::field.allowed_roles.instructions.widgets',
],
],
],
[
'id' => 111,
'sort_order' => 96,
'stream_id' => 18,
'field_id' => 97,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '97',
'namespace' => 'dashboard',
'slug' => 'pinned',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 97,
'field_id' => 97,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.pinned.name',
'placeholder' => 'anomaly.module.dashboard::field.pinned.placeholder',
'warning' => 'anomaly.module.dashboard::field.pinned.warning',
'instructions' => 'anomaly.module.dashboard::field.pinned.instructions',
],
],
],
'translations' => [
[
'id' => 111,
'assignment_id' => 111,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.pinned.label.widgets',
'warning' => 'anomaly.module.dashboard::field.pinned.warning.widgets',
'placeholder' => 'anomaly.module.dashboard::field.pinned.placeholder.widgets',
'instructions' => 'anomaly.module.dashboard::field.pinned.instructions.widgets',
],
],
],
],
'translations' => [
[
'id' => 18,
'stream_id' => 18,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::stream.widgets.name',
'description' => 'anomaly.module.dashboard::stream.widgets.description',
],
],
];

    
public function dashboard()
{

return $this->getFieldType('dashboard')->getRelation();
}

public function allowedRoles()
{

return $this->getFieldType('allowed_roles')->getRelation();
}

}
