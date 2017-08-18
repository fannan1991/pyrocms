<?php namespace Anomaly\Streams\Platform\Model\Pages;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PagesPagesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = true;

    protected $table = 'pages_pages';

    protected $titleName = 'title';

    protected $rules = [
'str_id' => 'required',
'title' => 'required',
'slug' => 'required',
'path' => 'required',
'type' => 'required',
'entry' => '',
'parent' => '',
'visible' => '',
'enabled' => '',
'exact' => '',
'home' => '',
'meta_title' => '',
'meta_description' => '',
'meta_keywords' => '',
'theme_layout' => '',
'allowed_roles' => '',
];

    protected $fields = [
'str_id',
'title',
'slug',
'path',
'type',
'entry',
'parent',
'visible',
'enabled',
'exact',
'home',
'meta_title',
'meta_description',
'meta_keywords',
'theme_layout',
'allowed_roles',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['type', 'entry', 'parent', 'allowed_roles'];

    protected $translatedAttributes = ['title', 'meta_title', 'meta_description', 'meta_keywords'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Pages\PagesPagesEntryTranslationsModel';

    protected $stream = [
'id' => '24',
'namespace' => 'pages',
'slug' => 'pages',
'prefix' => 'pages_',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '1',
'searchable' => '1',
'trashable' => '1',
'translatable' => '1',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 141,
'sort_order' => 75,
'stream_id' => 24,
'field_id' => 124,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '124',
'namespace' => 'pages',
'slug' => 'str_id',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 124,
'field_id' => 124,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.str_id.name',
'placeholder' => 'anomaly.module.pages::field.str_id.placeholder',
'warning' => 'anomaly.module.pages::field.str_id.warning',
'instructions' => 'anomaly.module.pages::field.str_id.instructions',
],
],
],
'translations' => [
[
'id' => 141,
'assignment_id' => 141,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.str_id.label.pages',
'warning' => 'anomaly.module.pages::field.str_id.warning.pages',
'placeholder' => 'anomaly.module.pages::field.str_id.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.str_id.instructions.pages',
],
],
],
[
'id' => 142,
'sort_order' => 76,
'stream_id' => 24,
'field_id' => 125,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '125',
'namespace' => 'pages',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 125,
'field_id' => 125,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.title.name',
'placeholder' => 'anomaly.module.pages::field.title.placeholder',
'warning' => 'anomaly.module.pages::field.title.warning',
'instructions' => 'anomaly.module.pages::field.title.instructions',
],
],
],
'translations' => [
[
'id' => 142,
'assignment_id' => 142,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.title.label.pages',
'warning' => 'anomaly.module.pages::field.title.warning.pages',
'placeholder' => 'anomaly.module.pages::field.title.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.title.instructions.pages',
],
],
],
[
'id' => 143,
'sort_order' => 77,
'stream_id' => 24,
'field_id' => 126,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '126',
'namespace' => 'pages',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:2:{s:7:"slugify";s:5:"title";s:4:"type";s:1:"-";}',
'locked' => '1',
'translations' => [
[
'id' => 126,
'field_id' => 126,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.slug.name',
'placeholder' => 'anomaly.module.pages::field.slug.placeholder',
'warning' => 'anomaly.module.pages::field.slug.warning',
'instructions' => 'anomaly.module.pages::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 143,
'assignment_id' => 143,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.slug.label.pages',
'warning' => 'anomaly.module.pages::field.slug.warning.pages',
'placeholder' => 'anomaly.module.pages::field.slug.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.slug.instructions.pages',
],
],
],
[
'id' => 144,
'sort_order' => 78,
'stream_id' => 24,
'field_id' => 128,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '128',
'namespace' => 'pages',
'slug' => 'path',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 128,
'field_id' => 128,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.path.name',
'placeholder' => 'anomaly.module.pages::field.path.placeholder',
'warning' => 'anomaly.module.pages::field.path.warning',
'instructions' => 'anomaly.module.pages::field.path.instructions',
],
],
],
'translations' => [
[
'id' => 144,
'assignment_id' => 144,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.path.label.pages',
'warning' => 'anomaly.module.pages::field.path.warning.pages',
'placeholder' => 'anomaly.module.pages::field.path.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.path.instructions.pages',
],
],
],
[
'id' => 145,
'sort_order' => 79,
'stream_id' => 24,
'field_id' => 138,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '138',
'namespace' => 'pages',
'slug' => 'type',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\PagesModule\Type\TypeModel";}',
'locked' => '1',
'translations' => [
[
'id' => 138,
'field_id' => 138,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.type.name',
'placeholder' => 'anomaly.module.pages::field.type.placeholder',
'warning' => 'anomaly.module.pages::field.type.warning',
'instructions' => 'anomaly.module.pages::field.type.instructions',
],
],
],
'translations' => [
[
'id' => 145,
'assignment_id' => 145,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.type.label.pages',
'warning' => 'anomaly.module.pages::field.type.warning.pages',
'placeholder' => 'anomaly.module.pages::field.type.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.type.instructions.pages',
],
],
],
[
'id' => 146,
'sort_order' => 80,
'stream_id' => 24,
'field_id' => 142,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '142',
'namespace' => 'pages',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 142,
'field_id' => 142,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.entry.name',
'placeholder' => 'anomaly.module.pages::field.entry.placeholder',
'warning' => 'anomaly.module.pages::field.entry.warning',
'instructions' => 'anomaly.module.pages::field.entry.instructions',
],
],
],
'translations' => [
[
'id' => 146,
'assignment_id' => 146,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.entry.label.pages',
'warning' => 'anomaly.module.pages::field.entry.warning.pages',
'placeholder' => 'anomaly.module.pages::field.entry.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.entry.instructions.pages',
],
],
],
[
'id' => 147,
'sort_order' => 81,
'stream_id' => 24,
'field_id' => 136,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '136',
'namespace' => 'pages',
'slug' => 'parent',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\PagesModule\Page\PageModel";}',
'locked' => '1',
'translations' => [
[
'id' => 136,
'field_id' => 136,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.parent.name',
'placeholder' => 'anomaly.module.pages::field.parent.placeholder',
'warning' => 'anomaly.module.pages::field.parent.warning',
'instructions' => 'anomaly.module.pages::field.parent.instructions',
],
],
],
'translations' => [
[
'id' => 147,
'assignment_id' => 147,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.parent.label.pages',
'warning' => 'anomaly.module.pages::field.parent.warning.pages',
'placeholder' => 'anomaly.module.pages::field.parent.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.parent.instructions.pages',
],
],
],
[
'id' => 148,
'sort_order' => 82,
'stream_id' => 24,
'field_id' => 140,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '140',
'namespace' => 'pages',
'slug' => 'visible',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:1;}',
'locked' => '1',
'translations' => [
[
'id' => 140,
'field_id' => 140,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.visible.name',
'placeholder' => 'anomaly.module.pages::field.visible.placeholder',
'warning' => 'anomaly.module.pages::field.visible.warning',
'instructions' => 'anomaly.module.pages::field.visible.instructions',
],
],
],
'translations' => [
[
'id' => 148,
'assignment_id' => 148,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.visible.label.pages',
'warning' => 'anomaly.module.pages::field.visible.warning.pages',
'placeholder' => 'anomaly.module.pages::field.visible.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.visible.instructions.pages',
],
],
],
[
'id' => 149,
'sort_order' => 83,
'stream_id' => 24,
'field_id' => 129,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '129',
'namespace' => 'pages',
'slug' => 'enabled',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:1;}',
'locked' => '1',
'translations' => [
[
'id' => 129,
'field_id' => 129,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.enabled.name',
'placeholder' => 'anomaly.module.pages::field.enabled.placeholder',
'warning' => 'anomaly.module.pages::field.enabled.warning',
'instructions' => 'anomaly.module.pages::field.enabled.instructions',
],
],
],
'translations' => [
[
'id' => 149,
'assignment_id' => 149,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.enabled.label.pages',
'warning' => 'anomaly.module.pages::field.enabled.warning.pages',
'placeholder' => 'anomaly.module.pages::field.enabled.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.enabled.instructions.pages',
],
],
],
[
'id' => 150,
'sort_order' => 84,
'stream_id' => 24,
'field_id' => 141,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '141',
'namespace' => 'pages',
'slug' => 'exact',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:1;}',
'locked' => '1',
'translations' => [
[
'id' => 141,
'field_id' => 141,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.exact.name',
'placeholder' => 'anomaly.module.pages::field.exact.placeholder',
'warning' => 'anomaly.module.pages::field.exact.warning',
'instructions' => 'anomaly.module.pages::field.exact.instructions',
],
],
],
'translations' => [
[
'id' => 150,
'assignment_id' => 150,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.exact.label.pages',
'warning' => 'anomaly.module.pages::field.exact.warning.pages',
'placeholder' => 'anomaly.module.pages::field.exact.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.exact.instructions.pages',
],
],
],
[
'id' => 151,
'sort_order' => 85,
'stream_id' => 24,
'field_id' => 130,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '130',
'namespace' => 'pages',
'slug' => 'home',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => 130,
'field_id' => 130,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.home.name',
'placeholder' => 'anomaly.module.pages::field.home.placeholder',
'warning' => 'anomaly.module.pages::field.home.warning',
'instructions' => 'anomaly.module.pages::field.home.instructions',
],
],
],
'translations' => [
[
'id' => 151,
'assignment_id' => 151,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.home.label.pages',
'warning' => 'anomaly.module.pages::field.home.warning.pages',
'placeholder' => 'anomaly.module.pages::field.home.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.home.instructions.pages',
],
],
],
[
'id' => 152,
'sort_order' => 86,
'stream_id' => 24,
'field_id' => 131,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '131',
'namespace' => 'pages',
'slug' => 'meta_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 131,
'field_id' => 131,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.meta_title.name',
'placeholder' => 'anomaly.module.pages::field.meta_title.placeholder',
'warning' => 'anomaly.module.pages::field.meta_title.warning',
'instructions' => 'anomaly.module.pages::field.meta_title.instructions',
],
],
],
'translations' => [
[
'id' => 152,
'assignment_id' => 152,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_title.label.pages',
'warning' => 'anomaly.module.pages::field.meta_title.warning.pages',
'placeholder' => 'anomaly.module.pages::field.meta_title.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.meta_title.instructions.pages',
],
],
],
[
'id' => 153,
'sort_order' => 87,
'stream_id' => 24,
'field_id' => 132,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '132',
'namespace' => 'pages',
'slug' => 'meta_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 132,
'field_id' => 132,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.meta_description.name',
'placeholder' => 'anomaly.module.pages::field.meta_description.placeholder',
'warning' => 'anomaly.module.pages::field.meta_description.warning',
'instructions' => 'anomaly.module.pages::field.meta_description.instructions',
],
],
],
'translations' => [
[
'id' => 153,
'assignment_id' => 153,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_description.label.pages',
'warning' => 'anomaly.module.pages::field.meta_description.warning.pages',
'placeholder' => 'anomaly.module.pages::field.meta_description.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.meta_description.instructions.pages',
],
],
],
[
'id' => 154,
'sort_order' => 88,
'stream_id' => 24,
'field_id' => 133,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '133',
'namespace' => 'pages',
'slug' => 'meta_keywords',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 133,
'field_id' => 133,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.meta_keywords.name',
'placeholder' => 'anomaly.module.pages::field.meta_keywords.placeholder',
'warning' => 'anomaly.module.pages::field.meta_keywords.warning',
'instructions' => 'anomaly.module.pages::field.meta_keywords.instructions',
],
],
],
'translations' => [
[
'id' => 154,
'assignment_id' => 154,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_keywords.label.pages',
'warning' => 'anomaly.module.pages::field.meta_keywords.warning.pages',
'placeholder' => 'anomaly.module.pages::field.meta_keywords.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.meta_keywords.instructions.pages',
],
],
],
[
'id' => 155,
'sort_order' => 89,
'stream_id' => 24,
'field_id' => 137,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '137',
'namespace' => 'pages',
'slug' => 'theme_layout',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:13:"default_value";s:27:"theme::layouts/default.twig";s:7:"handler";s:46:"Anomaly\SelectFieldType\Handler\Layouts@handle";}',
'locked' => '1',
'translations' => [
[
'id' => 137,
'field_id' => 137,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.theme_layout.name',
'placeholder' => 'anomaly.module.pages::field.theme_layout.placeholder',
'warning' => 'anomaly.module.pages::field.theme_layout.warning',
'instructions' => 'anomaly.module.pages::field.theme_layout.instructions',
],
],
],
'translations' => [
[
'id' => 155,
'assignment_id' => 155,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.theme_layout.label.pages',
'warning' => 'anomaly.module.pages::field.theme_layout.warning.pages',
'placeholder' => 'anomaly.module.pages::field.theme_layout.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.theme_layout.instructions.pages',
],
],
],
[
'id' => 156,
'sort_order' => 90,
'stream_id' => 24,
'field_id' => 135,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '135',
'namespace' => 'pages',
'slug' => 'allowed_roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => 135,
'field_id' => 135,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.allowed_roles.name',
'placeholder' => 'anomaly.module.pages::field.allowed_roles.placeholder',
'warning' => 'anomaly.module.pages::field.allowed_roles.warning',
'instructions' => 'anomaly.module.pages::field.allowed_roles.instructions',
],
],
],
'translations' => [
[
'id' => 156,
'assignment_id' => 156,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.allowed_roles.label.pages',
'warning' => 'anomaly.module.pages::field.allowed_roles.warning.pages',
'placeholder' => 'anomaly.module.pages::field.allowed_roles.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.allowed_roles.instructions.pages',
],
],
],
],
'translations' => [
[
'id' => 24,
'stream_id' => 24,
'locale' => 'en',
'name' => 'anomaly.module.pages::stream.pages.name',
'description' => 'anomaly.module.pages::stream.pages.description',
],
],
];

    
public function type()
{

return $this->getFieldType('type')->getRelation();
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
