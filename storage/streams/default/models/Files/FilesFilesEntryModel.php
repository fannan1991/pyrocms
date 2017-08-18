<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesFilesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = true;

    protected $table = 'files_files';

    protected $titleName = 'name';

    protected $rules = [
'name' => 'required',
'disk' => 'required',
'folder' => 'required',
'extension' => 'required',
'size' => 'required',
'mime_type' => 'required',
'entry' => '',
'keywords' => '',
'height' => '',
'width' => '',
];

    protected $fields = [
'name',
'disk',
'folder',
'extension',
'size',
'mime_type',
'entry',
'keywords',
'height',
'width',
];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['disk', 'folder', 'entry'];

    

    

    

    protected $stream = [
'id' => '21',
'namespace' => 'files',
'slug' => 'files',
'prefix' => 'files_',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '1',
'trashable' => '1',
'translatable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 121,
'sort_order' => 87,
'stream_id' => 21,
'field_id' => 100,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
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
'id' => 121,
'assignment_id' => 121,
'locale' => 'en',
'label' => 'anomaly.module.files::field.name.label.files',
'warning' => 'anomaly.module.files::field.name.warning.files',
'placeholder' => 'anomaly.module.files::field.name.placeholder.files',
'instructions' => 'anomaly.module.files::field.name.instructions.files',
],
],
],
[
'id' => 122,
'sort_order' => 88,
'stream_id' => 21,
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
'id' => 122,
'assignment_id' => 122,
'locale' => 'en',
'label' => 'anomaly.module.files::field.disk.label.files',
'warning' => 'anomaly.module.files::field.disk.warning.files',
'placeholder' => 'anomaly.module.files::field.disk.placeholder.files',
'instructions' => 'anomaly.module.files::field.disk.instructions.files',
],
],
],
[
'id' => 123,
'sort_order' => 89,
'stream_id' => 21,
'field_id' => 103,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '103',
'namespace' => 'files',
'slug' => 'folder',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:38:"Anomaly\FilesModule\Folder\FolderModel";}',
'locked' => '1',
'translations' => [
[
'id' => 103,
'field_id' => 103,
'locale' => 'en',
'name' => 'anomaly.module.files::field.folder.name',
'placeholder' => 'anomaly.module.files::field.folder.placeholder',
'warning' => 'anomaly.module.files::field.folder.warning',
'instructions' => 'anomaly.module.files::field.folder.instructions',
],
],
],
'translations' => [
[
'id' => 123,
'assignment_id' => 123,
'locale' => 'en',
'label' => 'anomaly.module.files::field.folder.label.files',
'warning' => 'anomaly.module.files::field.folder.warning.files',
'placeholder' => 'anomaly.module.files::field.folder.placeholder.files',
'instructions' => 'anomaly.module.files::field.folder.instructions.files',
],
],
],
[
'id' => 124,
'sort_order' => 90,
'stream_id' => 21,
'field_id' => 109,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '109',
'namespace' => 'files',
'slug' => 'extension',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 109,
'field_id' => 109,
'locale' => 'en',
'name' => 'anomaly.module.files::field.extension.name',
'placeholder' => 'anomaly.module.files::field.extension.placeholder',
'warning' => 'anomaly.module.files::field.extension.warning',
'instructions' => 'anomaly.module.files::field.extension.instructions',
],
],
],
'translations' => [
[
'id' => 124,
'assignment_id' => 124,
'locale' => 'en',
'label' => 'anomaly.module.files::field.extension.label.files',
'warning' => 'anomaly.module.files::field.extension.warning.files',
'placeholder' => 'anomaly.module.files::field.extension.placeholder.files',
'instructions' => 'anomaly.module.files::field.extension.instructions.files',
],
],
],
[
'id' => 125,
'sort_order' => 91,
'stream_id' => 21,
'field_id' => 113,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '113',
'namespace' => 'files',
'slug' => 'size',
'type' => 'anomaly.field_type.integer',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 113,
'field_id' => 113,
'locale' => 'en',
'name' => 'anomaly.module.files::field.size.name',
'placeholder' => 'anomaly.module.files::field.size.placeholder',
'warning' => 'anomaly.module.files::field.size.warning',
'instructions' => 'anomaly.module.files::field.size.instructions',
],
],
],
'translations' => [
[
'id' => 125,
'assignment_id' => 125,
'locale' => 'en',
'label' => 'anomaly.module.files::field.size.label.files',
'warning' => 'anomaly.module.files::field.size.warning.files',
'placeholder' => 'anomaly.module.files::field.size.placeholder.files',
'instructions' => 'anomaly.module.files::field.size.instructions.files',
],
],
],
[
'id' => 126,
'sort_order' => 92,
'stream_id' => 21,
'field_id' => 112,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '112',
'namespace' => 'files',
'slug' => 'mime_type',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 112,
'field_id' => 112,
'locale' => 'en',
'name' => 'anomaly.module.files::field.mime_type.name',
'placeholder' => 'anomaly.module.files::field.mime_type.placeholder',
'warning' => 'anomaly.module.files::field.mime_type.warning',
'instructions' => 'anomaly.module.files::field.mime_type.instructions',
],
],
],
'translations' => [
[
'id' => 126,
'assignment_id' => 126,
'locale' => 'en',
'label' => 'anomaly.module.files::field.mime_type.label.files',
'warning' => 'anomaly.module.files::field.mime_type.warning.files',
'placeholder' => 'anomaly.module.files::field.mime_type.placeholder.files',
'instructions' => 'anomaly.module.files::field.mime_type.instructions.files',
],
],
],
[
'id' => 127,
'sort_order' => 93,
'stream_id' => 21,
'field_id' => 105,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '105',
'namespace' => 'files',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 105,
'field_id' => 105,
'locale' => 'en',
'name' => 'anomaly.module.files::field.entry.name',
'placeholder' => 'anomaly.module.files::field.entry.placeholder',
'warning' => 'anomaly.module.files::field.entry.warning',
'instructions' => 'anomaly.module.files::field.entry.instructions',
],
],
],
'translations' => [
[
'id' => 127,
'assignment_id' => 127,
'locale' => 'en',
'label' => 'anomaly.module.files::field.entry.label.files',
'warning' => 'anomaly.module.files::field.entry.warning.files',
'placeholder' => 'anomaly.module.files::field.entry.placeholder.files',
'instructions' => 'anomaly.module.files::field.entry.instructions.files',
],
],
],
[
'id' => 128,
'sort_order' => 94,
'stream_id' => 21,
'field_id' => 108,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '108',
'namespace' => 'files',
'slug' => 'keywords',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 108,
'field_id' => 108,
'locale' => 'en',
'name' => 'anomaly.module.files::field.keywords.name',
'placeholder' => 'anomaly.module.files::field.keywords.placeholder',
'warning' => 'anomaly.module.files::field.keywords.warning',
'instructions' => 'anomaly.module.files::field.keywords.instructions',
],
],
],
'translations' => [
[
'id' => 128,
'assignment_id' => 128,
'locale' => 'en',
'label' => 'anomaly.module.files::field.keywords.label.files',
'warning' => 'anomaly.module.files::field.keywords.warning.files',
'placeholder' => 'anomaly.module.files::field.keywords.placeholder.files',
'instructions' => 'anomaly.module.files::field.keywords.instructions.files',
],
],
],
[
'id' => 129,
'sort_order' => 95,
'stream_id' => 21,
'field_id' => 111,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '111',
'namespace' => 'files',
'slug' => 'height',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 111,
'field_id' => 111,
'locale' => 'en',
'name' => 'anomaly.module.files::field.height.name',
'placeholder' => 'anomaly.module.files::field.height.placeholder',
'warning' => 'anomaly.module.files::field.height.warning',
'instructions' => 'anomaly.module.files::field.height.instructions',
],
],
],
'translations' => [
[
'id' => 129,
'assignment_id' => 129,
'locale' => 'en',
'label' => 'anomaly.module.files::field.height.label.files',
'warning' => 'anomaly.module.files::field.height.warning.files',
'placeholder' => 'anomaly.module.files::field.height.placeholder.files',
'instructions' => 'anomaly.module.files::field.height.instructions.files',
],
],
],
[
'id' => 130,
'sort_order' => 96,
'stream_id' => 21,
'field_id' => 110,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '110',
'namespace' => 'files',
'slug' => 'width',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 110,
'field_id' => 110,
'locale' => 'en',
'name' => 'anomaly.module.files::field.width.name',
'placeholder' => 'anomaly.module.files::field.width.placeholder',
'warning' => 'anomaly.module.files::field.width.warning',
'instructions' => 'anomaly.module.files::field.width.instructions',
],
],
],
'translations' => [
[
'id' => 130,
'assignment_id' => 130,
'locale' => 'en',
'label' => 'anomaly.module.files::field.width.label.files',
'warning' => 'anomaly.module.files::field.width.warning.files',
'placeholder' => 'anomaly.module.files::field.width.placeholder.files',
'instructions' => 'anomaly.module.files::field.width.instructions.files',
],
],
],
],
'translations' => [
[
'id' => 21,
'stream_id' => 21,
'locale' => 'en',
'name' => 'anomaly.module.files::stream.files.name',
'description' => 'anomaly.module.files::stream.files.description',
],
],
];

    
public function disk()
{

return $this->getFieldType('disk')->getRelation();
}

public function folder()
{

return $this->getFieldType('folder')->getRelation();
}

public function entry()
{

return $this->getFieldType('entry')->getRelation();
}

}
