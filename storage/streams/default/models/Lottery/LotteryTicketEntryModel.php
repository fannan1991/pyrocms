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
'id' => '300',
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
'id' => 2309,
'sort_order' => 252,
'stream_id' => 300,
'field_id' => 2310,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2310',
'namespace' => 'lottery',
'slug' => 'ticket_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2310,
'field_id' => 2310,
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
'id' => 2308,
'assignment_id' => 2309,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_name.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_name.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_name.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_name.instructions.ticket',
],
],
],
[
'id' => 2310,
'sort_order' => 253,
'stream_id' => 300,
'field_id' => 2311,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2311',
'namespace' => 'lottery',
'slug' => 'ticket_valid_period',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2311,
'field_id' => 2311,
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
'id' => 2309,
'assignment_id' => 2310,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_valid_period.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_valid_period.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_valid_period.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_valid_period.instructions.ticket',
],
],
],
[
'id' => 2311,
'sort_order' => 254,
'stream_id' => 300,
'field_id' => 2312,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2312',
'namespace' => 'lottery',
'slug' => 'ticket_is_use',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2312,
'field_id' => 2312,
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
'id' => 2310,
'assignment_id' => 2311,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_is_use.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_is_use.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_is_use.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_is_use.instructions.ticket',
],
],
],
[
'id' => 2312,
'sort_order' => 255,
'stream_id' => 300,
'field_id' => 2313,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2313',
'namespace' => 'lottery',
'slug' => 'ticket_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2313,
'field_id' => 2313,
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
'id' => 2311,
'assignment_id' => 2312,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.ticket_member_id.label.ticket',
'warning' => 'fannan.module.lottery::field.ticket_member_id.warning.ticket',
'placeholder' => 'fannan.module.lottery::field.ticket_member_id.placeholder.ticket',
'instructions' => 'fannan.module.lottery::field.ticket_member_id.instructions.ticket',
],
],
],
[
'id' => 2313,
'sort_order' => 256,
'stream_id' => 300,
'field_id' => 2314,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2314',
'namespace' => 'lottery',
'slug' => 'ticket_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2314,
'field_id' => 2314,
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
'id' => 2312,
'assignment_id' => 2313,
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
'id' => 300,
'stream_id' => 300,
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
