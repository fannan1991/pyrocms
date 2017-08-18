<?php namespace Anomaly\Streams\Platform\Model\Envelopes;

use Anomaly\Streams\Platform\Entry\EntryModel;

class EnvelopesEnvelopesEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'envelopes_envelopes';

    protected $titleName = 'id';

    protected $rules = [
'envelopes_amount_min' => 'required',
'envelopes_amount_max' => 'required',
'envelopes_visitor_times' => 'required',
'envelopes_ordinary_times' => 'required',
'envelopes_silver_times' => 'required',
'envelopes_gold_times' => 'required',
'envelopes_diamond_times' => 'required',
'envelopes_is_open' => '',
];

    protected $fields = [
'envelopes_amount_min',
'envelopes_amount_max',
'envelopes_visitor_times',
'envelopes_ordinary_times',
'envelopes_silver_times',
'envelopes_gold_times',
'envelopes_diamond_times',
'envelopes_is_open',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Envelopes\EnvelopesEnvelopesEntryTranslationsModel';

    protected $stream = [
'id' => '233',
'namespace' => 'envelopes',
'slug' => 'envelopes',
'prefix' => 'envelopes_',
'title_column' => 'id',
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
'id' => 1885,
'sort_order' => 226,
'stream_id' => 233,
'field_id' => 1876,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1876',
'namespace' => 'envelopes',
'slug' => 'envelopes_amount_min',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:1;s:4:"step";i:1;s:13:"default_value";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 1876,
'field_id' => 1876,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_amount_min.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_amount_min.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_amount_min.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_amount_min.instructions',
],
],
],
'translations' => [
[
'id' => 1884,
'assignment_id' => 1885,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_amount_min.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_amount_min.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_amount_min.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_amount_min.instructions.envelopes',
],
],
],
[
'id' => 1886,
'sort_order' => 227,
'stream_id' => 233,
'field_id' => 1877,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1877',
'namespace' => 'envelopes',
'slug' => 'envelopes_amount_max',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:1;s:4:"step";i:1;s:13:"default_value";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 1877,
'field_id' => 1877,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_amount_max.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_amount_max.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_amount_max.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_amount_max.instructions',
],
],
],
'translations' => [
[
'id' => 1885,
'assignment_id' => 1886,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_amount_max.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_amount_max.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_amount_max.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_amount_max.instructions.envelopes',
],
],
],
[
'id' => 1887,
'sort_order' => 228,
'stream_id' => 233,
'field_id' => 1878,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1878',
'namespace' => 'envelopes',
'slug' => 'envelopes_visitor_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1878,
'field_id' => 1878,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_visitor_times.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_visitor_times.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_visitor_times.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_visitor_times.instructions',
],
],
],
'translations' => [
[
'id' => 1886,
'assignment_id' => 1887,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_visitor_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_visitor_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_visitor_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_visitor_times.instructions.envelopes',
],
],
],
[
'id' => 1888,
'sort_order' => 229,
'stream_id' => 233,
'field_id' => 1879,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1879',
'namespace' => 'envelopes',
'slug' => 'envelopes_ordinary_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1879,
'field_id' => 1879,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_ordinary_times.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_ordinary_times.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_ordinary_times.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_ordinary_times.instructions',
],
],
],
'translations' => [
[
'id' => 1887,
'assignment_id' => 1888,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_ordinary_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_ordinary_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_ordinary_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_ordinary_times.instructions.envelopes',
],
],
],
[
'id' => 1889,
'sort_order' => 230,
'stream_id' => 233,
'field_id' => 1881,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1881',
'namespace' => 'envelopes',
'slug' => 'envelopes_silver_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1881,
'field_id' => 1881,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_silver_times.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_silver_times.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_silver_times.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_silver_times.instructions',
],
],
],
'translations' => [
[
'id' => 1888,
'assignment_id' => 1889,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_silver_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_silver_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_silver_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_silver_times.instructions.envelopes',
],
],
],
[
'id' => 1890,
'sort_order' => 231,
'stream_id' => 233,
'field_id' => 1882,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1882',
'namespace' => 'envelopes',
'slug' => 'envelopes_gold_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1882,
'field_id' => 1882,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_gold_times.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_gold_times.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_gold_times.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_gold_times.instructions',
],
],
],
'translations' => [
[
'id' => 1889,
'assignment_id' => 1890,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_gold_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_gold_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_gold_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_gold_times.instructions.envelopes',
],
],
],
[
'id' => 1891,
'sort_order' => 232,
'stream_id' => 233,
'field_id' => 1883,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1883',
'namespace' => 'envelopes',
'slug' => 'envelopes_diamond_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1883,
'field_id' => 1883,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_diamond_times.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_diamond_times.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_diamond_times.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_diamond_times.instructions',
],
],
],
'translations' => [
[
'id' => 1890,
'assignment_id' => 1891,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_diamond_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_diamond_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_diamond_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_diamond_times.instructions.envelopes',
],
],
],
[
'id' => 1892,
'sort_order' => 233,
'stream_id' => 233,
'field_id' => 1884,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1884',
'namespace' => 'envelopes',
'slug' => 'envelopes_is_open',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1884,
'field_id' => 1884,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_is_open.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_is_open.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_is_open.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_is_open.instructions',
],
],
],
'translations' => [
[
'id' => 1891,
'assignment_id' => 1892,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_is_open.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_is_open.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_is_open.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_is_open.instructions.envelopes',
],
],
],
],
'translations' => [
[
'id' => 233,
'stream_id' => 233,
'locale' => 'en',
'name' => 'fannan.module.envelopes::stream.envelopes.name',
'description' => 'fannan.module.envelopes::stream.envelopes.description',
],
],
];

    
}
