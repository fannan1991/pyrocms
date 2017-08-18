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
'is_verified' => '',
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
'is_verified',
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
'id' => '235',
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
'id' => 1897,
'sort_order' => 179,
'stream_id' => 235,
'field_id' => 1889,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1889',
'namespace' => 'members',
'slug' => 'mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1889,
'field_id' => 1889,
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
'id' => 1896,
'assignment_id' => 1897,
'locale' => 'en',
'label' => 'fannan.module.members::field.mobile.label.members',
'warning' => 'fannan.module.members::field.mobile.warning.members',
'placeholder' => 'fannan.module.members::field.mobile.placeholder.members',
'instructions' => 'fannan.module.members::field.mobile.instructions.members',
],
],
],
[
'id' => 1898,
'sort_order' => 180,
'stream_id' => 235,
'field_id' => 1890,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1890',
'namespace' => 'members',
'slug' => 'password',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1890,
'field_id' => 1890,
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
'id' => 1897,
'assignment_id' => 1898,
'locale' => 'en',
'label' => 'fannan.module.members::field.password.label.members',
'warning' => 'fannan.module.members::field.password.warning.members',
'placeholder' => 'fannan.module.members::field.password.placeholder.members',
'instructions' => 'fannan.module.members::field.password.instructions.members',
],
],
],
[
'id' => 1899,
'sort_order' => 181,
'stream_id' => 235,
'field_id' => 1891,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1891',
'namespace' => 'members',
'slug' => 'openid',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1891,
'field_id' => 1891,
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
'id' => 1898,
'assignment_id' => 1899,
'locale' => 'en',
'label' => 'fannan.module.members::field.openid.label.members',
'warning' => 'fannan.module.members::field.openid.warning.members',
'placeholder' => 'fannan.module.members::field.openid.placeholder.members',
'instructions' => 'fannan.module.members::field.openid.instructions.members',
],
],
],
[
'id' => 1900,
'sort_order' => 182,
'stream_id' => 235,
'field_id' => 1892,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1892',
'namespace' => 'members',
'slug' => 'invitation_code',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:12;}',
'locked' => '1',
'translations' => [
[
'id' => 1892,
'field_id' => 1892,
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
'id' => 1899,
'assignment_id' => 1900,
'locale' => 'en',
'label' => 'fannan.module.members::field.invitation_code.label.members',
'warning' => 'fannan.module.members::field.invitation_code.warning.members',
'placeholder' => 'fannan.module.members::field.invitation_code.placeholder.members',
'instructions' => 'fannan.module.members::field.invitation_code.instructions.members',
],
],
],
[
'id' => 1901,
'sort_order' => 183,
'stream_id' => 235,
'field_id' => 1893,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1893',
'namespace' => 'members',
'slug' => 'nickname',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:24;}',
'locked' => '1',
'translations' => [
[
'id' => 1893,
'field_id' => 1893,
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
'id' => 1900,
'assignment_id' => 1901,
'locale' => 'en',
'label' => 'fannan.module.members::field.nickname.label.members',
'warning' => 'fannan.module.members::field.nickname.warning.members',
'placeholder' => 'fannan.module.members::field.nickname.placeholder.members',
'instructions' => 'fannan.module.members::field.nickname.instructions.members',
],
],
],
[
'id' => 1902,
'sort_order' => 184,
'stream_id' => 235,
'field_id' => 1894,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1894',
'namespace' => 'members',
'slug' => 'avatar',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1894,
'field_id' => 1894,
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
'id' => 1901,
'assignment_id' => 1902,
'locale' => 'en',
'label' => 'fannan.module.members::field.avatar.label.members',
'warning' => 'fannan.module.members::field.avatar.warning.members',
'placeholder' => 'fannan.module.members::field.avatar.placeholder.members',
'instructions' => 'fannan.module.members::field.avatar.instructions.members',
],
],
],
[
'id' => 1903,
'sort_order' => 185,
'stream_id' => 235,
'field_id' => 1895,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1895',
'namespace' => 'members',
'slug' => 'grade',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:7:"options";a:6:{i:1;s:6:"游客";i:2;s:12:"普通会员";i:3;s:12:"铜牌会员";i:4;s:12:"银牌会员";i:5;s:12:"金牌会员";i:6;s:12:"钻石会员";}s:13:"default_value";s:1:"1";}',
'locked' => '1',
'translations' => [
[
'id' => 1895,
'field_id' => 1895,
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
'id' => 1902,
'assignment_id' => 1903,
'locale' => 'en',
'label' => 'fannan.module.members::field.grade.label.members',
'warning' => 'fannan.module.members::field.grade.warning.members',
'placeholder' => 'fannan.module.members::field.grade.placeholder.members',
'instructions' => 'fannan.module.members::field.grade.instructions.members',
],
],
],
[
'id' => 1904,
'sort_order' => 186,
'stream_id' => 235,
'field_id' => 1896,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1896',
'namespace' => 'members',
'slug' => 'is_verified',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1896,
'field_id' => 1896,
'locale' => 'en',
'name' => 'fannan.module.members::field.is_verified.name',
'placeholder' => 'fannan.module.members::field.is_verified.placeholder',
'warning' => 'fannan.module.members::field.is_verified.warning',
'instructions' => 'fannan.module.members::field.is_verified.instructions',
],
],
],
'translations' => [
[
'id' => 1903,
'assignment_id' => 1904,
'locale' => 'en',
'label' => 'fannan.module.members::field.is_verified.label.members',
'warning' => 'fannan.module.members::field.is_verified.warning.members',
'placeholder' => 'fannan.module.members::field.is_verified.placeholder.members',
'instructions' => 'fannan.module.members::field.is_verified.instructions.members',
],
],
],
[
'id' => 1905,
'sort_order' => 187,
'stream_id' => 235,
'field_id' => 1897,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1897',
'namespace' => 'members',
'slug' => 'real_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:12;}',
'locked' => '1',
'translations' => [
[
'id' => 1897,
'field_id' => 1897,
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
'id' => 1904,
'assignment_id' => 1905,
'locale' => 'en',
'label' => 'fannan.module.members::field.real_name.label.members',
'warning' => 'fannan.module.members::field.real_name.warning.members',
'placeholder' => 'fannan.module.members::field.real_name.placeholder.members',
'instructions' => 'fannan.module.members::field.real_name.instructions.members',
],
],
],
[
'id' => 1906,
'sort_order' => 188,
'stream_id' => 235,
'field_id' => 1898,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1898',
'namespace' => 'members',
'slug' => 'id_card',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:24;}',
'locked' => '1',
'translations' => [
[
'id' => 1898,
'field_id' => 1898,
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
'id' => 1905,
'assignment_id' => 1906,
'locale' => 'en',
'label' => 'fannan.module.members::field.id_card.label.members',
'warning' => 'fannan.module.members::field.id_card.warning.members',
'placeholder' => 'fannan.module.members::field.id_card.placeholder.members',
'instructions' => 'fannan.module.members::field.id_card.instructions.members',
],
],
],
[
'id' => 1907,
'sort_order' => 189,
'stream_id' => 235,
'field_id' => 1899,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1899',
'namespace' => 'members',
'slug' => 'card_positive_pic',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1899,
'field_id' => 1899,
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
'id' => 1906,
'assignment_id' => 1907,
'locale' => 'en',
'label' => 'fannan.module.members::field.card_positive_pic.label.members',
'warning' => 'fannan.module.members::field.card_positive_pic.warning.members',
'placeholder' => 'fannan.module.members::field.card_positive_pic.placeholder.members',
'instructions' => 'fannan.module.members::field.card_positive_pic.instructions.members',
],
],
],
[
'id' => 1908,
'sort_order' => 190,
'stream_id' => 235,
'field_id' => 1900,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1900',
'namespace' => 'members',
'slug' => 'card_negative_pic',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1900,
'field_id' => 1900,
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
'id' => 1907,
'assignment_id' => 1908,
'locale' => 'en',
'label' => 'fannan.module.members::field.card_negative_pic.label.members',
'warning' => 'fannan.module.members::field.card_negative_pic.warning.members',
'placeholder' => 'fannan.module.members::field.card_negative_pic.placeholder.members',
'instructions' => 'fannan.module.members::field.card_negative_pic.instructions.members',
],
],
],
[
'id' => 1909,
'sort_order' => 191,
'stream_id' => 235,
'field_id' => 1901,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1901',
'namespace' => 'members',
'slug' => 'card_pic',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1901,
'field_id' => 1901,
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
'id' => 1908,
'assignment_id' => 1909,
'locale' => 'en',
'label' => 'fannan.module.members::field.card_pic.label.members',
'warning' => 'fannan.module.members::field.card_pic.warning.members',
'placeholder' => 'fannan.module.members::field.card_pic.placeholder.members',
'instructions' => 'fannan.module.members::field.card_pic.instructions.members',
],
],
],
[
'id' => 1910,
'sort_order' => 192,
'stream_id' => 235,
'field_id' => 1902,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1902',
'namespace' => 'members',
'slug' => 'results',
'type' => 'anomaly.field_type.text',
'config' => 'a:3:{s:4:"type";s:4:"text";s:3:"min";i:2;s:3:"max";i:64;}',
'locked' => '1',
'translations' => [
[
'id' => 1902,
'field_id' => 1902,
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
'id' => 1909,
'assignment_id' => 1910,
'locale' => 'en',
'label' => 'fannan.module.members::field.results.label.members',
'warning' => 'fannan.module.members::field.results.warning.members',
'placeholder' => 'fannan.module.members::field.results.placeholder.members',
'instructions' => 'fannan.module.members::field.results.instructions.members',
],
],
],
[
'id' => 1911,
'sort_order' => 193,
'stream_id' => 235,
'field_id' => 1903,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1903',
'namespace' => 'members',
'slug' => 'integral',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1903,
'field_id' => 1903,
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
'id' => 1910,
'assignment_id' => 1911,
'locale' => 'en',
'label' => 'fannan.module.members::field.integral.label.members',
'warning' => 'fannan.module.members::field.integral.warning.members',
'placeholder' => 'fannan.module.members::field.integral.placeholder.members',
'instructions' => 'fannan.module.members::field.integral.instructions.members',
],
],
],
[
'id' => 1912,
'sort_order' => 194,
'stream_id' => 235,
'field_id' => 1904,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1904',
'namespace' => 'members',
'slug' => 'gold',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => 1904,
'field_id' => 1904,
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
'id' => 1911,
'assignment_id' => 1912,
'locale' => 'en',
'label' => 'fannan.module.members::field.gold.label.members',
'warning' => 'fannan.module.members::field.gold.warning.members',
'placeholder' => 'fannan.module.members::field.gold.placeholder.members',
'instructions' => 'fannan.module.members::field.gold.instructions.members',
],
],
],
[
'id' => 1913,
'sort_order' => 195,
'stream_id' => 235,
'field_id' => 1905,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1905',
'namespace' => 'members',
'slug' => 'parent_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1905,
'field_id' => 1905,
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
'id' => 1912,
'assignment_id' => 1913,
'locale' => 'en',
'label' => 'fannan.module.members::field.parent_id.label.members',
'warning' => 'fannan.module.members::field.parent_id.warning.members',
'placeholder' => 'fannan.module.members::field.parent_id.placeholder.members',
'instructions' => 'fannan.module.members::field.parent_id.instructions.members',
],
],
],
[
'id' => 1914,
'sort_order' => 196,
'stream_id' => 235,
'field_id' => 1906,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1906',
'namespace' => 'members',
'slug' => 'grand_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1906,
'field_id' => 1906,
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
'id' => 1913,
'assignment_id' => 1914,
'locale' => 'en',
'label' => 'fannan.module.members::field.grand_id.label.members',
'warning' => 'fannan.module.members::field.grand_id.warning.members',
'placeholder' => 'fannan.module.members::field.grand_id.placeholder.members',
'instructions' => 'fannan.module.members::field.grand_id.instructions.members',
],
],
],
[
'id' => 1915,
'sort_order' => 197,
'stream_id' => 235,
'field_id' => 1907,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1907',
'namespace' => 'members',
'slug' => 'great_grand_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1907,
'field_id' => 1907,
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
'id' => 1914,
'assignment_id' => 1915,
'locale' => 'en',
'label' => 'fannan.module.members::field.great_grand_id.label.members',
'warning' => 'fannan.module.members::field.great_grand_id.warning.members',
'placeholder' => 'fannan.module.members::field.great_grand_id.placeholder.members',
'instructions' => 'fannan.module.members::field.great_grand_id.instructions.members',
],
],
],
[
'id' => 1916,
'sort_order' => 198,
'stream_id' => 235,
'field_id' => 1908,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1908',
'namespace' => 'members',
'slug' => 'qrcode',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1908,
'field_id' => 1908,
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
'id' => 1915,
'assignment_id' => 1916,
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
'id' => 235,
'stream_id' => 235,
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
