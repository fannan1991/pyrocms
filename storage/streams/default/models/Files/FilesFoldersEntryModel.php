<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesFoldersEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $table = 'files_folders';

    protected $titleName = 'name';

    protected $rules = [
'disk' => 'required',
'name' => 'required',
'slug' => 'required|unique:files_folders,slug',
'description' => '',
'allowed_types' => '',
];

    protected $fields = [
'disk',
'name',
'slug',
'description',
'allowed_types',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['disk'];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Files\FilesFoldersEntryTranslationsModel';

    protected $stream = [
'id' => '20',
'namespace' => 'files',
'slug' => 'folders',
'prefix' => 'files_',
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
'id' => 116,
'sort_order' => 82,
'stream_id' => 20,
'field_id' => 104,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '104',
'namespace' => 'files',
'slug' => 'disk',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\FilesModule\Disk\DiskModel";}',
'locked' => '1',
'translations' => [
[
'id' => 104,
'field_id' => 104,
'locale' => 'en',
'name' => 'anomaly.module.files::field.disk.name',
'placeholder' => 'anomaly.module.files::field.disk.placeholder',
'warning' => 'anomaly.module.files::field.disk.warning',
'instructions' => 'anomaly.module.files::field.disk.instructions',
],
],
],
'translations' => [
[
'id' => 116,
'assignment_id' => 116,
'locale' => 'en',
'label' => 'anomaly.module.files::field.disk.label.folders',
'warning' => 'anomaly.module.files::field.disk.warning.folders',
'placeholder' => 'anomaly.module.files::field.disk.placeholder.folders',
'instructions' => 'anomaly.module.files::field.disk.instructions.folders',
],
],
],
[
'id' => 117,
'sort_order' => 83,
'stream_id' => 20,
'field_id' => 100,
'config' => 'a:1:{s:3:"max";i:50;}',
'unique' => 0,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '100',
'namespace' => 'files',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 100,
'field_id' => 100,
'locale' => 'en',
'name' => 'anomaly.module.files::field.name.name',
'placeholder' => 'anomaly.module.files::field.name.placeholder',
'warning' => 'anomaly.module.files::field.name.warning',
'instructions' => 'anomaly.module.files::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 117,
'assignment_id' => 117,
'locale' => 'en',
'label' => 'anomaly.module.files::field.name.label.folders',
'warning' => 'anomaly.module.files::field.name.warning.folders',
'placeholder' => 'anomaly.module.files::field.name.placeholder.folders',
'instructions' => 'anomaly.module.files::field.name.instructions.folders',
],
],
],
[
'id' => 118,
'sort_order' => 84,
'stream_id' => 20,
'field_id' => 101,
'config' => 'a:1:{s:3:"max";i:50;}',
'unique' => 1,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '101',
'namespace' => 'files',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 101,
'field_id' => 101,
'locale' => 'en',
'name' => 'anomaly.module.files::field.slug.name',
'placeholder' => 'anomaly.module.files::field.slug.placeholder',
'warning' => 'anomaly.module.files::field.slug.warning',
'instructions' => 'anomaly.module.files::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 118,
'assignment_id' => 118,
'locale' => 'en',
'label' => 'anomaly.module.files::field.slug.label.folders',
'warning' => 'anomaly.module.files::field.slug.warning.folders',
'placeholder' => 'anomaly.module.files::field.slug.placeholder.folders',
'instructions' => 'anomaly.module.files::field.slug.instructions.folders',
],
],
],
[
'id' => 119,
'sort_order' => 85,
'stream_id' => 20,
'field_id' => 106,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 1,
'field' => [
'id' => '106',
'namespace' => 'files',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 106,
'field_id' => 106,
'locale' => 'en',
'name' => 'anomaly.module.files::field.description.name',
'placeholder' => 'anomaly.module.files::field.description.placeholder',
'warning' => 'anomaly.module.files::field.description.warning',
'instructions' => 'anomaly.module.files::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 119,
'assignment_id' => 119,
'locale' => 'en',
'label' => 'anomaly.module.files::field.description.label.folders',
'warning' => 'anomaly.module.files::field.description.warning.folders',
'placeholder' => 'anomaly.module.files::field.description.placeholder.folders',
'instructions' => 'anomaly.module.files::field.description.instructions.folders',
],
],
],
[
'id' => 120,
'sort_order' => 86,
'stream_id' => 20,
'field_id' => 107,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '107',
'namespace' => 'files',
'slug' => 'allowed_types',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 107,
'field_id' => 107,
'locale' => 'en',
'name' => 'anomaly.module.files::field.allowed_types.name',
'placeholder' => 'anomaly.module.files::field.allowed_types.placeholder',
'warning' => 'anomaly.module.files::field.allowed_types.warning',
'instructions' => 'anomaly.module.files::field.allowed_types.instructions',
],
],
],
'translations' => [
[
'id' => 120,
'assignment_id' => 120,
'locale' => 'en',
'label' => 'anomaly.module.files::field.allowed_types.label.folders',
'warning' => 'anomaly.module.files::field.allowed_types.warning.folders',
'placeholder' => 'anomaly.module.files::field.allowed_types.placeholder.folders',
'instructions' => 'anomaly.module.files::field.allowed_types.instructions.folders',
],
],
],
],
'translations' => [
[
'id' => 20,
'stream_id' => 20,
'locale' => 'en',
'name' => 'anomaly.module.files::stream.folders.name',
'description' => 'anomaly.module.files::stream.folders.description',
],
],
];

    
public function disk()
{

return $this->getFieldType('disk')->getRelation();
}

}
