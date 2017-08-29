<?php namespace Anomaly\Streams\Platform\Model\Lottery;

use Anomaly\Streams\Platform\Entry\EntryModel;

class LotteryLotteryEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'lottery_lottery';

    protected $titleName = 'lottery_title';

    protected $rules = [
'lottery_title' => 'required',
'lottery_start' => 'required',
'lottery_end' => 'required',
'lottery_times' => 'required',
'lottery_is_ticket' => '',
'lottery_is_open' => '',
'lottery_description' => '',
'lottery_rule' => '',
];

    protected $fields = [
'lottery_title',
'lottery_start',
'lottery_end',
'lottery_times',
'lottery_is_ticket',
'lottery_is_open',
'lottery_description',
'lottery_rule',
];

    protected $dates = ['created_at', 'updated_at', 'lottery_start', 'lottery_end'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Lottery\LotteryLotteryEntryTranslationsModel';

    protected $stream = [
'id' => '297',
'namespace' => 'lottery',
'slug' => 'lottery',
'prefix' => 'lottery_',
'title_column' => 'lottery_title',
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
'id' => 2287,
'sort_order' => 230,
'stream_id' => 297,
'field_id' => 2288,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2288',
'namespace' => 'lottery',
'slug' => 'lottery_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2288,
'field_id' => 2288,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.lottery_title.name',
'placeholder' => 'fannan.module.lottery::field.lottery_title.placeholder',
'warning' => 'fannan.module.lottery::field.lottery_title.warning',
'instructions' => 'fannan.module.lottery::field.lottery_title.instructions',
],
],
],
'translations' => [
[
'id' => 2286,
'assignment_id' => 2287,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_title.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_title.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_title.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_title.instructions.lottery',
],
],
],
[
'id' => 2288,
'sort_order' => 231,
'stream_id' => 297,
'field_id' => 2289,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2289',
'namespace' => 'lottery',
'slug' => 'lottery_start',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2289,
'field_id' => 2289,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.lottery_start.name',
'placeholder' => 'fannan.module.lottery::field.lottery_start.placeholder',
'warning' => 'fannan.module.lottery::field.lottery_start.warning',
'instructions' => 'fannan.module.lottery::field.lottery_start.instructions',
],
],
],
'translations' => [
[
'id' => 2287,
'assignment_id' => 2288,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_start.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_start.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_start.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_start.instructions.lottery',
],
],
],
[
'id' => 2289,
'sort_order' => 232,
'stream_id' => 297,
'field_id' => 2290,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2290',
'namespace' => 'lottery',
'slug' => 'lottery_end',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2290,
'field_id' => 2290,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.lottery_end.name',
'placeholder' => 'fannan.module.lottery::field.lottery_end.placeholder',
'warning' => 'fannan.module.lottery::field.lottery_end.warning',
'instructions' => 'fannan.module.lottery::field.lottery_end.instructions',
],
],
],
'translations' => [
[
'id' => 2288,
'assignment_id' => 2289,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_end.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_end.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_end.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_end.instructions.lottery',
],
],
],
[
'id' => 2290,
'sort_order' => 233,
'stream_id' => 297,
'field_id' => 2291,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2291',
'namespace' => 'lottery',
'slug' => 'lottery_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 2291,
'field_id' => 2291,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.lottery_times.name',
'placeholder' => 'fannan.module.lottery::field.lottery_times.placeholder',
'warning' => 'fannan.module.lottery::field.lottery_times.warning',
'instructions' => 'fannan.module.lottery::field.lottery_times.instructions',
],
],
],
'translations' => [
[
'id' => 2289,
'assignment_id' => 2290,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_times.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_times.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_times.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_times.instructions.lottery',
],
],
],
[
'id' => 2291,
'sort_order' => 234,
'stream_id' => 297,
'field_id' => 2292,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2292',
'namespace' => 'lottery',
'slug' => 'lottery_is_ticket',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:1;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2292,
'field_id' => 2292,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.lottery_is_ticket.name',
'placeholder' => 'fannan.module.lottery::field.lottery_is_ticket.placeholder',
'warning' => 'fannan.module.lottery::field.lottery_is_ticket.warning',
'instructions' => 'fannan.module.lottery::field.lottery_is_ticket.instructions',
],
],
],
'translations' => [
[
'id' => 2290,
'assignment_id' => 2291,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_is_ticket.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_is_ticket.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_is_ticket.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_is_ticket.instructions.lottery',
],
],
],
[
'id' => 2292,
'sort_order' => 235,
'stream_id' => 297,
'field_id' => 2293,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2293',
'namespace' => 'lottery',
'slug' => 'lottery_is_open',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:1;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2293,
'field_id' => 2293,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.lottery_is_open.name',
'placeholder' => 'fannan.module.lottery::field.lottery_is_open.placeholder',
'warning' => 'fannan.module.lottery::field.lottery_is_open.warning',
'instructions' => 'fannan.module.lottery::field.lottery_is_open.instructions',
],
],
],
'translations' => [
[
'id' => 2291,
'assignment_id' => 2292,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_is_open.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_is_open.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_is_open.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_is_open.instructions.lottery',
],
],
],
[
'id' => 2293,
'sort_order' => 236,
'stream_id' => 297,
'field_id' => 2294,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2294',
'namespace' => 'lottery',
'slug' => 'lottery_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:3:{s:4:"rows";i:5;s:3:"min";i:10;s:3:"max";i:1000;}',
'locked' => '1',
'translations' => [
[
'id' => 2294,
'field_id' => 2294,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.lottery_description.name',
'placeholder' => 'fannan.module.lottery::field.lottery_description.placeholder',
'warning' => 'fannan.module.lottery::field.lottery_description.warning',
'instructions' => 'fannan.module.lottery::field.lottery_description.instructions',
],
],
],
'translations' => [
[
'id' => 2292,
'assignment_id' => 2293,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_description.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_description.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_description.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_description.instructions.lottery',
],
],
],
[
'id' => 2294,
'sort_order' => 237,
'stream_id' => 297,
'field_id' => 2295,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2295',
'namespace' => 'lottery',
'slug' => 'lottery_rule',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2295,
'field_id' => 2295,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.lottery_rule.name',
'placeholder' => 'fannan.module.lottery::field.lottery_rule.placeholder',
'warning' => 'fannan.module.lottery::field.lottery_rule.warning',
'instructions' => 'fannan.module.lottery::field.lottery_rule.instructions',
],
],
],
'translations' => [
[
'id' => 2293,
'assignment_id' => 2294,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_rule.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_rule.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_rule.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_rule.instructions.lottery',
],
],
],
],
'translations' => [
[
'id' => 297,
'stream_id' => 297,
'locale' => 'en',
'name' => 'fannan.module.lottery::stream.lottery.name',
'description' => 'fannan.module.lottery::stream.lottery.description',
],
],
];

    
}
