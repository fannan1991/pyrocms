<?php namespace Anomaly\Streams\Platform\Model\Navigation;

use Anomaly\Streams\Platform\Entry\EntryModel;

class NavigationLinksEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'navigation_links';

    protected $titleName = 'id';

    protected $rules = [
'menu' => 'required',
'type' => 'required',
'entry' => 'required',
'target' => 'required',
'class' => '',
'parent' => '',
'allowed_roles' => '',
];

    protected $fields = [
'menu',
'type',
'entry',
'target',
'class',
'parent',
'allowed_roles',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['menu', 'entry', 'parent', 'allowed_roles'];

    

    

    

    protected $stream = [
'id' => '23',
'namespace' => 'navigation',
'slug' => 'links',
'prefix' => 'navigation_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '1',
'searchable' => '0',
'trashable' => '1',
'translatable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 134,
'sort_order' => 90,
'stream_id' => 23,
'field_id' => 119,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '119',
'namespace' => 'navigation',
'slug' => 'menu',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Anomaly\NavigationModule\Menu\MenuModel";}',
'locked' => '1',
'translations' => [
[
'id' => 119,
'field_id' => 119,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.menu.name',
'placeholder' => 'anomaly.module.navigation::field.menu.placeholder',
'warning' => 'anomaly.module.navigation::field.menu.warning',
'instructions' => 'anomaly.module.navigation::field.menu.instructions',
],
],
],
'translations' => [
[
'id' => 134,
'assignment_id' => 134,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.menu.label.links',
'warning' => 'anomaly.module.navigation::field.menu.warning.links',
'placeholder' => 'anomaly.module.navigation::field.menu.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.menu.instructions.links',
],
],
],
[
'id' => 135,
'sort_order' => 91,
'stream_id' => 23,
'field_id' => 122,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '122',
'namespace' => 'navigation',
'slug' => 'type',
'type' => 'anomaly.field_type.addon',
'config' => 'a:2:{s:4:"type";s:9:"extension";s:6:"search";s:38:"anomaly.module.navigation::link_type.*";}',
'locked' => '1',
'translations' => [
[
'id' => 122,
'field_id' => 122,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.type.name',
'placeholder' => 'anomaly.module.navigation::field.type.placeholder',
'warning' => 'anomaly.module.navigation::field.type.warning',
'instructions' => 'anomaly.module.navigation::field.type.instructions',
],
],
],
'translations' => [
[
'id' => 135,
'assignment_id' => 135,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.type.label.links',
'warning' => 'anomaly.module.navigation::field.type.warning.links',
'placeholder' => 'anomaly.module.navigation::field.type.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.type.instructions.links',
],
],
],
[
'id' => 136,
'sort_order' => 92,
'stream_id' => 23,
'field_id' => 117,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '117',
'namespace' => 'navigation',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 117,
'field_id' => 117,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.entry.name',
'placeholder' => 'anomaly.module.navigation::field.entry.placeholder',
'warning' => 'anomaly.module.navigation::field.entry.warning',
'instructions' => 'anomaly.module.navigation::field.entry.instructions',
],
],
],
'translations' => [
[
'id' => 136,
'assignment_id' => 136,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.entry.label.links',
'warning' => 'anomaly.module.navigation::field.entry.warning.links',
'placeholder' => 'anomaly.module.navigation::field.entry.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.entry.instructions.links',
],
],
],
[
'id' => 137,
'sort_order' => 93,
'stream_id' => 23,
'field_id' => 123,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '123',
'namespace' => 'navigation',
'slug' => 'target',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:13:"default_value";s:5:"_self";s:7:"options";a:2:{s:5:"_self";s:51:"anomaly.module.navigation::field.target.option.self";s:6:"_blank";s:52:"anomaly.module.navigation::field.target.option.blank";}}',
'locked' => '1',
'translations' => [
[
'id' => 123,
'field_id' => 123,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.target.name',
'placeholder' => 'anomaly.module.navigation::field.target.placeholder',
'warning' => 'anomaly.module.navigation::field.target.warning',
'instructions' => 'anomaly.module.navigation::field.target.instructions',
],
],
],
'translations' => [
[
'id' => 137,
'assignment_id' => 137,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.target.label.links',
'warning' => 'anomaly.module.navigation::field.target.warning.links',
'placeholder' => 'anomaly.module.navigation::field.target.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.target.instructions.links',
],
],
],
[
'id' => 138,
'sort_order' => 94,
'stream_id' => 23,
'field_id' => 115,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '115',
'namespace' => 'navigation',
'slug' => 'class',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 115,
'field_id' => 115,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.class.name',
'placeholder' => 'anomaly.module.navigation::field.class.placeholder',
'warning' => 'anomaly.module.navigation::field.class.warning',
'instructions' => 'anomaly.module.navigation::field.class.instructions',
],
],
],
'translations' => [
[
'id' => 138,
'assignment_id' => 138,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.class.label.links',
'warning' => 'anomaly.module.navigation::field.class.warning.links',
'placeholder' => 'anomaly.module.navigation::field.class.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.class.instructions.links',
],
],
],
[
'id' => 139,
'sort_order' => 95,
'stream_id' => 23,
'field_id' => 120,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '120',
'namespace' => 'navigation',
'slug' => 'parent',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Anomaly\NavigationModule\Link\LinkModel";}',
'locked' => '1',
'translations' => [
[
'id' => 120,
'field_id' => 120,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.parent.name',
'placeholder' => 'anomaly.module.navigation::field.parent.placeholder',
'warning' => 'anomaly.module.navigation::field.parent.warning',
'instructions' => 'anomaly.module.navigation::field.parent.instructions',
],
],
],
'translations' => [
[
'id' => 139,
'assignment_id' => 139,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.parent.label.links',
'warning' => 'anomaly.module.navigation::field.parent.warning.links',
'placeholder' => 'anomaly.module.navigation::field.parent.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.parent.instructions.links',
],
],
],
[
'id' => 140,
'sort_order' => 96,
'stream_id' => 23,
'field_id' => 121,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '121',
'namespace' => 'navigation',
'slug' => 'allowed_roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => 121,
'field_id' => 121,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.allowed_roles.name',
'placeholder' => 'anomaly.module.navigation::field.allowed_roles.placeholder',
'warning' => 'anomaly.module.navigation::field.allowed_roles.warning',
'instructions' => 'anomaly.module.navigation::field.allowed_roles.instructions',
],
],
],
'translations' => [
[
'id' => 140,
'assignment_id' => 140,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.allowed_roles.label.links',
'warning' => 'anomaly.module.navigation::field.allowed_roles.warning.links',
'placeholder' => 'anomaly.module.navigation::field.allowed_roles.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.allowed_roles.instructions.links',
],
],
],
],
'translations' => [
[
'id' => 23,
'stream_id' => 23,
'locale' => 'en',
'name' => 'anomaly.module.navigation::stream.links.name',
'description' => 'anomaly.module.navigation::stream.links.description',
],
],
];

    
public function menu()
{

return $this->getFieldType('menu')->getRelation();
}

public function entry()
{

return $this->getFieldType('entry')->getRelation();
}

public function parent()
{

return $this->getFieldType('parent')->getRelation();
}

public function allowedRoles()
{

return $this->getFieldType('allowed_roles')->getRelation();
}

}
