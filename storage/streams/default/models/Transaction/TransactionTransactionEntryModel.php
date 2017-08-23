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
'trade_member_id' => '',
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
'trade_member_id',
'trade_mobile',
'trade_status',
'trade_payment_time',
];

    protected $dates = ['created_at', 'updated_at', 'trade_payment_time'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Transaction\TransactionTransactionEntryTranslationsModel';

    protected $stream = [
'id' => '258',
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
'id' => 2035,
'sort_order' => 247,
'stream_id' => 258,
'field_id' => 2036,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2036',
'namespace' => 'transaction',
'slug' => 'trade_out_no',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2036,
'field_id' => 2036,
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
'id' => 2034,
'assignment_id' => 2035,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_out_no.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_out_no.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_out_no.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_out_no.instructions.transaction',
],
],
],
[
'id' => 2036,
'sort_order' => 248,
'stream_id' => 258,
'field_id' => 2037,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2037',
'namespace' => 'transaction',
'slug' => 'trade_amount',
'type' => 'anomaly.field_type.decimal',
'config' => 'a:6:{s:13:"default_value";N;s:9:"separator";s:1:",";s:5:"point";s:1:".";s:8:"decimals";i:2;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2037,
'field_id' => 2037,
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
'id' => 2035,
'assignment_id' => 2036,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_amount.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_amount.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_amount.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_amount.instructions.transaction',
],
],
],
[
'id' => 2037,
'sort_order' => 249,
'stream_id' => 258,
'field_id' => 2038,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2038',
'namespace' => 'transaction',
'slug' => 'trade_payment_method',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2038,
'field_id' => 2038,
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
'id' => 2036,
'assignment_id' => 2037,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_payment_method.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_payment_method.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_payment_method.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_payment_method.instructions.transaction',
],
],
],
[
'id' => 2038,
'sort_order' => 250,
'stream_id' => 258,
'field_id' => 2039,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2039',
'namespace' => 'transaction',
'slug' => 'trade_no',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2039,
'field_id' => 2039,
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
'id' => 2037,
'assignment_id' => 2038,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_no.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_no.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_no.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_no.instructions.transaction',
],
],
],
[
'id' => 2039,
'sort_order' => 251,
'stream_id' => 258,
'field_id' => 2040,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2040',
'namespace' => 'transaction',
'slug' => 'trade_project',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2040,
'field_id' => 2040,
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
'id' => 2038,
'assignment_id' => 2039,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_project.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_project.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_project.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_project.instructions.transaction',
],
],
],
[
'id' => 2040,
'sort_order' => 252,
'stream_id' => 258,
'field_id' => 2041,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2041',
'namespace' => 'transaction',
'slug' => 'trade_member_id',
'type' => 'anomaly.field_type.integer',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2041,
'field_id' => 2041,
'locale' => 'en',
'name' => 'fannan.module.transaction::field.trade_member_id.name',
'placeholder' => 'fannan.module.transaction::field.trade_member_id.placeholder',
'warning' => 'fannan.module.transaction::field.trade_member_id.warning',
'instructions' => 'fannan.module.transaction::field.trade_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2039,
'assignment_id' => 2040,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_member_id.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_member_id.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_member_id.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_member_id.instructions.transaction',
],
],
],
[
'id' => 2041,
'sort_order' => 253,
'stream_id' => 258,
'field_id' => 2042,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2042',
'namespace' => 'transaction',
'slug' => 'trade_mobile',
'type' => 'anomaly.field_type.integer',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2042,
'field_id' => 2042,
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
'id' => 2040,
'assignment_id' => 2041,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_mobile.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_mobile.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_mobile.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_mobile.instructions.transaction',
],
],
],
[
'id' => 2042,
'sort_order' => 254,
'stream_id' => 258,
'field_id' => 2043,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2043',
'namespace' => 'transaction',
'slug' => 'trade_status',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:2:{i:1;s:9:"未支付";i:2;s:9:"已支付";}}',
'locked' => '1',
'translations' => [
[
'id' => 2043,
'field_id' => 2043,
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
'id' => 2041,
'assignment_id' => 2042,
'locale' => 'en',
'label' => 'fannan.module.transaction::field.trade_status.label.transaction',
'warning' => 'fannan.module.transaction::field.trade_status.warning.transaction',
'placeholder' => 'fannan.module.transaction::field.trade_status.placeholder.transaction',
'instructions' => 'fannan.module.transaction::field.trade_status.instructions.transaction',
],
],
],
[
'id' => 2043,
'sort_order' => 255,
'stream_id' => 258,
'field_id' => 2044,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2044',
'namespace' => 'transaction',
'slug' => 'trade_payment_time',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:9:{s:13:"default_value";N;s:4:"mode";s:8:"datetime";s:11:"date_format";s:6:"j F, Y";s:10:"year_range";s:7:"-50:+50";s:11:"time_format";s:5:"g:i A";s:8:"timezone";N;s:4:"step";i:1;s:3:"min";N;s:3:"max";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2044,
'field_id' => 2044,
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
'id' => 2042,
'assignment_id' => 2043,
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
'id' => 258,
'stream_id' => 258,
'locale' => 'en',
'name' => 'fannan.module.transaction::stream.transaction.name',
'description' => 'fannan.module.transaction::stream.transaction.description',
],
],
];

    
}
