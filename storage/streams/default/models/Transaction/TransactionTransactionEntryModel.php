<?php namespace Anomaly\Streams\Platform\Model\Transaction;

use Anomaly\Streams\Platform\Entry\EntryModel;

class TransactionTransactionEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'transaction_transaction';

    protected $titleName = 'trade_out_no';

    protected $rules = [
'trade_out_no' => '',
'trade_amount' => '',
'trade_payment_method' => '',
'trade_no' => '',
'trade_project' => '',
'trade_member' => '',
'trade_mobile' => '',
'trade_status' => '',
'trade_payment_time' => '',
];

    protected $fields = [
'trade_out_no',
'trade_amount',
'trade_payment_method',
'trade_no',
'trade_project',
'trade_member',
'trade_mobile',
'trade_status',
'trade_payment_time',
];

    protected $dates = ['created_at', 'updated_at', 'trade_payment_time'];

    protected $relationships = ['trade_member'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Transaction\TransactionTransactionEntryTranslationsModel';

    protected $stream = [
'id' => '266',
'namespace' => 'transaction',
'slug' => 'transaction',
'prefix' => 'transaction_',
'title_column' => 'trade_out_no',
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
'id' => 2097,
'sort_order' => 247,
'stream_id' => 266,
'field_id' => 2098,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2098',
'namespace' => 'transaction',
'slug' => 'trade_out_no',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2098,
'field_id' => 2098,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_out_no.name',
'placeholder' => 'fannan.module.transaction::field.trade_out_no.placeholder',
'warning' => 'fannan.module.transaction::field.trade_out_no.warning',
'instructions' => 'fannan.module.transaction::field.trade_out_no.instructions',
],
],
],
'translations' => [
[
'id' => 2096,
'assignment_id' => 2097,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_out_no.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_out_no.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_out_no.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_out_no.instructions.transaction',
],
],
],
[
'id' => 2098,
'sort_order' => 248,
'stream_id' => 266,
'field_id' => 2099,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2099',
'namespace' => 'transaction',
'slug' => 'trade_amount',
'type' => 'anomaly.field_type.decimal',
'config' => 'a:6:{s:13:"default_value";N;s:9:"separator";s:1:",";s:5:"point";s:1:".";s:8:"decimals";i:2;s:3:"min";i:0;s:3:"max";d:9999999999999;}',
'locked' => '1',
'translations' => [
[
'id' => 2099,
'field_id' => 2099,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_amount.name',
'placeholder' => 'fannan.module.transaction::field.trade_amount.placeholder',
'warning' => 'fannan.module.transaction::field.trade_amount.warning',
'instructions' => 'fannan.module.transaction::field.trade_amount.instructions',
],
],
],
'translations' => [
[
'id' => 2097,
'assignment_id' => 2098,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_amount.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_amount.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_amount.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_amount.instructions.transaction',
],
],
],
[
'id' => 2099,
'sort_order' => 249,
'stream_id' => 266,
'field_id' => 2100,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2100',
'namespace' => 'transaction',
'slug' => 'trade_payment_method',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2100,
'field_id' => 2100,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_payment_method.name',
'placeholder' => 'fannan.module.transaction::field.trade_payment_method.placeholder',
'warning' => 'fannan.module.transaction::field.trade_payment_method.warning',
'instructions' => 'fannan.module.transaction::field.trade_payment_method.instructions',
],
],
],
'translations' => [
[
'id' => 2098,
'assignment_id' => 2099,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_payment_method.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_payment_method.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_payment_method.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_payment_method.instructions.transaction',
],
],
],
[
'id' => 2100,
'sort_order' => 250,
'stream_id' => 266,
'field_id' => 2101,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2101',
'namespace' => 'transaction',
'slug' => 'trade_no',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2101,
'field_id' => 2101,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_no.name',
'placeholder' => 'fannan.module.transaction::field.trade_no.placeholder',
'warning' => 'fannan.module.transaction::field.trade_no.warning',
'instructions' => 'fannan.module.transaction::field.trade_no.instructions',
],
],
],
'translations' => [
[
'id' => 2099,
'assignment_id' => 2100,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_no.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_no.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_no.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_no.instructions.transaction',
],
],
],
[
'id' => 2101,
'sort_order' => 251,
'stream_id' => 266,
'field_id' => 2102,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2102',
'namespace' => 'transaction',
'slug' => 'trade_project',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2102,
'field_id' => 2102,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_project.name',
'placeholder' => 'fannan.module.transaction::field.trade_project.placeholder',
'warning' => 'fannan.module.transaction::field.trade_project.warning',
'instructions' => 'fannan.module.transaction::field.trade_project.instructions',
],
],
],
'translations' => [
[
'id' => 2100,
'assignment_id' => 2101,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_project.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_project.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_project.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_project.instructions.transaction',
],
],
],
[
'id' => 2102,
'sort_order' => 252,
'stream_id' => 266,
'field_id' => 2103,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2103',
'namespace' => 'transaction',
'slug' => 'trade_member',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2103,
'field_id' => 2103,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_member.name',
'placeholder' => 'fannan.module.transaction::field.trade_member.placeholder',
'warning' => 'fannan.module.transaction::field.trade_member.warning',
'instructions' => 'fannan.module.transaction::field.trade_member.instructions',
],
],
],
'translations' => [
[
'id' => 2101,
'assignment_id' => 2102,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_member.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_member.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_member.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_member.instructions.transaction',
],
],
],
[
'id' => 2103,
'sort_order' => 253,
'stream_id' => 266,
'field_id' => 2104,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2104',
'namespace' => 'transaction',
'slug' => 'trade_mobile',
'type' => 'anomaly.field_type.integer',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2104,
'field_id' => 2104,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_mobile.name',
'placeholder' => 'fannan.module.transaction::field.trade_mobile.placeholder',
'warning' => 'fannan.module.transaction::field.trade_mobile.warning',
'instructions' => 'fannan.module.transaction::field.trade_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2102,
'assignment_id' => 2103,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_mobile.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_mobile.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_mobile.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_mobile.instructions.transaction',
],
],
],
[
'id' => 2104,
'sort_order' => 254,
'stream_id' => 266,
'field_id' => 2105,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2105',
'namespace' => 'transaction',
'slug' => 'trade_status',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:2:{i:1;s:9:"未支付";i:2;s:9:"已支付";}}',
'locked' => '1',
'translations' => [
[
'id' => 2105,
'field_id' => 2105,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_status.name',
'placeholder' => 'fannan.module.transaction::field.trade_status.placeholder',
'warning' => 'fannan.module.transaction::field.trade_status.warning',
'instructions' => 'fannan.module.transaction::field.trade_status.instructions',
],
],
],
'translations' => [
[
'id' => 2103,
'assignment_id' => 2104,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_status.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_status.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_status.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_status.instructions.transaction',
],
],
],
[
'id' => 2105,
'sort_order' => 255,
'stream_id' => 266,
'field_id' => 2106,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2106',
'namespace' => 'transaction',
'slug' => 'trade_payment_time',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2106,
'field_id' => 2106,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_payment_time.name',
'placeholder' => 'fannan.module.transaction::field.trade_payment_time.placeholder',
'warning' => 'fannan.module.transaction::field.trade_payment_time.warning',
'instructions' => 'fannan.module.transaction::field.trade_payment_time.instructions',
],
],
],
'translations' => [
[
'id' => 2104,
'assignment_id' => 2105,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_payment_time.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_payment_time.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_payment_time.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_payment_time.instructions.transaction',
],
],
],
],
'translations' => [
[
'id' => 266,
'stream_id' => 266,
'locale' => 'en',
'name' => 'fannan.module.transaction::stream.transaction.name',
'description' => 'fannan.module.transaction::stream.transaction.description',
],
],
];

    
public function tradeMember()
{

return $this->getFieldType('trade_member')->getRelation();
}

}
