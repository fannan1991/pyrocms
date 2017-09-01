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
'id' => '305',
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
'id' => 2341,
'sort_order' => 253,
'stream_id' => 305,
'field_id' => 2342,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2342',
'namespace' => 'lottery',
'slug' => 'ticket_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2342,
'field_id' => 2342,
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
'id' => 2340,
'assignment_id' => 2341,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_name.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_name.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_name.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_name.instructions.ticket',
],
],
],
[
'id' => 2342,
'sort_order' => 254,
'stream_id' => 305,
'field_id' => 2343,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2343',
'namespace' => 'lottery',
'slug' => 'ticket_valid_period',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2343,
'field_id' => 2343,
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
'id' => 2341,
'assignment_id' => 2342,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_valid_period.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_valid_period.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_valid_period.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_valid_period.instructions.ticket',
],
],
],
[
'id' => 2343,
'sort_order' => 255,
'stream_id' => 305,
'field_id' => 2344,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2344',
'namespace' => 'lottery',
'slug' => 'ticket_is_use',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2344,
'field_id' => 2344,
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
'id' => 2342,
'assignment_id' => 2343,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_is_use.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_is_use.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_is_use.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_is_use.instructions.ticket',
],
],
],
[
'id' => 2344,
'sort_order' => 256,
'stream_id' => 305,
'field_id' => 2345,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2345',
'namespace' => 'lottery',
'slug' => 'ticket_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2345,
'field_id' => 2345,
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
'id' => 2343,
'assignment_id' => 2344,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_member_id.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_member_id.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_member_id.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_member_id.instructions.ticket',
],
],
],
[
'id' => 2345,
'sort_order' => 257,
'stream_id' => 305,
'field_id' => 2346,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2346',
'namespace' => 'lottery',
'slug' => 'ticket_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2346,
'field_id' => 2346,
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
'id' => 2344,
'assignment_id' => 2345,
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
'id' => 305,
'stream_id' => 305,
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
