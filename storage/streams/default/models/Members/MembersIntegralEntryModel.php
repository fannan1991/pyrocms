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
'id' => '236',
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
'id' => 1917,
'sort_order' => 199,
'stream_id' => 236,
'field_id' => 1909,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1909',
'namespace' => 'members',
'slug' => 'integral_num',
'type' => 'anomaly.field_type.integer',
'config' => 'a:5:{s:9:"separator";s:1:",";s:3:"min";i:-500;s:3:"max";i:1200;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1909,
'field_id' => 1909,
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
'id' => 1916,
'assignment_id' => 1917,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral_num.label.integral',
'warning' => 'fannan.module.members::field.integral_num.warning.integral',
'placeholder' => 'fannan.module.members::field.integral_num.placeholder.integral',
'instructions' => 'fannan.module.members::field.integral_num.instructions.integral',
],
],
],
[
'id' => 1918,
'sort_order' => 200,
'stream_id' => 236,
'field_id' => 1910,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1910',
'namespace' => 'members',
'slug' => 'integral_summary',
'type' => 'anomaly.field_type.text',
'config' => 'a:1:{s:4:"type";s:4:"text";}',
'locked' => '1',
'translations' => [
[
'id' => 1910,
'field_id' => 1910,
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
'id' => 1917,
'assignment_id' => 1918,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral_summary.label.integral',
'warning' => 'fannan.module.members::field.integral_summary.warning.integral',
'placeholder' => 'fannan.module.members::field.integral_summary.placeholder.integral',
'instructions' => 'fannan.module.members::field.integral_summary.instructions.integral',
],
],
],
[
'id' => 1919,
'sort_order' => 201,
'stream_id' => 236,
'field_id' => 1911,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1911',
'namespace' => 'members',
'slug' => 'integral_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1911,
'field_id' => 1911,
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
'id' => 1918,
'assignment_id' => 1919,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral_mobile.label.integral',
'warning' => 'fannan.module.members::field.integral_mobile.warning.integral',
'placeholder' => 'fannan.module.members::field.integral_mobile.placeholder.integral',
'instructions' => 'fannan.module.members::field.integral_mobile.instructions.integral',
],
],
],
[
'id' => 1920,
'sort_order' => 202,
'stream_id' => 236,
'field_id' => 1912,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1912',
'namespace' => 'members',
'slug' => 'integral_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1912,
'field_id' => 1912,
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
'id' => 1919,
'assignment_id' => 1920,
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
'id' => 236,
'stream_id' => 236,
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
