<?php namespace Anomaly\Streams\Platform\Model\Members;

use Anomaly\Streams\Platform\Entry\EntryModel;

class MembersWithdrawEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'members_withdraw';

    protected $titleName = 'id';

    protected $rules = [
'withdraw_amount' => 'required',
'withdraw_bank' => 'required',
'withdraw_name' => 'required',
'withdraw_card' => 'required',
'withdraw_bank_card' => 'required',
'withdraw_mobile' => 'required',
'withdraw_member_id' => '',
'withdraw_status' => 'required',
];

    protected $fields = [
'withdraw_amount',
'withdraw_bank',
'withdraw_name',
'withdraw_card',
'withdraw_bank_card',
'withdraw_mobile',
'withdraw_member_id',
'withdraw_status',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['withdraw_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Members\MembersWithdrawEntryTranslationsModel';

    protected $stream = [
'id' => '312',
'namespace' => 'members',
'slug' => 'withdraw',
'prefix' => 'members_',
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
'id' => 2397,
'sort_order' => 250,
'stream_id' => 312,
'field_id' => 2399,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2399',
'namespace' => 'members',
'slug' => 'withdraw_amount',
'type' => 'anomaly.field_type.decimal',
'config' => 'a:6:{s:13:"default_value";N;s:9:"separator";s:1:",";s:5:"point";s:1:".";s:8:"decimals";i:2;s:3:"min";i:0;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2399,
'field_id' => 2399,
'locale' => 'en',
'name' => 'fannan.module.members::field.withdraw_amount.name',
'placeholder' => 'fannan.module.members::field.withdraw_amount.placeholder',
'warning' => 'fannan.module.members::field.withdraw_amount.warning',
'instructions' => 'fannan.module.members::field.withdraw_amount.instructions',
],
],
],
'translations' => [
[
'id' => 2396,
'assignment_id' => 2397,
'locale' => 'en',
'label' => 'fannan.module.members::field.withdraw_amount.label.withdraw',
'warning' => 'fannan.module.members::field.withdraw_amount.warning.withdraw',
'placeholder' => 'fannan.module.members::field.withdraw_amount.placeholder.withdraw',
'instructions' => 'fannan.module.members::field.withdraw_amount.instructions.withdraw',
],
],
],
[
'id' => 2398,
'sort_order' => 251,
'stream_id' => 312,
'field_id' => 2400,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2400',
'namespace' => 'members',
'slug' => 'withdraw_bank',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2400,
'field_id' => 2400,
'locale' => 'en',
'name' => 'fannan.module.members::field.withdraw_bank.name',
'placeholder' => 'fannan.module.members::field.withdraw_bank.placeholder',
'warning' => 'fannan.module.members::field.withdraw_bank.warning',
'instructions' => 'fannan.module.members::field.withdraw_bank.instructions',
],
],
],
'translations' => [
[
'id' => 2397,
'assignment_id' => 2398,
'locale' => 'en',
'label' => 'fannan.module.members::field.withdraw_bank.label.withdraw',
'warning' => 'fannan.module.members::field.withdraw_bank.warning.withdraw',
'placeholder' => 'fannan.module.members::field.withdraw_bank.placeholder.withdraw',
'instructions' => 'fannan.module.members::field.withdraw_bank.instructions.withdraw',
],
],
],
[
'id' => 2399,
'sort_order' => 252,
'stream_id' => 312,
'field_id' => 2401,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2401',
'namespace' => 'members',
'slug' => 'withdraw_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2401,
'field_id' => 2401,
'locale' => 'en',
'name' => 'fannan.module.members::field.withdraw_name.name',
'placeholder' => 'fannan.module.members::field.withdraw_name.placeholder',
'warning' => 'fannan.module.members::field.withdraw_name.warning',
'instructions' => 'fannan.module.members::field.withdraw_name.instructions',
],
],
],
'translations' => [
[
'id' => 2398,
'assignment_id' => 2399,
'locale' => 'en',
'label' => 'fannan.module.members::field.withdraw_name.label.withdraw',
'warning' => 'fannan.module.members::field.withdraw_name.warning.withdraw',
'placeholder' => 'fannan.module.members::field.withdraw_name.placeholder.withdraw',
'instructions' => 'fannan.module.members::field.withdraw_name.instructions.withdraw',
],
],
],
[
'id' => 2400,
'sort_order' => 253,
'stream_id' => 312,
'field_id' => 2402,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2402',
'namespace' => 'members',
'slug' => 'withdraw_card',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2402,
'field_id' => 2402,
'locale' => 'en',
'name' => 'fannan.module.members::field.withdraw_card.name',
'placeholder' => 'fannan.module.members::field.withdraw_card.placeholder',
'warning' => 'fannan.module.members::field.withdraw_card.warning',
'instructions' => 'fannan.module.members::field.withdraw_card.instructions',
],
],
],
'translations' => [
[
'id' => 2399,
'assignment_id' => 2400,
'locale' => 'en',
'label' => 'fannan.module.members::field.withdraw_card.label.withdraw',
'warning' => 'fannan.module.members::field.withdraw_card.warning.withdraw',
'placeholder' => 'fannan.module.members::field.withdraw_card.placeholder.withdraw',
'instructions' => 'fannan.module.members::field.withdraw_card.instructions.withdraw',
],
],
],
[
'id' => 2401,
'sort_order' => 254,
'stream_id' => 312,
'field_id' => 2403,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2403',
'namespace' => 'members',
'slug' => 'withdraw_bank_card',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2403,
'field_id' => 2403,
'locale' => 'en',
'name' => 'fannan.module.members::field.withdraw_bank_card.name',
'placeholder' => 'fannan.module.members::field.withdraw_bank_card.placeholder',
'warning' => 'fannan.module.members::field.withdraw_bank_card.warning',
'instructions' => 'fannan.module.members::field.withdraw_bank_card.instructions',
],
],
],
'translations' => [
[
'id' => 2400,
'assignment_id' => 2401,
'locale' => 'en',
'label' => 'fannan.module.members::field.withdraw_bank_card.label.withdraw',
'warning' => 'fannan.module.members::field.withdraw_bank_card.warning.withdraw',
'placeholder' => 'fannan.module.members::field.withdraw_bank_card.placeholder.withdraw',
'instructions' => 'fannan.module.members::field.withdraw_bank_card.instructions.withdraw',
],
],
],
[
'id' => 2402,
'sort_order' => 255,
'stream_id' => 312,
'field_id' => 2404,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2404',
'namespace' => 'members',
'slug' => 'withdraw_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2404,
'field_id' => 2404,
'locale' => 'en',
'name' => 'fannan.module.members::field.withdraw_mobile.name',
'placeholder' => 'fannan.module.members::field.withdraw_mobile.placeholder',
'warning' => 'fannan.module.members::field.withdraw_mobile.warning',
'instructions' => 'fannan.module.members::field.withdraw_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2401,
'assignment_id' => 2402,
'locale' => 'en',
'label' => 'fannan.module.members::field.withdraw_mobile.label.withdraw',
'warning' => 'fannan.module.members::field.withdraw_mobile.warning.withdraw',
'placeholder' => 'fannan.module.members::field.withdraw_mobile.placeholder.withdraw',
'instructions' => 'fannan.module.members::field.withdraw_mobile.instructions.withdraw',
],
],
],
[
'id' => 2403,
'sort_order' => 256,
'stream_id' => 312,
'field_id' => 2405,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2405',
'namespace' => 'members',
'slug' => 'withdraw_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2405,
'field_id' => 2405,
'locale' => 'en',
'name' => 'fannan.module.members::field.withdraw_member_id.name',
'placeholder' => 'fannan.module.members::field.withdraw_member_id.placeholder',
'warning' => 'fannan.module.members::field.withdraw_member_id.warning',
'instructions' => 'fannan.module.members::field.withdraw_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2402,
'assignment_id' => 2403,
'locale' => 'en',
'label' => 'fannan.module.members::field.withdraw_member_id.label.withdraw',
'warning' => 'fannan.module.members::field.withdraw_member_id.warning.withdraw',
'placeholder' => 'fannan.module.members::field.withdraw_member_id.placeholder.withdraw',
'instructions' => 'fannan.module.members::field.withdraw_member_id.instructions.withdraw',
],
],
],
[
'id' => 2404,
'sort_order' => 257,
'stream_id' => 312,
'field_id' => 2406,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2406',
'namespace' => 'members',
'slug' => 'withdraw_status',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:4:{i:0;s:9:"待审核";i:1;s:9:"提现中";i:2;s:6:"拒绝";i:3;s:9:"已成功";}}',
'locked' => '1',
'translations' => [
[
'id' => 2406,
'field_id' => 2406,
'locale' => 'en',
'name' => 'fannan.module.members::field.withdraw_status.name',
'placeholder' => 'fannan.module.members::field.withdraw_status.placeholder',
'warning' => 'fannan.module.members::field.withdraw_status.warning',
'instructions' => 'fannan.module.members::field.withdraw_status.instructions',
],
],
],
'translations' => [
[
'id' => 2403,
'assignment_id' => 2404,
'locale' => 'en',
'label' => 'fannan.module.members::field.withdraw_status.label.withdraw',
'warning' => 'fannan.module.members::field.withdraw_status.warning.withdraw',
'placeholder' => 'fannan.module.members::field.withdraw_status.placeholder.withdraw',
'instructions' => 'fannan.module.members::field.withdraw_status.instructions.withdraw',
],
],
],
],
'translations' => [
[
'id' => 312,
'stream_id' => 312,
'locale' => 'en',
'name' => 'fannan.module.members::stream.withdraw.name',
'description' => 'fannan.module.members::stream.withdraw.description',
],
],
];

    
public function withdrawMemberId()
{

return $this->getFieldType('withdraw_member_id')->getRelation();
}

}
