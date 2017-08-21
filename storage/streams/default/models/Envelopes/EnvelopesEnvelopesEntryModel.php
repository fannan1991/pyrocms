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
'envelopes_bronze_times' => 'required',
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
'envelopes_bronze_times',
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
'id' => '252',
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
'id' => 1992,
'sort_order' => 234,
'stream_id' => 252,
'field_id' => 1986,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1986',
'namespace' => 'envelopes',
'slug' => 'envelopes_amount_min',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:1;s:4:"step";i:1;s:13:"default_value";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 1986,
'field_id' => 1986,
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
'id' => 1991,
'assignment_id' => 1992,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_amount_min.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_amount_min.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_amount_min.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_amount_min.instructions.envelopes',
],
],
],
[
'id' => 1993,
'sort_order' => 235,
'stream_id' => 252,
'field_id' => 1987,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1987',
'namespace' => 'envelopes',
'slug' => 'envelopes_amount_max',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:1;s:4:"step";i:1;s:13:"default_value";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 1987,
'field_id' => 1987,
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
'id' => 1992,
'assignment_id' => 1993,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_amount_max.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_amount_max.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_amount_max.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_amount_max.instructions.envelopes',
],
],
],
[
'id' => 1994,
'sort_order' => 236,
'stream_id' => 252,
'field_id' => 1988,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1988',
'namespace' => 'envelopes',
'slug' => 'envelopes_visitor_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1988,
'field_id' => 1988,
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
'id' => 1993,
'assignment_id' => 1994,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_visitor_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_visitor_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_visitor_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_visitor_times.instructions.envelopes',
],
],
],
[
'id' => 1995,
'sort_order' => 237,
'stream_id' => 252,
'field_id' => 1989,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1989',
'namespace' => 'envelopes',
'slug' => 'envelopes_ordinary_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1989,
'field_id' => 1989,
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
'id' => 1994,
'assignment_id' => 1995,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_ordinary_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_ordinary_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_ordinary_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_ordinary_times.instructions.envelopes',
],
],
],
[
'id' => 1996,
'sort_order' => 238,
'stream_id' => 252,
'field_id' => 1990,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1990',
'namespace' => 'envelopes',
'slug' => 'envelopes_bronze_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1990,
'field_id' => 1990,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.envelopes_bronze_times.name',
'placeholder' => 'fannan.module.envelopes::field.envelopes_bronze_times.placeholder',
'warning' => 'fannan.module.envelopes::field.envelopes_bronze_times.warning',
'instructions' => 'fannan.module.envelopes::field.envelopes_bronze_times.instructions',
],
],
],
'translations' => [
[
'id' => 1995,
'assignment_id' => 1996,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_bronze_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_bronze_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_bronze_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_bronze_times.instructions.envelopes',
],
],
],
[
'id' => 1997,
'sort_order' => 239,
'stream_id' => 252,
'field_id' => 1991,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1991',
'namespace' => 'envelopes',
'slug' => 'envelopes_silver_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1991,
'field_id' => 1991,
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
'id' => 1996,
'assignment_id' => 1997,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_silver_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_silver_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_silver_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_silver_times.instructions.envelopes',
],
],
],
[
'id' => 1998,
'sort_order' => 240,
'stream_id' => 252,
'field_id' => 1992,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1992',
'namespace' => 'envelopes',
'slug' => 'envelopes_gold_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1992,
'field_id' => 1992,
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
'id' => 1997,
'assignment_id' => 1998,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_gold_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_gold_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_gold_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_gold_times.instructions.envelopes',
],
],
],
[
'id' => 1999,
'sort_order' => 241,
'stream_id' => 252,
'field_id' => 1993,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1993',
'namespace' => 'envelopes',
'slug' => 'envelopes_diamond_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1993,
'field_id' => 1993,
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
'id' => 1998,
'assignment_id' => 1999,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.envelopes_diamond_times.label.envelopes',
'warning' => 'fannan.module.envelopes::field.envelopes_diamond_times.warning.envelopes',
'placeholder' => 'fannan.module.envelopes::field.envelopes_diamond_times.placeholder.envelopes',
'instructions' => 'fannan.module.envelopes::field.envelopes_diamond_times.instructions.envelopes',
],
],
],
[
'id' => 2000,
'sort_order' => 242,
'stream_id' => 252,
'field_id' => 1994,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1994',
'namespace' => 'envelopes',
'slug' => 'envelopes_is_open',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1994,
'field_id' => 1994,
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
'id' => 1999,
'assignment_id' => 2000,
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
'id' => 252,
'stream_id' => 252,
'locale' => 'en',
'name' => 'fannan.module.envelopes::stream.envelopes.name',
'description' => 'fannan.module.envelopes::stream.envelopes.description',
],
],
];

    
}
