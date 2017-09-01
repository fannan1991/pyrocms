<?php namespace Anomaly\Streams\Platform\Model\Lottery;

use Anomaly\Streams\Platform\Entry\EntryModel;

class LotteryGrantEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'lottery_grant';

    protected $titleName = 'id';

    protected $rules = [
'grant_ticket_name' => '',
'grant_grade' => 'required',
'grant_valid_period' => 'required',
'grant_num' => 'required',
];

    protected $fields = [
'grant_ticket_name',
'grant_grade',
'grant_valid_period',
'grant_num',
];

    protected $dates = ['created_at', 'updated_at', 'grant_valid_period'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Lottery\LotteryGrantEntryTranslationsModel';

    protected $stream = [
'id' => '306',
'namespace' => 'lottery',
'slug' => 'grant',
'prefix' => 'lottery_',
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
'id' => 2346,
'sort_order' => 258,
'stream_id' => 306,
'field_id' => 2350,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2350',
'namespace' => 'lottery',
'slug' => 'grant_ticket_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2350,
'field_id' => 2350,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.grant_ticket_name.name',
'placeholder' => 'fannan.module.lottery::field.grant_ticket_name.placeholder',
'warning' => 'fannan.module.lottery::field.grant_ticket_name.warning',
'instructions' => 'fannan.module.lottery::field.grant_ticket_name.instructions',
],
],
],
'translations' => [
[
'id' => 2345,
'assignment_id' => 2346,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.grant_ticket_name.label.grant',
'warning' => 'fannan.module.lottery::field.grant_ticket_name.warning.grant',
'placeholder' => 'fannan.module.lottery::field.grant_ticket_name.placeholder.grant',
'instructions' => 'fannan.module.lottery::field.grant_ticket_name.instructions.grant',
],
],
],
[
'id' => 2347,
'sort_order' => 259,
'stream_id' => 306,
'field_id' => 2347,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2347',
'namespace' => 'lottery',
'slug' => 'grant_grade',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:7:"options";a:7:{i:0;s:6:"全部";i:1;s:6:"游客";i:2;s:12:"普通会员";i:3;s:12:"铜牌会员";i:4;s:12:"银牌会员";i:5;s:12:"金牌会员";i:6;s:12:"钻石会员";}s:13:"default_value";s:1:"1";}',
'locked' => '1',
'translations' => [
[
'id' => 2347,
'field_id' => 2347,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.grant_grade.name',
'placeholder' => 'fannan.module.lottery::field.grant_grade.placeholder',
'warning' => 'fannan.module.lottery::field.grant_grade.warning',
'instructions' => 'fannan.module.lottery::field.grant_grade.instructions',
],
],
],
'translations' => [
[
'id' => 2346,
'assignment_id' => 2347,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.grant_grade.label.grant',
'warning' => 'fannan.module.lottery::field.grant_grade.warning.grant',
'placeholder' => 'fannan.module.lottery::field.grant_grade.placeholder.grant',
'instructions' => 'fannan.module.lottery::field.grant_grade.instructions.grant',
],
],
],
[
'id' => 2348,
'sort_order' => 260,
'stream_id' => 306,
'field_id' => 2348,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2348',
'namespace' => 'lottery',
'slug' => 'grant_valid_period',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2348,
'field_id' => 2348,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.grant_valid_period.name',
'placeholder' => 'fannan.module.lottery::field.grant_valid_period.placeholder',
'warning' => 'fannan.module.lottery::field.grant_valid_period.warning',
'instructions' => 'fannan.module.lottery::field.grant_valid_period.instructions',
],
],
],
'translations' => [
[
'id' => 2347,
'assignment_id' => 2348,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.grant_valid_period.label.grant',
'warning' => 'fannan.module.lottery::field.grant_valid_period.warning.grant',
'placeholder' => 'fannan.module.lottery::field.grant_valid_period.placeholder.grant',
'instructions' => 'fannan.module.lottery::field.grant_valid_period.instructions.grant',
],
],
],
[
'id' => 2349,
'sort_order' => 261,
'stream_id' => 306,
'field_id' => 2349,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2349',
'namespace' => 'lottery',
'slug' => 'grant_num',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:1;s:4:"step";i:1;s:13:"default_value";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 2349,
'field_id' => 2349,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.grant_num.name',
'placeholder' => 'fannan.module.lottery::field.grant_num.placeholder',
'warning' => 'fannan.module.lottery::field.grant_num.warning',
'instructions' => 'fannan.module.lottery::field.grant_num.instructions',
],
],
],
'translations' => [
[
'id' => 2348,
'assignment_id' => 2349,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.grant_num.label.grant',
'warning' => 'fannan.module.lottery::field.grant_num.warning.grant',
'placeholder' => 'fannan.module.lottery::field.grant_num.placeholder.grant',
'instructions' => 'fannan.module.lottery::field.grant_num.instructions.grant',
],
],
],
],
'translations' => [
[
'id' => 306,
'stream_id' => 306,
'locale' => 'en',
'name' => 'fannan.module.lottery::stream.grant.name',
'description' => 'fannan.module.lottery::stream.grant.description',
],
],
];

    
}
