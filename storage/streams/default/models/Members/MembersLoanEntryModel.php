<?php namespace Anomaly\Streams\Platform\Model\Members;

use Anomaly\Streams\Platform\Entry\EntryModel;

class MembersLoanEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'members_loan';

    protected $titleName = 'id';

    protected $rules = [
'loan_name' => 'required',
'loan_id_card' => 'required',
'loan_amount' => 'required',
'loan_order_sn' => 'required',
'loan_status' => 'required',
'loan_date' => '',
'loan_repayment_date' => '',
'loan_term_date' => '',
'loan_bz' => '',
'loan_mobile' => '',
'loan_member_id' => '',
];

    protected $fields = [
'loan_name',
'loan_id_card',
'loan_amount',
'loan_order_sn',
'loan_status',
'loan_date',
'loan_repayment_date',
'loan_term_date',
'loan_bz',
'loan_mobile',
'loan_member_id',
];

    protected $dates = ['created_at', 'updated_at', 'loan_date'];

    protected $relationships = ['loan_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Members\MembersLoanEntryTranslationsModel';

    protected $stream = [
'id' => '324',
'namespace' => 'members',
'slug' => 'loan',
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
'id' => 2497,
'sort_order' => 231,
'stream_id' => 324,
'field_id' => 2499,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2499',
'namespace' => 'members',
'slug' => 'loan_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2499,
'field_id' => 2499,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_name.name',
'placeholder' => 'fannan.module.members::field.loan_name.placeholder',
'warning' => 'fannan.module.members::field.loan_name.warning',
'instructions' => 'fannan.module.members::field.loan_name.instructions',
],
],
],
'translations' => [
[
'id' => 2496,
'assignment_id' => 2497,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_name.label.loan',
'warning' => 'fannan.module.members::field.loan_name.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_name.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_name.instructions.loan',
],
],
],
[
'id' => 2498,
'sort_order' => 232,
'stream_id' => 324,
'field_id' => 2500,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2500',
'namespace' => 'members',
'slug' => 'loan_id_card',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2500,
'field_id' => 2500,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_id_card.name',
'placeholder' => 'fannan.module.members::field.loan_id_card.placeholder',
'warning' => 'fannan.module.members::field.loan_id_card.warning',
'instructions' => 'fannan.module.members::field.loan_id_card.instructions',
],
],
],
'translations' => [
[
'id' => 2497,
'assignment_id' => 2498,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_id_card.label.loan',
'warning' => 'fannan.module.members::field.loan_id_card.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_id_card.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_id_card.instructions.loan',
],
],
],
[
'id' => 2499,
'sort_order' => 233,
'stream_id' => 324,
'field_id' => 2501,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2501',
'namespace' => 'members',
'slug' => 'loan_amount',
'type' => 'anomaly.field_type.decimal',
'config' => 'a:6:{s:13:"default_value";N;s:9:"separator";s:1:",";s:5:"point";s:1:".";s:8:"decimals";i:2;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2501,
'field_id' => 2501,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_amount.name',
'placeholder' => 'fannan.module.members::field.loan_amount.placeholder',
'warning' => 'fannan.module.members::field.loan_amount.warning',
'instructions' => 'fannan.module.members::field.loan_amount.instructions',
],
],
],
'translations' => [
[
'id' => 2498,
'assignment_id' => 2499,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_amount.label.loan',
'warning' => 'fannan.module.members::field.loan_amount.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_amount.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_amount.instructions.loan',
],
],
],
[
'id' => 2500,
'sort_order' => 234,
'stream_id' => 324,
'field_id' => 2502,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2502',
'namespace' => 'members',
'slug' => 'loan_order_sn',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2502,
'field_id' => 2502,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_order_sn.name',
'placeholder' => 'fannan.module.members::field.loan_order_sn.placeholder',
'warning' => 'fannan.module.members::field.loan_order_sn.warning',
'instructions' => 'fannan.module.members::field.loan_order_sn.instructions',
],
],
],
'translations' => [
[
'id' => 2499,
'assignment_id' => 2500,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_order_sn.label.loan',
'warning' => 'fannan.module.members::field.loan_order_sn.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_order_sn.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_order_sn.instructions.loan',
],
],
],
[
'id' => 2501,
'sort_order' => 235,
'stream_id' => 324,
'field_id' => 2503,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2503',
'namespace' => 'members',
'slug' => 'loan_status',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:4:{i:0;s:9:"待审核";i:1;s:12:"审核通过";i:2;s:12:"审核拒绝";i:3;s:9:"已完成";}}',
'locked' => '1',
'translations' => [
[
'id' => 2503,
'field_id' => 2503,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_status.name',
'placeholder' => 'fannan.module.members::field.loan_status.placeholder',
'warning' => 'fannan.module.members::field.loan_status.warning',
'instructions' => 'fannan.module.members::field.loan_status.instructions',
],
],
],
'translations' => [
[
'id' => 2500,
'assignment_id' => 2501,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_status.label.loan',
'warning' => 'fannan.module.members::field.loan_status.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_status.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_status.instructions.loan',
],
],
],
[
'id' => 2502,
'sort_order' => 236,
'stream_id' => 324,
'field_id' => 2504,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2504',
'namespace' => 'members',
'slug' => 'loan_date',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2504,
'field_id' => 2504,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_date.name',
'placeholder' => 'fannan.module.members::field.loan_date.placeholder',
'warning' => 'fannan.module.members::field.loan_date.warning',
'instructions' => 'fannan.module.members::field.loan_date.instructions',
],
],
],
'translations' => [
[
'id' => 2501,
'assignment_id' => 2502,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_date.label.loan',
'warning' => 'fannan.module.members::field.loan_date.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_date.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_date.instructions.loan',
],
],
],
[
'id' => 2503,
'sort_order' => 237,
'stream_id' => 324,
'field_id' => 2505,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2505',
'namespace' => 'members',
'slug' => 'loan_repayment_date',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:1;s:3:"max";i:28;s:4:"step";i:1;s:13:"default_value";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2505,
'field_id' => 2505,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_repayment_date.name',
'placeholder' => 'fannan.module.members::field.loan_repayment_date.placeholder',
'warning' => 'fannan.module.members::field.loan_repayment_date.warning',
'instructions' => 'fannan.module.members::field.loan_repayment_date.instructions',
],
],
],
'translations' => [
[
'id' => 2502,
'assignment_id' => 2503,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_repayment_date.label.loan',
'warning' => 'fannan.module.members::field.loan_repayment_date.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_repayment_date.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_repayment_date.instructions.loan',
],
],
],
[
'id' => 2504,
'sort_order' => 238,
'stream_id' => 324,
'field_id' => 2506,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2506',
'namespace' => 'members',
'slug' => 'loan_term_date',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:1;s:3:"max";i:1000;s:4:"step";i:1;s:13:"default_value";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2506,
'field_id' => 2506,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_term_date.name',
'placeholder' => 'fannan.module.members::field.loan_term_date.placeholder',
'warning' => 'fannan.module.members::field.loan_term_date.warning',
'instructions' => 'fannan.module.members::field.loan_term_date.instructions',
],
],
],
'translations' => [
[
'id' => 2503,
'assignment_id' => 2504,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_term_date.label.loan',
'warning' => 'fannan.module.members::field.loan_term_date.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_term_date.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_term_date.instructions.loan',
],
],
],
[
'id' => 2505,
'sort_order' => 239,
'stream_id' => 324,
'field_id' => 2507,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2507',
'namespace' => 'members',
'slug' => 'loan_bz',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2507,
'field_id' => 2507,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_bz.name',
'placeholder' => 'fannan.module.members::field.loan_bz.placeholder',
'warning' => 'fannan.module.members::field.loan_bz.warning',
'instructions' => 'fannan.module.members::field.loan_bz.instructions',
],
],
],
'translations' => [
[
'id' => 2504,
'assignment_id' => 2505,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_bz.label.loan',
'warning' => 'fannan.module.members::field.loan_bz.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_bz.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_bz.instructions.loan',
],
],
],
[
'id' => 2506,
'sort_order' => 240,
'stream_id' => 324,
'field_id' => 2508,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2508',
'namespace' => 'members',
'slug' => 'loan_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2508,
'field_id' => 2508,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_mobile.name',
'placeholder' => 'fannan.module.members::field.loan_mobile.placeholder',
'warning' => 'fannan.module.members::field.loan_mobile.warning',
'instructions' => 'fannan.module.members::field.loan_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2505,
'assignment_id' => 2506,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_mobile.label.loan',
'warning' => 'fannan.module.members::field.loan_mobile.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_mobile.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_mobile.instructions.loan',
],
],
],
[
'id' => 2507,
'sort_order' => 241,
'stream_id' => 324,
'field_id' => 2509,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2509',
'namespace' => 'members',
'slug' => 'loan_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2509,
'field_id' => 2509,
'locale' => 'en',
'name' => 'fannan.module.members::field.loan_member_id.name',
'placeholder' => 'fannan.module.members::field.loan_member_id.placeholder',
'warning' => 'fannan.module.members::field.loan_member_id.warning',
'instructions' => 'fannan.module.members::field.loan_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2506,
'assignment_id' => 2507,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_member_id.label.loan',
'warning' => 'fannan.module.members::field.loan_member_id.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_member_id.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_member_id.instructions.loan',
],
],
],
],
'translations' => [
[
'id' => 324,
'stream_id' => 324,
'locale' => 'en',
'name' => 'fannan.module.members::stream.loan.name',
'description' => 'fannan.module.members::stream.loan.description',
],
],
];

    
public function loanMemberId()
{

return $this->getFieldType('loan_member_id')->getRelation();
}

}
