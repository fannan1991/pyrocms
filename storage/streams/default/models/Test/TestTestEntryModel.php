<?php namespace Anomaly\Streams\Platform\Model\Test;

use Anomaly\Streams\Platform\Entry\EntryModel;

class TestTestEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'test_test';

    protected $titleName = 'name';

    protected $rules = [
'name' => 'required',
'num' => '',
];

    protected $fields = [
'name',
'num',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['name'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Test\TestTestEntryTranslationsModel';

    protected $stream = [
'id' => '55',
'namespace' => 'test',
'slug' => 'test',
'prefix' => 'test_',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '0',
'translatable' => '1',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 309,
'sort_order' => 139,
'stream_id' => 55,
'field_id' => 273,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 1,
'field' => [
'id' => '273',
'namespace' => 'test',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 273,
'field_id' => 273,
'locale' => 'en',
'name' => 'fannan.module.test::field.name.name',
'placeholder' => 'fannan.module.test::field.name.placeholder',
'warning' => 'fannan.module.test::field.name.warning',
'instructions' => 'fannan.module.test::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 309,
'assignment_id' => 309,
'locale' => 'en',
'label' => 'fannan.module.test::field.name.label.test',
'warning' => 'fannan.module.test::field.name.warning.test',
'placeholder' => 'fannan.module.test::field.name.placeholder.test',
'instructions' => 'fannan.module.test::field.name.instructions.test',
],
],
],
[
'id' => 310,
'sort_order' => 140,
'stream_id' => 55,
'field_id' => 274,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '274',
'namespace' => 'test',
'slug' => 'num',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:0;s:3:"max";i:100;s:4:"step";i:5;s:13:"default_value";i:50;}',
'locked' => '1',
'translations' => [
[
'id' => 274,
'field_id' => 274,
'locale' => 'en',
'name' => 'fannan.module.test::field.num.name',
'placeholder' => 'fannan.module.test::field.num.placeholder',
'warning' => 'fannan.module.test::field.num.warning',
'instructions' => 'fannan.module.test::field.num.instructions',
],
],
],
'translations' => [
[
'id' => 310,
'assignment_id' => 310,
'locale' => 'en',
'label' => 'fannan.module.test::field.num.label.test',
'warning' => 'fannan.module.test::field.num.warning.test',
'placeholder' => 'fannan.module.test::field.num.placeholder.test',
'instructions' => 'fannan.module.test::field.num.instructions.test',
],
],
],
],
'translations' => [
[
'id' => 55,
'stream_id' => 55,
'locale' => 'en',
'name' => 'fannan.module.test::stream.test.name',
'description' => 'fannan.module.test::stream.test.description',
],
],
];

    
}
