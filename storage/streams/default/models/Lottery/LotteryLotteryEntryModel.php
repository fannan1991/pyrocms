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
'id' => '227',
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
'id' => 1843,
'sort_order' => 200,
'stream_id' => 227,
'field_id' => 1832,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1832',
'namespace' => 'lottery',
'slug' => 'lottery_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1832,
'field_id' => 1832,
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
'id' => 1842,
'assignment_id' => 1843,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_title.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_title.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_title.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_title.instructions.lottery',
],
],
],
[
'id' => 1844,
'sort_order' => 201,
'stream_id' => 227,
'field_id' => 1833,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1833',
'namespace' => 'lottery',
'slug' => 'lottery_start',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1833,
'field_id' => 1833,
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
'id' => 1843,
'assignment_id' => 1844,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_start.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_start.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_start.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_start.instructions.lottery',
],
],
],
[
'id' => 1845,
'sort_order' => 202,
'stream_id' => 227,
'field_id' => 1834,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1834',
'namespace' => 'lottery',
'slug' => 'lottery_end',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1834,
'field_id' => 1834,
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
'id' => 1844,
'assignment_id' => 1845,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_end.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_end.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_end.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_end.instructions.lottery',
],
],
],
[
'id' => 1846,
'sort_order' => 203,
'stream_id' => 227,
'field_id' => 1835,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1835',
'namespace' => 'lottery',
'slug' => 'lottery_times',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1835,
'field_id' => 1835,
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
'id' => 1845,
'assignment_id' => 1846,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_times.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_times.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_times.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_times.instructions.lottery',
],
],
],
[
'id' => 1847,
'sort_order' => 204,
'stream_id' => 227,
'field_id' => 1836,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1836',
'namespace' => 'lottery',
'slug' => 'lottery_is_ticket',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1836,
'field_id' => 1836,
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
'id' => 1846,
'assignment_id' => 1847,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_is_ticket.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_is_ticket.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_is_ticket.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_is_ticket.instructions.lottery',
],
],
],
[
'id' => 1848,
'sort_order' => 205,
'stream_id' => 227,
'field_id' => 1837,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1837',
'namespace' => 'lottery',
'slug' => 'lottery_is_open',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1837,
'field_id' => 1837,
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
'id' => 1847,
'assignment_id' => 1848,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_is_open.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_is_open.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_is_open.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_is_open.instructions.lottery',
],
],
],
[
'id' => 1849,
'sort_order' => 206,
'stream_id' => 227,
'field_id' => 1838,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1838',
'namespace' => 'lottery',
'slug' => 'lottery_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:3:{s:4:"rows";i:5;s:3:"min";i:10;s:3:"max";i:1000;}',
'locked' => '1',
'translations' => [
[
'id' => 1838,
'field_id' => 1838,
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
'id' => 1848,
'assignment_id' => 1849,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.lottery_description.label.lottery',
'warning' => 'fannan.module.lottery::field.lottery_description.warning.lottery',
'placeholder' => 'fannan.module.lottery::field.lottery_description.placeholder.lottery',
'instructions' => 'fannan.module.lottery::field.lottery_description.instructions.lottery',
],
],
],
[
'id' => 1850,
'sort_order' => 207,
'stream_id' => 227,
'field_id' => 1839,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1839',
'namespace' => 'lottery',
'slug' => 'lottery_rule',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1839,
'field_id' => 1839,
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
'id' => 1849,
'assignment_id' => 1850,
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
'id' => 227,
'stream_id' => 227,
'locale' => 'en',
'name' => 'fannan.module.lottery::stream.lottery.name',
'description' => 'fannan.module.lottery::stream.lottery.description',
],
],
];

    
}
