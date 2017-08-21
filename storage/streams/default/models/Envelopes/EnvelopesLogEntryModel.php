<?php namespace Anomaly\Streams\Platform\Model\Envelopes;

use Anomaly\Streams\Platform\Entry\EntryModel;

class EnvelopesLogEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'envelopes_log';

    protected $titleName = 'id';

    protected $rules = [
'log_name' => 'required',
'log_mobile' => 'required',
'log_amount' => 'required',
'log_member_id' => '',
];

    protected $fields = [
'log_name',
'log_mobile',
'log_amount',
'log_member_id',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['log_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Envelopes\EnvelopesLogEntryTranslationsModel';

    protected $stream = [
'id' => '253',
'namespace' => 'envelopes',
'slug' => 'log',
'prefix' => 'envelopes_',
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
'id' => 2001,
'sort_order' => 243,
'stream_id' => 253,
'field_id' => 1996,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1996',
'namespace' => 'envelopes',
'slug' => 'log_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1996,
'field_id' => 1996,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.log_name.name',
'placeholder' => 'fannan.module.envelopes::field.log_name.placeholder',
'warning' => 'fannan.module.envelopes::field.log_name.warning',
'instructions' => 'fannan.module.envelopes::field.log_name.instructions',
],
],
],
'translations' => [
[
'id' => 2000,
'assignment_id' => 2001,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.log_name.label.log',
'warning' => 'fannan.module.envelopes::field.log_name.warning.log',
'placeholder' => 'fannan.module.envelopes::field.log_name.placeholder.log',
'instructions' => 'fannan.module.envelopes::field.log_name.instructions.log',
],
],
],
[
'id' => 2002,
'sort_order' => 244,
'stream_id' => 253,
'field_id' => 1997,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1997',
'namespace' => 'envelopes',
'slug' => 'log_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1997,
'field_id' => 1997,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.log_mobile.name',
'placeholder' => 'fannan.module.envelopes::field.log_mobile.placeholder',
'warning' => 'fannan.module.envelopes::field.log_mobile.warning',
'instructions' => 'fannan.module.envelopes::field.log_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2001,
'assignment_id' => 2002,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.log_mobile.label.log',
'warning' => 'fannan.module.envelopes::field.log_mobile.warning.log',
'placeholder' => 'fannan.module.envelopes::field.log_mobile.placeholder.log',
'instructions' => 'fannan.module.envelopes::field.log_mobile.instructions.log',
],
],
],
[
'id' => 2003,
'sort_order' => 245,
'stream_id' => 253,
'field_id' => 1998,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1998',
'namespace' => 'envelopes',
'slug' => 'log_amount',
'type' => 'anomaly.field_type.integer',
'config' => 'a:3:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 1998,
'field_id' => 1998,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.log_amount.name',
'placeholder' => 'fannan.module.envelopes::field.log_amount.placeholder',
'warning' => 'fannan.module.envelopes::field.log_amount.warning',
'instructions' => 'fannan.module.envelopes::field.log_amount.instructions',
],
],
],
'translations' => [
[
'id' => 2002,
'assignment_id' => 2003,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.log_amount.label.log',
'warning' => 'fannan.module.envelopes::field.log_amount.warning.log',
'placeholder' => 'fannan.module.envelopes::field.log_amount.placeholder.log',
'instructions' => 'fannan.module.envelopes::field.log_amount.instructions.log',
],
],
],
[
'id' => 2004,
'sort_order' => 246,
'stream_id' => 253,
'field_id' => 1995,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1995',
'namespace' => 'envelopes',
'slug' => 'log_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1995,
'field_id' => 1995,
'locale' => 'en',
'name' => 'fannan.module.envelopes::field.log_member_id.name',
'placeholder' => 'fannan.module.envelopes::field.log_member_id.placeholder',
'warning' => 'fannan.module.envelopes::field.log_member_id.warning',
'instructions' => 'fannan.module.envelopes::field.log_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2003,
'assignment_id' => 2004,
'locale' => 'en',
'label' => 'fannan.module.envelopes::field.log_member_id.label.log',
'warning' => 'fannan.module.envelopes::field.log_member_id.warning.log',
'placeholder' => 'fannan.module.envelopes::field.log_member_id.placeholder.log',
'instructions' => 'fannan.module.envelopes::field.log_member_id.instructions.log',
],
],
],
],
'translations' => [
[
'id' => 253,
'stream_id' => 253,
'locale' => 'en',
'name' => 'fannan.module.envelopes::stream.log.name',
'description' => 'fannan.module.envelopes::stream.log.description',
],
],
];

    
public function logMemberId()
{

return $this->getFieldType('log_member_id')->getRelation();
}

}
