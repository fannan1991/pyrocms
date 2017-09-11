<?php namespace Anomaly\Streams\Platform\Model\Members;

use Anomaly\Streams\Platform\Entry\EntryModel;

class MembersMessageEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'members_message';

    protected $titleName = 'id';

    protected $rules = [
'message_title' => 'required',
'message_content' => 'required',
'message_member_id' => '',
'message_mobile' => 'required',
];

    protected $fields = [
'message_title',
'message_content',
'message_member_id',
'message_mobile',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['message_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Members\MembersMessageEntryTranslationsModel';

    protected $stream = [
'id' => '313',
'namespace' => 'members',
'slug' => 'message',
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
'id' => 2405,
'sort_order' => 258,
'stream_id' => 313,
'field_id' => 2407,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2407',
'namespace' => 'members',
'slug' => 'message_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2407,
'field_id' => 2407,
'locale' => 'en',
'name' => 'fannan.module.members::field.message_title.name',
'placeholder' => 'fannan.module.members::field.message_title.placeholder',
'warning' => 'fannan.module.members::field.message_title.warning',
'instructions' => 'fannan.module.members::field.message_title.instructions',
],
],
],
'translations' => [
[
'id' => 2404,
'assignment_id' => 2405,
'locale' => 'en',
'label' => 'fannan.module.members::field.message_title.label.message',
'warning' => 'fannan.module.members::field.message_title.warning.message',
'placeholder' => 'fannan.module.members::field.message_title.placeholder.message',
'instructions' => 'fannan.module.members::field.message_title.instructions.message',
],
],
],
[
'id' => 2406,
'sort_order' => 259,
'stream_id' => 313,
'field_id' => 2408,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2408',
'namespace' => 'members',
'slug' => 'message_content',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:3:{s:4:"rows";i:5;s:3:"min";i:10;s:3:"max";i:1000;}',
'locked' => '1',
'translations' => [
[
'id' => 2408,
'field_id' => 2408,
'locale' => 'en',
'name' => 'fannan.module.members::field.message_content.name',
'placeholder' => 'fannan.module.members::field.message_content.placeholder',
'warning' => 'fannan.module.members::field.message_content.warning',
'instructions' => 'fannan.module.members::field.message_content.instructions',
],
],
],
'translations' => [
[
'id' => 2405,
'assignment_id' => 2406,
'locale' => 'en',
'label' => 'fannan.module.members::field.message_content.label.message',
'warning' => 'fannan.module.members::field.message_content.warning.message',
'placeholder' => 'fannan.module.members::field.message_content.placeholder.message',
'instructions' => 'fannan.module.members::field.message_content.instructions.message',
],
],
],
[
'id' => 2407,
'sort_order' => 260,
'stream_id' => 313,
'field_id' => 2409,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2409',
'namespace' => 'members',
'slug' => 'message_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2409,
'field_id' => 2409,
'locale' => 'en',
'name' => 'fannan.module.members::field.message_member_id.name',
'placeholder' => 'fannan.module.members::field.message_member_id.placeholder',
'warning' => 'fannan.module.members::field.message_member_id.warning',
'instructions' => 'fannan.module.members::field.message_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2406,
'assignment_id' => 2407,
'locale' => 'en',
'label' => 'fannan.module.members::field.message_member_id.label.message',
'warning' => 'fannan.module.members::field.message_member_id.warning.message',
'placeholder' => 'fannan.module.members::field.message_member_id.placeholder.message',
'instructions' => 'fannan.module.members::field.message_member_id.instructions.message',
],
],
],
[
'id' => 2408,
'sort_order' => 261,
'stream_id' => 313,
'field_id' => 2410,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2410',
'namespace' => 'members',
'slug' => 'message_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:2:{s:4:"type";s:4:"text";s:3:"min";i:2;}',
'locked' => '1',
'translations' => [
[
'id' => 2410,
'field_id' => 2410,
'locale' => 'en',
'name' => 'fannan.module.members::field.message_mobile.name',
'placeholder' => 'fannan.module.members::field.message_mobile.placeholder',
'warning' => 'fannan.module.members::field.message_mobile.warning',
'instructions' => 'fannan.module.members::field.message_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2407,
'assignment_id' => 2408,
'locale' => 'en',
'label' => 'fannan.module.members::field.message_mobile.label.message',
'warning' => 'fannan.module.members::field.message_mobile.warning.message',
'placeholder' => 'fannan.module.members::field.message_mobile.placeholder.message',
'instructions' => 'fannan.module.members::field.message_mobile.instructions.message',
],
],
],
],
'translations' => [
[
'id' => 313,
'stream_id' => 313,
'locale' => 'en',
'name' => 'fannan.module.members::stream.message.name',
'description' => 'fannan.module.members::stream.message.description',
],
],
];

    
public function messageMemberId()
{

return $this->getFieldType('message_member_id')->getRelation();
}

}
