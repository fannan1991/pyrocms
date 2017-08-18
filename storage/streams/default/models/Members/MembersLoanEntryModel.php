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
'loan_member_id',
];

    protected $dates = ['created_at', 'updated_at', 'loan_date'];

    protected $relationships = ['loan_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Members\MembersLoanEntryTranslationsModel';

    protected $stream = [
'id' => '238',
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
'id' => 1925,
'sort_order' => 207,
'stream_id' => 238,
'field_id' => 1917,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1917',
'namespace' => 'members',
'slug' => 'loan_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1917,
'field_id' => 1917,
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
'id' => 1924,
'assignment_id' => 1925,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_name.label.loan',
'warning' => 'fannan.module.members::field.loan_name.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_name.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_name.instructions.loan',
],
],
],
[
'id' => 1926,
'sort_order' => 208,
'stream_id' => 238,
'field_id' => 1918,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1918',
'namespace' => 'members',
'slug' => 'loan_id_card',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1918,
'field_id' => 1918,
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
'id' => 1925,
'assignment_id' => 1926,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_id_card.label.loan',
'warning' => 'fannan.module.members::field.loan_id_card.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_id_card.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_id_card.instructions.loan',
],
],
],
[
'id' => 1927,
'sort_order' => 209,
'stream_id' => 238,
'field_id' => 1919,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1919',
'namespace' => 'members',
'slug' => 'loan_amount',
'type' => 'anomaly.field_type.decimal',
'config' => 'a:6:{s:13:"default_value";N;s:9:"separator";s:1:",";s:5:"point";s:1:".";s:8:"decimals";i:2;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1919,
'field_id' => 1919,
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
'id' => 1926,
'assignment_id' => 1927,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_amount.label.loan',
'warning' => 'fannan.module.members::field.loan_amount.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_amount.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_amount.instructions.loan',
],
],
],
[
'id' => 1928,
'sort_order' => 210,
'stream_id' => 238,
'field_id' => 1920,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1920',
'namespace' => 'members',
'slug' => 'loan_order_sn',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1920,
'field_id' => 1920,
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
'id' => 1927,
'assignment_id' => 1928,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_order_sn.label.loan',
'warning' => 'fannan.module.members::field.loan_order_sn.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_order_sn.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_order_sn.instructions.loan',
],
],
],
[
'id' => 1929,
'sort_order' => 211,
'stream_id' => 238,
'field_id' => 1921,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1921',
'namespace' => 'members',
'slug' => 'loan_status',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:4:{i:0;s:9:"待审核";i:1;s:12:"审核通过";i:2;s:12:"审核拒绝";i:3;s:9:"已完成";}}',
'locked' => '1',
'translations' => [
[
'id' => 1921,
'field_id' => 1921,
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
'id' => 1928,
'assignment_id' => 1929,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_status.label.loan',
'warning' => 'fannan.module.members::field.loan_status.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_status.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_status.instructions.loan',
],
],
],
[
'id' => 1930,
'sort_order' => 212,
'stream_id' => 238,
'field_id' => 1922,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1922',
'namespace' => 'members',
'slug' => 'loan_date',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1922,
'field_id' => 1922,
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
'id' => 1929,
'assignment_id' => 1930,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_date.label.loan',
'warning' => 'fannan.module.members::field.loan_date.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_date.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_date.instructions.loan',
],
],
],
[
'id' => 1931,
'sort_order' => 213,
'stream_id' => 238,
'field_id' => 1923,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1923',
'namespace' => 'members',
'slug' => 'loan_repayment_date',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:1;s:3:"max";i:28;s:4:"step";i:1;s:13:"default_value";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1923,
'field_id' => 1923,
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
'id' => 1930,
'assignment_id' => 1931,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_repayment_date.label.loan',
'warning' => 'fannan.module.members::field.loan_repayment_date.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_repayment_date.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_repayment_date.instructions.loan',
],
],
],
[
'id' => 1932,
'sort_order' => 214,
'stream_id' => 238,
'field_id' => 1924,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1924',
'namespace' => 'members',
'slug' => 'loan_term_date',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:1;s:3:"max";i:1000;s:4:"step";i:1;s:13:"default_value";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1924,
'field_id' => 1924,
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
'id' => 1931,
'assignment_id' => 1932,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_term_date.label.loan',
'warning' => 'fannan.module.members::field.loan_term_date.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_term_date.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_term_date.instructions.loan',
],
],
],
[
'id' => 1933,
'sort_order' => 215,
'stream_id' => 238,
'field_id' => 1925,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1925',
'namespace' => 'members',
'slug' => 'loan_bz',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 1925,
'field_id' => 1925,
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
'id' => 1932,
'assignment_id' => 1933,
'locale' => 'en',
'label' => 'fannan.module.members::field.loan_bz.label.loan',
'warning' => 'fannan.module.members::field.loan_bz.warning.loan',
'placeholder' => 'fannan.module.members::field.loan_bz.placeholder.loan',
'instructions' => 'fannan.module.members::field.loan_bz.instructions.loan',
],
],
],
[
'id' => 1934,
'sort_order' => 216,
'stream_id' => 238,
'field_id' => 1927,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1927',
'namespace' => 'members',
'slug' => 'loan_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1927,
'field_id' => 1927,
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
'id' => 1933,
'assignment_id' => 1934,
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
'id' => 238,
'stream_id' => 238,
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
