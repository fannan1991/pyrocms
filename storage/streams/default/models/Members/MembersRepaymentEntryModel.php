<?php namespace Anomaly\Streams\Platform\Model\Members;

use Anomaly\Streams\Platform\Entry\EntryModel;

class MembersRepaymentEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'members_repayment';

    protected $titleName = 'id';

    protected $rules = [
'repayment_amount' => 'required',
'repayment_date' => 'required',
'repayment_status' => 'required',
'repayment_loan' => 'required',
'repayment_member_id' => '',
'repayment_sn' => 'required',
'repayment_loan_name' => 'required',
'repayment_loan_card' => 'required',
'repayment_mobile' => 'required',
];

    protected $fields = [
'repayment_amount',
'repayment_date',
'repayment_status',
'repayment_loan',
'repayment_member_id',
'repayment_sn',
'repayment_loan_name',
'repayment_loan_card',
'repayment_mobile',
];

    protected $dates = ['created_at', 'updated_at', 'repayment_date'];

    protected $relationships = ['repayment_loan', 'repayment_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Members\MembersRepaymentEntryTranslationsModel';

    protected $stream = [
'id' => '325',
'namespace' => 'members',
'slug' => 'repayment',
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
'id' => 2508,
'sort_order' => 242,
'stream_id' => 325,
'field_id' => 2510,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2510',
'namespace' => 'members',
'slug' => 'repayment_amount',
'type' => 'anomaly.field_type.decimal',
'config' => 'a:6:{s:13:"default_value";N;s:9:"separator";s:1:",";s:5:"point";s:1:".";s:8:"decimals";i:2;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2510,
'field_id' => 2510,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_amount.name',
'placeholder' => 'fannan.module.members::field.repayment_amount.placeholder',
'warning' => 'fannan.module.members::field.repayment_amount.warning',
'instructions' => 'fannan.module.members::field.repayment_amount.instructions',
],
],
],
'translations' => [
[
'id' => 2507,
'assignment_id' => 2508,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_amount.label.repayment',
'warning' => 'fannan.module.members::field.repayment_amount.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_amount.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_amount.instructions.repayment',
],
],
],
[
'id' => 2509,
'sort_order' => 243,
'stream_id' => 325,
'field_id' => 2511,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2511',
'namespace' => 'members',
'slug' => 'repayment_date',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2511,
'field_id' => 2511,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_date.name',
'placeholder' => 'fannan.module.members::field.repayment_date.placeholder',
'warning' => 'fannan.module.members::field.repayment_date.warning',
'instructions' => 'fannan.module.members::field.repayment_date.instructions',
],
],
],
'translations' => [
[
'id' => 2508,
'assignment_id' => 2509,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_date.label.repayment',
'warning' => 'fannan.module.members::field.repayment_date.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_date.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_date.instructions.repayment',
],
],
],
[
'id' => 2510,
'sort_order' => 244,
'stream_id' => 325,
'field_id' => 2512,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2512',
'namespace' => 'members',
'slug' => 'repayment_status',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:2:{i:0;s:9:"未还款";i:1;s:9:"已还款";}}',
'locked' => '1',
'translations' => [
[
'id' => 2512,
'field_id' => 2512,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_status.name',
'placeholder' => 'fannan.module.members::field.repayment_status.placeholder',
'warning' => 'fannan.module.members::field.repayment_status.warning',
'instructions' => 'fannan.module.members::field.repayment_status.instructions',
],
],
],
'translations' => [
[
'id' => 2509,
'assignment_id' => 2510,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_status.label.repayment',
'warning' => 'fannan.module.members::field.repayment_status.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_status.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_status.instructions.repayment',
],
],
],
[
'id' => 2511,
'sort_order' => 245,
'stream_id' => 325,
'field_id' => 2513,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2513',
'namespace' => 'members',
'slug' => 'repayment_loan',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:35:"Fannan\MembersModule\Loan\LoanModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2513,
'field_id' => 2513,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_loan.name',
'placeholder' => 'fannan.module.members::field.repayment_loan.placeholder',
'warning' => 'fannan.module.members::field.repayment_loan.warning',
'instructions' => 'fannan.module.members::field.repayment_loan.instructions',
],
],
],
'translations' => [
[
'id' => 2510,
'assignment_id' => 2511,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_loan.label.repayment',
'warning' => 'fannan.module.members::field.repayment_loan.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_loan.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_loan.instructions.repayment',
],
],
],
[
'id' => 2512,
'sort_order' => 246,
'stream_id' => 325,
'field_id' => 2514,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2514',
'namespace' => 'members',
'slug' => 'repayment_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2514,
'field_id' => 2514,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_member_id.name',
'placeholder' => 'fannan.module.members::field.repayment_member_id.placeholder',
'warning' => 'fannan.module.members::field.repayment_member_id.warning',
'instructions' => 'fannan.module.members::field.repayment_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2511,
'assignment_id' => 2512,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_member_id.label.repayment',
'warning' => 'fannan.module.members::field.repayment_member_id.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_member_id.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_member_id.instructions.repayment',
],
],
],
[
'id' => 2513,
'sort_order' => 247,
'stream_id' => 325,
'field_id' => 2516,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2516',
'namespace' => 'members',
'slug' => 'repayment_sn',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2516,
'field_id' => 2516,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_sn.name',
'placeholder' => 'fannan.module.members::field.repayment_sn.placeholder',
'warning' => 'fannan.module.members::field.repayment_sn.warning',
'instructions' => 'fannan.module.members::field.repayment_sn.instructions',
],
],
],
'translations' => [
[
'id' => 2512,
'assignment_id' => 2513,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_sn.label.repayment',
'warning' => 'fannan.module.members::field.repayment_sn.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_sn.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_sn.instructions.repayment',
],
],
],
[
'id' => 2514,
'sort_order' => 248,
'stream_id' => 325,
'field_id' => 2517,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2517',
'namespace' => 'members',
'slug' => 'repayment_loan_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2517,
'field_id' => 2517,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_loan_name.name',
'placeholder' => 'fannan.module.members::field.repayment_loan_name.placeholder',
'warning' => 'fannan.module.members::field.repayment_loan_name.warning',
'instructions' => 'fannan.module.members::field.repayment_loan_name.instructions',
],
],
],
'translations' => [
[
'id' => 2513,
'assignment_id' => 2514,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_loan_name.label.repayment',
'warning' => 'fannan.module.members::field.repayment_loan_name.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_loan_name.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_loan_name.instructions.repayment',
],
],
],
[
'id' => 2515,
'sort_order' => 249,
'stream_id' => 325,
'field_id' => 2518,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2518',
'namespace' => 'members',
'slug' => 'repayment_loan_card',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2518,
'field_id' => 2518,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_loan_card.name',
'placeholder' => 'fannan.module.members::field.repayment_loan_card.placeholder',
'warning' => 'fannan.module.members::field.repayment_loan_card.warning',
'instructions' => 'fannan.module.members::field.repayment_loan_card.instructions',
],
],
],
'translations' => [
[
'id' => 2514,
'assignment_id' => 2515,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_loan_card.label.repayment',
'warning' => 'fannan.module.members::field.repayment_loan_card.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_loan_card.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_loan_card.instructions.repayment',
],
],
],
[
'id' => 2516,
'sort_order' => 250,
'stream_id' => 325,
'field_id' => 2515,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2515',
'namespace' => 'members',
'slug' => 'repayment_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2515,
'field_id' => 2515,
'locale' => 'en',
'name' => 'fannan.module.members::field.repayment_mobile.name',
'placeholder' => 'fannan.module.members::field.repayment_mobile.placeholder',
'warning' => 'fannan.module.members::field.repayment_mobile.warning',
'instructions' => 'fannan.module.members::field.repayment_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2515,
'assignment_id' => 2516,
'locale' => 'en',
'label' => 'fannan.module.members::field.repayment_mobile.label.repayment',
'warning' => 'fannan.module.members::field.repayment_mobile.warning.repayment',
'placeholder' => 'fannan.module.members::field.repayment_mobile.placeholder.repayment',
'instructions' => 'fannan.module.members::field.repayment_mobile.instructions.repayment',
],
],
],
],
'translations' => [
[
'id' => 325,
'stream_id' => 325,
'locale' => 'en',
'name' => 'fannan.module.members::stream.repayment.name',
'description' => 'fannan.module.members::stream.repayment.description',
],
],
];

    
public function repaymentLoan()
{

return $this->getFieldType('repayment_loan')->getRelation();
}

public function repaymentMemberId()
{

return $this->getFieldType('repayment_member_id')->getRelation();
}

}
