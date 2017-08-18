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
'id' => '237',
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
'id' => 1921,
'sort_order' => 203,
'stream_id' => 237,
'field_id' => 1913,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1913',
'namespace' => 'members',
'slug' => 'gold_num',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:-500;s:3:"max";i:1200;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1913,
'field_id' => 1913,
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
'id' => 1920,
'assignment_id' => 1921,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold_num.label.gold',
'warning' => 'fannan.module.members::field.gold_num.warning.gold',
'placeholder' => 'fannan.module.members::field.gold_num.placeholder.gold',
'instructions' => 'fannan.module.members::field.gold_num.instructions.gold',
],
],
],
[
'id' => 1922,
'sort_order' => 204,
'stream_id' => 237,
'field_id' => 1914,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1914',
'namespace' => 'members',
'slug' => 'gold_summary',
'type' => 'anomaly.field_type.text',
'config' => 'a:1:{s:4:"type";s:4:"text";}',
'locked' => '1',
'translations' => [
[
'id' => 1914,
'field_id' => 1914,
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
'id' => 1921,
'assignment_id' => 1922,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold_summary.label.gold',
'warning' => 'fannan.module.members::field.gold_summary.warning.gold',
'placeholder' => 'fannan.module.members::field.gold_summary.placeholder.gold',
'instructions' => 'fannan.module.members::field.gold_summary.instructions.gold',
],
],
],
[
'id' => 1923,
'sort_order' => 205,
'stream_id' => 237,
'field_id' => 1915,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1915',
'namespace' => 'members',
'slug' => 'gold_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1915,
'field_id' => 1915,
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
'id' => 1922,
'assignment_id' => 1923,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold_mobile.label.gold',
'warning' => 'fannan.module.members::field.gold_mobile.warning.gold',
'placeholder' => 'fannan.module.members::field.gold_mobile.placeholder.gold',
'instructions' => 'fannan.module.members::field.gold_mobile.instructions.gold',
],
],
],
[
'id' => 1924,
'sort_order' => 206,
'stream_id' => 237,
'field_id' => 1916,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1916',
'namespace' => 'members',
'slug' => 'gold_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1916,
'field_id' => 1916,
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
'id' => 1923,
'assignment_id' => 1924,
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
'id' => 237,
'stream_id' => 237,
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
