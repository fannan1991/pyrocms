<?php namespace Anomaly\Streams\Platform\Model\Members;

use Anomaly\Streams\Platform\Entry\EntryModel;

class MembersIntegralEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'members_integral';

    protected $titleName = 'id';

    protected $rules = [
'integral_num' => 'required',
'integral_summary' => 'required',
'integral_mobile' => 'required',
'integral_member_id' => '',
];

    protected $fields = [
'integral_num',
'integral_summary',
'integral_mobile',
'integral_member_id',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['integral_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Members\MembersIntegralEntryTranslationsModel';

    protected $stream = [
'id' => '322',
'namespace' => 'members',
'slug' => 'integral',
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
'id' => 2489,
'sort_order' => 223,
'stream_id' => 322,
'field_id' => 2491,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2491',
'namespace' => 'members',
'slug' => 'integral_num',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:-500;s:3:"max";i:1200;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 2491,
'field_id' => 2491,
'locale' => 'en',
'name' => 'fannan.module.members::field.integral_num.name',
'placeholder' => 'fannan.module.members::field.integral_num.placeholder',
'warning' => 'fannan.module.members::field.integral_num.warning',
'instructions' => 'fannan.module.members::field.integral_num.instructions',
],
],
],
'translations' => [
[
'id' => 2488,
'assignment_id' => 2489,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral_num.label.integral',
'warning' => 'fannan.module.members::field.integral_num.warning.integral',
'placeholder' => 'fannan.module.members::field.integral_num.placeholder.integral',
'instructions' => 'fannan.module.members::field.integral_num.instructions.integral',
],
],
],
[
'id' => 2490,
'sort_order' => 224,
'stream_id' => 322,
'field_id' => 2492,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2492',
'namespace' => 'members',
'slug' => 'integral_summary',
'type' => 'anomaly.field_type.text',
'config' => 'a:1:{s:4:"type";s:4:"text";}',
'locked' => '1',
'translations' => [
[
'id' => 2492,
'field_id' => 2492,
'locale' => 'en',
'name' => 'fannan.module.members::field.integral_summary.name',
'placeholder' => 'fannan.module.members::field.integral_summary.placeholder',
'warning' => 'fannan.module.members::field.integral_summary.warning',
'instructions' => 'fannan.module.members::field.integral_summary.instructions',
],
],
],
'translations' => [
[
'id' => 2489,
'assignment_id' => 2490,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral_summary.label.integral',
'warning' => 'fannan.module.members::field.integral_summary.warning.integral',
'placeholder' => 'fannan.module.members::field.integral_summary.placeholder.integral',
'instructions' => 'fannan.module.members::field.integral_summary.instructions.integral',
],
],
],
[
'id' => 2491,
'sort_order' => 225,
'stream_id' => 322,
'field_id' => 2493,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2493',
'namespace' => 'members',
'slug' => 'integral_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2493,
'field_id' => 2493,
'locale' => 'en',
'name' => 'fannan.module.members::field.integral_mobile.name',
'placeholder' => 'fannan.module.members::field.integral_mobile.placeholder',
'warning' => 'fannan.module.members::field.integral_mobile.warning',
'instructions' => 'fannan.module.members::field.integral_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2490,
'assignment_id' => 2491,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral_mobile.label.integral',
'warning' => 'fannan.module.members::field.integral_mobile.warning.integral',
'placeholder' => 'fannan.module.members::field.integral_mobile.placeholder.integral',
'instructions' => 'fannan.module.members::field.integral_mobile.instructions.integral',
],
],
],
[
'id' => 2492,
'sort_order' => 226,
'stream_id' => 322,
'field_id' => 2494,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2494',
'namespace' => 'members',
'slug' => 'integral_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2494,
'field_id' => 2494,
'locale' => 'en',
'name' => 'fannan.module.members::field.integral_member_id.name',
'placeholder' => 'fannan.module.members::field.integral_member_id.placeholder',
'warning' => 'fannan.module.members::field.integral_member_id.warning',
'instructions' => 'fannan.module.members::field.integral_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2491,
'assignment_id' => 2492,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral_member_id.label.integral',
'warning' => 'fannan.module.members::field.integral_member_id.warning.integral',
'placeholder' => 'fannan.module.members::field.integral_member_id.placeholder.integral',
'instructions' => 'fannan.module.members::field.integral_member_id.instructions.integral',
],
],
],
],
'translations' => [
[
'id' => 322,
'stream_id' => 322,
'locale' => 'en',
'name' => 'fannan.module.members::stream.integral.name',
'description' => 'fannan.module.members::stream.integral.description',
],
],
];

    
public function integralMemberId()
{

return $this->getFieldType('integral_member_id')->getRelation();
}

}
