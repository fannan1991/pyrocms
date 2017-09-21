<?php namespace Anomaly\Streams\Platform\Model\Members;

use Anomaly\Streams\Platform\Entry\EntryModel;

class MembersGoldEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'members_gold';

    protected $titleName = 'id';

    protected $rules = [
'gold_num' => 'required',
'gold_summary' => 'required',
'gold_mobile' => 'required',
'gold_member_id' => '',
];

    protected $fields = [
'gold_num',
'gold_summary',
'gold_mobile',
'gold_member_id',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['gold_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Members\MembersGoldEntryTranslationsModel';

    protected $stream = [
'id' => '323',
'namespace' => 'members',
'slug' => 'gold',
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
'id' => 2493,
'sort_order' => 227,
'stream_id' => 323,
'field_id' => 2495,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2495',
'namespace' => 'members',
'slug' => 'gold_num',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:-500000;s:3:"max";i:1200000;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 2495,
'field_id' => 2495,
'locale' => 'en',
'name' => 'fannan.module.members::field.gold_num.name',
'placeholder' => 'fannan.module.members::field.gold_num.placeholder',
'warning' => 'fannan.module.members::field.gold_num.warning',
'instructions' => 'fannan.module.members::field.gold_num.instructions',
],
],
],
'translations' => [
[
'id' => 2492,
'assignment_id' => 2493,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold_num.label.gold',
'warning' => 'fannan.module.members::field.gold_num.warning.gold',
'placeholder' => 'fannan.module.members::field.gold_num.placeholder.gold',
'instructions' => 'fannan.module.members::field.gold_num.instructions.gold',
],
],
],
[
'id' => 2494,
'sort_order' => 228,
'stream_id' => 323,
'field_id' => 2496,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2496',
'namespace' => 'members',
'slug' => 'gold_summary',
'type' => 'anomaly.field_type.text',
'config' => 'a:1:{s:4:"type";s:4:"text";}',
'locked' => '1',
'translations' => [
[
'id' => 2496,
'field_id' => 2496,
'locale' => 'en',
'name' => 'fannan.module.members::field.gold_summary.name',
'placeholder' => 'fannan.module.members::field.gold_summary.placeholder',
'warning' => 'fannan.module.members::field.gold_summary.warning',
'instructions' => 'fannan.module.members::field.gold_summary.instructions',
],
],
],
'translations' => [
[
'id' => 2493,
'assignment_id' => 2494,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold_summary.label.gold',
'warning' => 'fannan.module.members::field.gold_summary.warning.gold',
'placeholder' => 'fannan.module.members::field.gold_summary.placeholder.gold',
'instructions' => 'fannan.module.members::field.gold_summary.instructions.gold',
],
],
],
[
'id' => 2495,
'sort_order' => 229,
'stream_id' => 323,
'field_id' => 2497,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2497',
'namespace' => 'members',
'slug' => 'gold_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2497,
'field_id' => 2497,
'locale' => 'en',
'name' => 'fannan.module.members::field.gold_mobile.name',
'placeholder' => 'fannan.module.members::field.gold_mobile.placeholder',
'warning' => 'fannan.module.members::field.gold_mobile.warning',
'instructions' => 'fannan.module.members::field.gold_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2494,
'assignment_id' => 2495,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold_mobile.label.gold',
'warning' => 'fannan.module.members::field.gold_mobile.warning.gold',
'placeholder' => 'fannan.module.members::field.gold_mobile.placeholder.gold',
'instructions' => 'fannan.module.members::field.gold_mobile.instructions.gold',
],
],
],
[
'id' => 2496,
'sort_order' => 230,
'stream_id' => 323,
'field_id' => 2498,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2498',
'namespace' => 'members',
'slug' => 'gold_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2498,
'field_id' => 2498,
'locale' => 'en',
'name' => 'fannan.module.members::field.gold_member_id.name',
'placeholder' => 'fannan.module.members::field.gold_member_id.placeholder',
'warning' => 'fannan.module.members::field.gold_member_id.warning',
'instructions' => 'fannan.module.members::field.gold_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2495,
'assignment_id' => 2496,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold_member_id.label.gold',
'warning' => 'fannan.module.members::field.gold_member_id.warning.gold',
'placeholder' => 'fannan.module.members::field.gold_member_id.placeholder.gold',
'instructions' => 'fannan.module.members::field.gold_member_id.instructions.gold',
],
],
],
],
'translations' => [
[
'id' => 323,
'stream_id' => 323,
'locale' => 'en',
'name' => 'fannan.module.members::stream.gold.name',
'description' => 'fannan.module.members::stream.gold.description',
],
],
];

    
public function goldMemberId()
{

return $this->getFieldType('gold_member_id')->getRelation();
}

}
