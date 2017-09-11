<?php namespace Anomaly\Streams\Platform\Model\Members;

use Anomaly\Streams\Platform\Entry\EntryModel;

class MembersMembersEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'members_members';

    protected $titleName = 'mobile';

    protected $rules = [
'mobile' => 'required|unique:members_members,mobile',
'password' => 'required',
'openid' => '',
'invitation_code' => 'required',
'nickname' => '',
'avatar' => '',
'grade' => '',
'verified_status' => '',
'real_name' => '',
'id_card' => '',
'card_positive_pic' => '',
'card_negative_pic' => '',
'card_pic' => '',
'results' => '',
'integral' => '',
'gold' => '',
'parent_id' => '',
'grand_id' => '',
'great_grand_id' => '',
'qrcode' => '',
];

    protected $fields = [
'mobile',
'password',
'openid',
'invitation_code',
'nickname',
'avatar',
'grade',
'verified_status',
'real_name',
'id_card',
'card_positive_pic',
'card_negative_pic',
'card_pic',
'results',
'integral',
'gold',
'parent_id',
'grand_id',
'great_grand_id',
'qrcode',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['avatar', 'card_positive_pic', 'card_negative_pic', 'card_pic', 'parent_id', 'grand_id', 'great_grand_id'];

    

    

    

    protected $stream = [
'id' => '307',
'namespace' => 'members',
'slug' => 'members',
'prefix' => 'members_',
'title_column' => 'mobile',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '0',
'translatable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 2350,
'sort_order' => 203,
'stream_id' => 307,
'field_id' => 2351,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2351',
'namespace' => 'members',
'slug' => 'mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2351,
'field_id' => 2351,
'locale' => 'en',
'name' => 'fannan.module.members::field.mobile.name',
'placeholder' => 'fannan.module.members::field.mobile.placeholder',
'warning' => 'fannan.module.members::field.mobile.warning',
'instructions' => 'fannan.module.members::field.mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2349,
'assignment_id' => 2350,
'locale' => 'en',
'label' => 'fannan.module.members::field.mobile.label.members',
'warning' => 'fannan.module.members::field.mobile.warning.members',
'placeholder' => 'fannan.module.members::field.mobile.placeholder.members',
'instructions' => 'fannan.module.members::field.mobile.instructions.members',
],
],
],
[
'id' => 2351,
'sort_order' => 204,
'stream_id' => 307,
'field_id' => 2352,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2352',
'namespace' => 'members',
'slug' => 'password',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2352,
'field_id' => 2352,
'locale' => 'en',
'name' => 'fannan.module.members::field.password.name',
'placeholder' => 'fannan.module.members::field.password.placeholder',
'warning' => 'fannan.module.members::field.password.warning',
'instructions' => 'fannan.module.members::field.password.instructions',
],
],
],
'translations' => [
[
'id' => 2350,
'assignment_id' => 2351,
'locale' => 'en',
'label' => 'fannan.module.members::field.password.label.members',
'warning' => 'fannan.module.members::field.password.warning.members',
'placeholder' => 'fannan.module.members::field.password.placeholder.members',
'instructions' => 'fannan.module.members::field.password.instructions.members',
],
],
],
[
'id' => 2352,
'sort_order' => 205,
'stream_id' => 307,
'field_id' => 2353,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2353',
'namespace' => 'members',
'slug' => 'openid',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2353,
'field_id' => 2353,
'locale' => 'en',
'name' => 'fannan.module.members::field.openid.name',
'placeholder' => 'fannan.module.members::field.openid.placeholder',
'warning' => 'fannan.module.members::field.openid.warning',
'instructions' => 'fannan.module.members::field.openid.instructions',
],
],
],
'translations' => [
[
'id' => 2351,
'assignment_id' => 2352,
'locale' => 'en',
'label' => 'fannan.module.members::field.openid.label.members',
'warning' => 'fannan.module.members::field.openid.warning.members',
'placeholder' => 'fannan.module.members::field.openid.placeholder.members',
'instructions' => 'fannan.module.members::field.openid.instructions.members',
],
],
],
[
'id' => 2353,
'sort_order' => 206,
'stream_id' => 307,
'field_id' => 2354,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2354',
'namespace' => 'members',
'slug' => 'invitation_code',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:12;}',
'locked' => '1',
'translations' => [
[
'id' => 2354,
'field_id' => 2354,
'locale' => 'en',
'name' => 'fannan.module.members::field.invitation_code.name',
'placeholder' => 'fannan.module.members::field.invitation_code.placeholder',
'warning' => 'fannan.module.members::field.invitation_code.warning',
'instructions' => 'fannan.module.members::field.invitation_code.instructions',
],
],
],
'translations' => [
[
'id' => 2352,
'assignment_id' => 2353,
'locale' => 'en',
'label' => 'fannan.module.members::field.invitation_code.label.members',
'warning' => 'fannan.module.members::field.invitation_code.warning.members',
'placeholder' => 'fannan.module.members::field.invitation_code.placeholder.members',
'instructions' => 'fannan.module.members::field.invitation_code.instructions.members',
],
],
],
[
'id' => 2354,
'sort_order' => 207,
'stream_id' => 307,
'field_id' => 2355,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2355',
'namespace' => 'members',
'slug' => 'nickname',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:24;}',
'locked' => '1',
'translations' => [
[
'id' => 2355,
'field_id' => 2355,
'locale' => 'en',
'name' => 'fannan.module.members::field.nickname.name',
'placeholder' => 'fannan.module.members::field.nickname.placeholder',
'warning' => 'fannan.module.members::field.nickname.warning',
'instructions' => 'fannan.module.members::field.nickname.instructions',
],
],
],
'translations' => [
[
'id' => 2353,
'assignment_id' => 2354,
'locale' => 'en',
'label' => 'fannan.module.members::field.nickname.label.members',
'warning' => 'fannan.module.members::field.nickname.warning.members',
'placeholder' => 'fannan.module.members::field.nickname.placeholder.members',
'instructions' => 'fannan.module.members::field.nickname.instructions.members',
],
],
],
[
'id' => 2355,
'sort_order' => 208,
'stream_id' => 307,
'field_id' => 2356,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2356',
'namespace' => 'members',
'slug' => 'avatar',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2356,
'field_id' => 2356,
'locale' => 'en',
'name' => 'fannan.module.members::field.avatar.name',
'placeholder' => 'fannan.module.members::field.avatar.placeholder',
'warning' => 'fannan.module.members::field.avatar.warning',
'instructions' => 'fannan.module.members::field.avatar.instructions',
],
],
],
'translations' => [
[
'id' => 2354,
'assignment_id' => 2355,
'locale' => 'en',
'label' => 'fannan.module.members::field.avatar.label.members',
'warning' => 'fannan.module.members::field.avatar.warning.members',
'placeholder' => 'fannan.module.members::field.avatar.placeholder.members',
'instructions' => 'fannan.module.members::field.avatar.instructions.members',
],
],
],
[
'id' => 2356,
'sort_order' => 209,
'stream_id' => 307,
'field_id' => 2357,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2357',
'namespace' => 'members',
'slug' => 'grade',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:7:"options";a:6:{i:1;s:6:"游客";i:2;s:12:"普通会员";i:3;s:12:"铜牌会员";i:4;s:12:"银牌会员";i:5;s:12:"金牌会员";i:6;s:12:"钻石会员";}s:13:"default_value";s:1:"1";}',
'locked' => '1',
'translations' => [
[
'id' => 2357,
'field_id' => 2357,
'locale' => 'en',
'name' => 'fannan.module.members::field.grade.name',
'placeholder' => 'fannan.module.members::field.grade.placeholder',
'warning' => 'fannan.module.members::field.grade.warning',
'instructions' => 'fannan.module.members::field.grade.instructions',
],
],
],
'translations' => [
[
'id' => 2355,
'assignment_id' => 2356,
'locale' => 'en',
'label' => 'fannan.module.members::field.grade.label.members',
'warning' => 'fannan.module.members::field.grade.warning.members',
'placeholder' => 'fannan.module.members::field.grade.placeholder.members',
'instructions' => 'fannan.module.members::field.grade.instructions.members',
],
],
],
[
'id' => 2357,
'sort_order' => 210,
'stream_id' => 307,
'field_id' => 2358,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2358',
'namespace' => 'members',
'slug' => 'verified_status',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:4:{i:0;s:9:"未认证";i:1;s:12:"认证通过";i:2;s:9:"审核中";i:3;s:12:"认证失败";}}',
'locked' => '1',
'translations' => [
[
'id' => 2358,
'field_id' => 2358,
'locale' => 'en',
'name' => 'fannan.module.members::field.verified_status.name',
'placeholder' => 'fannan.module.members::field.verified_status.placeholder',
'warning' => 'fannan.module.members::field.verified_status.warning',
'instructions' => 'fannan.module.members::field.verified_status.instructions',
],
],
],
'translations' => [
[
'id' => 2356,
'assignment_id' => 2357,
'locale' => 'en',
'label' => 'fannan.module.members::field.verified_status.label.members',
'warning' => 'fannan.module.members::field.verified_status.warning.members',
'placeholder' => 'fannan.module.members::field.verified_status.placeholder.members',
'instructions' => 'fannan.module.members::field.verified_status.instructions.members',
],
],
],
[
'id' => 2358,
'sort_order' => 211,
'stream_id' => 307,
'field_id' => 2359,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2359',
'namespace' => 'members',
'slug' => 'real_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:12;}',
'locked' => '1',
'translations' => [
[
'id' => 2359,
'field_id' => 2359,
'locale' => 'en',
'name' => 'fannan.module.members::field.real_name.name',
'placeholder' => 'fannan.module.members::field.real_name.placeholder',
'warning' => 'fannan.module.members::field.real_name.warning',
'instructions' => 'fannan.module.members::field.real_name.instructions',
],
],
],
'translations' => [
[
'id' => 2357,
'assignment_id' => 2358,
'locale' => 'en',
'label' => 'fannan.module.members::field.real_name.label.members',
'warning' => 'fannan.module.members::field.real_name.warning.members',
'placeholder' => 'fannan.module.members::field.real_name.placeholder.members',
'instructions' => 'fannan.module.members::field.real_name.instructions.members',
],
],
],
[
'id' => 2359,
'sort_order' => 212,
'stream_id' => 307,
'field_id' => 2360,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2360',
'namespace' => 'members',
'slug' => 'id_card',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:24;}',
'locked' => '1',
'translations' => [
[
'id' => 2360,
'field_id' => 2360,
'locale' => 'en',
'name' => 'fannan.module.members::field.id_card.name',
'placeholder' => 'fannan.module.members::field.id_card.placeholder',
'warning' => 'fannan.module.members::field.id_card.warning',
'instructions' => 'fannan.module.members::field.id_card.instructions',
],
],
],
'translations' => [
[
'id' => 2358,
'assignment_id' => 2359,
'locale' => 'en',
'label' => 'fannan.module.members::field.id_card.label.members',
'warning' => 'fannan.module.members::field.id_card.warning.members',
'placeholder' => 'fannan.module.members::field.id_card.placeholder.members',
'instructions' => 'fannan.module.members::field.id_card.instructions.members',
],
],
],
[
'id' => 2360,
'sort_order' => 213,
'stream_id' => 307,
'field_id' => 2361,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2361',
'namespace' => 'members',
'slug' => 'card_positive_pic',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2361,
'field_id' => 2361,
'locale' => 'en',
'name' => 'fannan.module.members::field.card_positive_pic.name',
'placeholder' => 'fannan.module.members::field.card_positive_pic.placeholder',
'warning' => 'fannan.module.members::field.card_positive_pic.warning',
'instructions' => 'fannan.module.members::field.card_positive_pic.instructions',
],
],
],
'translations' => [
[
'id' => 2359,
'assignment_id' => 2360,
'locale' => 'en',
'label' => 'fannan.module.members::field.card_positive_pic.label.members',
'warning' => 'fannan.module.members::field.card_positive_pic.warning.members',
'placeholder' => 'fannan.module.members::field.card_positive_pic.placeholder.members',
'instructions' => 'fannan.module.members::field.card_positive_pic.instructions.members',
],
],
],
[
'id' => 2361,
'sort_order' => 214,
'stream_id' => 307,
'field_id' => 2362,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2362',
'namespace' => 'members',
'slug' => 'card_negative_pic',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2362,
'field_id' => 2362,
'locale' => 'en',
'name' => 'fannan.module.members::field.card_negative_pic.name',
'placeholder' => 'fannan.module.members::field.card_negative_pic.placeholder',
'warning' => 'fannan.module.members::field.card_negative_pic.warning',
'instructions' => 'fannan.module.members::field.card_negative_pic.instructions',
],
],
],
'translations' => [
[
'id' => 2360,
'assignment_id' => 2361,
'locale' => 'en',
'label' => 'fannan.module.members::field.card_negative_pic.label.members',
'warning' => 'fannan.module.members::field.card_negative_pic.warning.members',
'placeholder' => 'fannan.module.members::field.card_negative_pic.placeholder.members',
'instructions' => 'fannan.module.members::field.card_negative_pic.instructions.members',
],
],
],
[
'id' => 2362,
'sort_order' => 215,
'stream_id' => 307,
'field_id' => 2363,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2363',
'namespace' => 'members',
'slug' => 'card_pic',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2363,
'field_id' => 2363,
'locale' => 'en',
'name' => 'fannan.module.members::field.card_pic.name',
'placeholder' => 'fannan.module.members::field.card_pic.placeholder',
'warning' => 'fannan.module.members::field.card_pic.warning',
'instructions' => 'fannan.module.members::field.card_pic.instructions',
],
],
],
'translations' => [
[
'id' => 2361,
'assignment_id' => 2362,
'locale' => 'en',
'label' => 'fannan.module.members::field.card_pic.label.members',
'warning' => 'fannan.module.members::field.card_pic.warning.members',
'placeholder' => 'fannan.module.members::field.card_pic.placeholder.members',
'instructions' => 'fannan.module.members::field.card_pic.instructions.members',
],
],
],
[
'id' => 2363,
'sort_order' => 216,
'stream_id' => 307,
'field_id' => 2364,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2364',
'namespace' => 'members',
'slug' => 'results',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 2364,
'field_id' => 2364,
'locale' => 'en',
'name' => 'fannan.module.members::field.results.name',
'placeholder' => 'fannan.module.members::field.results.placeholder',
'warning' => 'fannan.module.members::field.results.warning',
'instructions' => 'fannan.module.members::field.results.instructions',
],
],
],
'translations' => [
[
'id' => 2362,
'assignment_id' => 2363,
'locale' => 'en',
'label' => 'fannan.module.members::field.results.label.members',
'warning' => 'fannan.module.members::field.results.warning.members',
'placeholder' => 'fannan.module.members::field.results.placeholder.members',
'instructions' => 'fannan.module.members::field.results.instructions.members',
],
],
],
[
'id' => 2364,
'sort_order' => 217,
'stream_id' => 307,
'field_id' => 2365,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2365',
'namespace' => 'members',
'slug' => 'integral',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 2365,
'field_id' => 2365,
'locale' => 'en',
'name' => 'fannan.module.members::field.integral.name',
'placeholder' => 'fannan.module.members::field.integral.placeholder',
'warning' => 'fannan.module.members::field.integral.warning',
'instructions' => 'fannan.module.members::field.integral.instructions',
],
],
],
'translations' => [
[
'id' => 2363,
'assignment_id' => 2364,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral.label.members',
'warning' => 'fannan.module.members::field.integral.warning.members',
'placeholder' => 'fannan.module.members::field.integral.placeholder.members',
'instructions' => 'fannan.module.members::field.integral.instructions.members',
],
],
],
[
'id' => 2365,
'sort_order' => 218,
'stream_id' => 307,
'field_id' => 2366,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2366',
'namespace' => 'members',
'slug' => 'gold',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 2366,
'field_id' => 2366,
'locale' => 'en',
'name' => 'fannan.module.members::field.gold.name',
'placeholder' => 'fannan.module.members::field.gold.placeholder',
'warning' => 'fannan.module.members::field.gold.warning',
'instructions' => 'fannan.module.members::field.gold.instructions',
],
],
],
'translations' => [
[
'id' => 2364,
'assignment_id' => 2365,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold.label.members',
'warning' => 'fannan.module.members::field.gold.warning.members',
'placeholder' => 'fannan.module.members::field.gold.placeholder.members',
'instructions' => 'fannan.module.members::field.gold.instructions.members',
],
],
],
[
'id' => 2366,
'sort_order' => 219,
'stream_id' => 307,
'field_id' => 2367,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2367',
'namespace' => 'members',
'slug' => 'parent_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2367,
'field_id' => 2367,
'locale' => 'en',
'name' => 'fannan.module.members::field.parent_id.name',
'placeholder' => 'fannan.module.members::field.parent_id.placeholder',
'warning' => 'fannan.module.members::field.parent_id.warning',
'instructions' => 'fannan.module.members::field.parent_id.instructions',
],
],
],
'translations' => [
[
'id' => 2365,
'assignment_id' => 2366,
'locale' => 'en',
'label' => 'fannan.module.members::field.parent_id.label.members',
'warning' => 'fannan.module.members::field.parent_id.warning.members',
'placeholder' => 'fannan.module.members::field.parent_id.placeholder.members',
'instructions' => 'fannan.module.members::field.parent_id.instructions.members',
],
],
],
[
'id' => 2367,
'sort_order' => 220,
'stream_id' => 307,
'field_id' => 2368,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2368',
'namespace' => 'members',
'slug' => 'grand_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2368,
'field_id' => 2368,
'locale' => 'en',
'name' => 'fannan.module.members::field.grand_id.name',
'placeholder' => 'fannan.module.members::field.grand_id.placeholder',
'warning' => 'fannan.module.members::field.grand_id.warning',
'instructions' => 'fannan.module.members::field.grand_id.instructions',
],
],
],
'translations' => [
[
'id' => 2366,
'assignment_id' => 2367,
'locale' => 'en',
'label' => 'fannan.module.members::field.grand_id.label.members',
'warning' => 'fannan.module.members::field.grand_id.warning.members',
'placeholder' => 'fannan.module.members::field.grand_id.placeholder.members',
'instructions' => 'fannan.module.members::field.grand_id.instructions.members',
],
],
],
[
'id' => 2368,
'sort_order' => 221,
'stream_id' => 307,
'field_id' => 2369,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2369',
'namespace' => 'members',
'slug' => 'great_grand_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2369,
'field_id' => 2369,
'locale' => 'en',
'name' => 'fannan.module.members::field.great_grand_id.name',
'placeholder' => 'fannan.module.members::field.great_grand_id.placeholder',
'warning' => 'fannan.module.members::field.great_grand_id.warning',
'instructions' => 'fannan.module.members::field.great_grand_id.instructions',
],
],
],
'translations' => [
[
'id' => 2367,
'assignment_id' => 2368,
'locale' => 'en',
'label' => 'fannan.module.members::field.great_grand_id.label.members',
'warning' => 'fannan.module.members::field.great_grand_id.warning.members',
'placeholder' => 'fannan.module.members::field.great_grand_id.placeholder.members',
'instructions' => 'fannan.module.members::field.great_grand_id.instructions.members',
],
],
],
[
'id' => 2369,
'sort_order' => 222,
'stream_id' => 307,
'field_id' => 2370,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2370',
'namespace' => 'members',
'slug' => 'qrcode',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2370,
'field_id' => 2370,
'locale' => 'en',
'name' => 'fannan.module.members::field.qrcode.name',
'placeholder' => 'fannan.module.members::field.qrcode.placeholder',
'warning' => 'fannan.module.members::field.qrcode.warning',
'instructions' => 'fannan.module.members::field.qrcode.instructions',
],
],
],
'translations' => [
[
'id' => 2368,
'assignment_id' => 2369,
'locale' => 'en',
'label' => 'fannan.module.members::field.qrcode.label.members',
'warning' => 'fannan.module.members::field.qrcode.warning.members',
'placeholder' => 'fannan.module.members::field.qrcode.placeholder.members',
'instructions' => 'fannan.module.members::field.qrcode.instructions.members',
],
],
],
],
'translations' => [
[
'id' => 307,
'stream_id' => 307,
'locale' => 'en',
'name' => 'fannan.module.members::stream.members.name',
'description' => 'fannan.module.members::stream.members.description',
],
],
];

    
public function avatar()
{

return $this->getFieldType('avatar')->getRelation();
}

public function cardPositivePic()
{

return $this->getFieldType('card_positive_pic')->getRelation();
}

public function cardNegativePic()
{

return $this->getFieldType('card_negative_pic')->getRelation();
}

public function cardPic()
{

return $this->getFieldType('card_pic')->getRelation();
}

public function parentId()
{

return $this->getFieldType('parent_id')->getRelation();
}

public function grandId()
{

return $this->getFieldType('grand_id')->getRelation();
}

public function greatGrandId()
{

return $this->getFieldType('great_grand_id')->getRelation();
}

}
