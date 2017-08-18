<?php namespace Anomaly\Streams\Platform\Model\Lottery;

use Anomaly\Streams\Platform\Entry\EntryModel;

class LotteryTicketEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'lottery_ticket';

    protected $titleName = 'id';

    protected $rules = [
'ticket_name' => 'required',
'ticket_valid_period' => 'required',
'ticket_is_use' => '',
'ticket_member_id' => '',
'ticket_mobile' => '',
];

    protected $fields = [
'ticket_name',
'ticket_valid_period',
'ticket_is_use',
'ticket_member_id',
'ticket_mobile',
];

    protected $dates = ['created_at', 'updated_at', 'ticket_valid_period'];

    protected $relationships = ['ticket_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Lottery\LotteryTicketEntryTranslationsModel';

    protected $stream = [
'id' => '230',
'namespace' => 'lottery',
'slug' => 'ticket',
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
'id' => 1864,
'sort_order' => 221,
'stream_id' => 230,
'field_id' => 1853,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1853',
'namespace' => 'lottery',
'slug' => 'ticket_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1853,
'field_id' => 1853,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.ticket_name.name',
'placeholder' => 'fannan.module.lottery::field.ticket_name.placeholder',
'warning' => 'fannan.module.lottery::field.ticket_name.warning',
'instructions' => 'fannan.module.lottery::field.ticket_name.instructions',
],
],
],
'translations' => [
[
'id' => 1863,
'assignment_id' => 1864,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_name.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_name.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_name.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_name.instructions.ticket',
],
],
],
[
'id' => 1865,
'sort_order' => 222,
'stream_id' => 230,
'field_id' => 1854,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1854',
'namespace' => 'lottery',
'slug' => 'ticket_valid_period',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1854,
'field_id' => 1854,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.ticket_valid_period.name',
'placeholder' => 'fannan.module.lottery::field.ticket_valid_period.placeholder',
'warning' => 'fannan.module.lottery::field.ticket_valid_period.warning',
'instructions' => 'fannan.module.lottery::field.ticket_valid_period.instructions',
],
],
],
'translations' => [
[
'id' => 1864,
'assignment_id' => 1865,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_valid_period.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_valid_period.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_valid_period.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_valid_period.instructions.ticket',
],
],
],
[
'id' => 1866,
'sort_order' => 223,
'stream_id' => 230,
'field_id' => 1855,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1855',
'namespace' => 'lottery',
'slug' => 'ticket_is_use',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1855,
'field_id' => 1855,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.ticket_is_use.name',
'placeholder' => 'fannan.module.lottery::field.ticket_is_use.placeholder',
'warning' => 'fannan.module.lottery::field.ticket_is_use.warning',
'instructions' => 'fannan.module.lottery::field.ticket_is_use.instructions',
],
],
],
'translations' => [
[
'id' => 1865,
'assignment_id' => 1866,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_is_use.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_is_use.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_is_use.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_is_use.instructions.ticket',
],
],
],
[
'id' => 1867,
'sort_order' => 224,
'stream_id' => 230,
'field_id' => 1856,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1856',
'namespace' => 'lottery',
'slug' => 'ticket_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1856,
'field_id' => 1856,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.ticket_member_id.name',
'placeholder' => 'fannan.module.lottery::field.ticket_member_id.placeholder',
'warning' => 'fannan.module.lottery::field.ticket_member_id.warning',
'instructions' => 'fannan.module.lottery::field.ticket_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 1866,
'assignment_id' => 1867,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_member_id.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_member_id.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_member_id.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_member_id.instructions.ticket',
],
],
],
[
'id' => 1868,
'sort_order' => 225,
'stream_id' => 230,
'field_id' => 1857,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1857',
'namespace' => 'lottery',
'slug' => 'ticket_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1857,
'field_id' => 1857,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.ticket_mobile.name',
'placeholder' => 'fannan.module.lottery::field.ticket_mobile.placeholder',
'warning' => 'fannan.module.lottery::field.ticket_mobile.warning',
'instructions' => 'fannan.module.lottery::field.ticket_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 1867,
'assignment_id' => 1868,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_mobile.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_mobile.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_mobile.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_mobile.instructions.ticket',
],
],
],
],
'translations' => [
[
'id' => 230,
'stream_id' => 230,
'locale' => 'en',
'name' => 'fannan.module.lottery::stream.ticket.name',
'description' => 'fannan.module.lottery::stream.ticket.description',
],
],
];

    
public function ticketMemberId()
{

return $this->getFieldType('ticket_member_id')->getRelation();
}

}
