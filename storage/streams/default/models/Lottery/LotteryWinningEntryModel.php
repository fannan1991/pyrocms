<?php namespace Anomaly\Streams\Platform\Model\Lottery;

use Anomaly\Streams\Platform\Entry\EntryModel;

class LotteryWinningEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'lottery_winning';

    protected $titleName = 'id';

    protected $rules = [
'winning_lottery_id' => '',
'winning_prize_id' => '',
'winning_member_id' => '',
'winning_mobile' => '',
'winning_member_real_name' => '',
'winning_prize_grade' => '',
'winning_prize_name' => '',
'winning_status' => '',
];

    protected $fields = [
'winning_lottery_id',
'winning_prize_id',
'winning_member_id',
'winning_mobile',
'winning_member_real_name',
'winning_prize_grade',
'winning_prize_name',
'winning_status',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['winning_lottery_id', 'winning_prize_id', 'winning_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Lottery\LotteryWinningEntryTranslationsModel';

    protected $stream = [
'id' => '299',
'namespace' => 'lottery',
'slug' => 'winning',
'prefix' => 'lottery_',
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
'id' => 2301,
'sort_order' => 244,
'stream_id' => 299,
'field_id' => 2302,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2302',
'namespace' => 'lottery',
'slug' => 'winning_lottery_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:41:"Fannan\LotteryModule\Lottery\LotteryModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2302,
'field_id' => 2302,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.winning_lottery_id.name',
'placeholder' => 'fannan.module.lottery::field.winning_lottery_id.placeholder',
'warning' => 'fannan.module.lottery::field.winning_lottery_id.warning',
'instructions' => 'fannan.module.lottery::field.winning_lottery_id.instructions',
],
],
],
'translations' => [
[
'id' => 2300,
'assignment_id' => 2301,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_lottery_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_lottery_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_lottery_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_lottery_id.instructions.winning',
],
],
],
[
'id' => 2302,
'sort_order' => 245,
'stream_id' => 299,
'field_id' => 2303,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2303',
'namespace' => 'lottery',
'slug' => 'winning_prize_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:37:"Fannan\LotteryModule\Prize\PrizeModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2303,
'field_id' => 2303,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.winning_prize_id.name',
'placeholder' => 'fannan.module.lottery::field.winning_prize_id.placeholder',
'warning' => 'fannan.module.lottery::field.winning_prize_id.warning',
'instructions' => 'fannan.module.lottery::field.winning_prize_id.instructions',
],
],
],
'translations' => [
[
'id' => 2301,
'assignment_id' => 2302,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_id.instructions.winning',
],
],
],
[
'id' => 2303,
'sort_order' => 246,
'stream_id' => 299,
'field_id' => 2304,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2304',
'namespace' => 'lottery',
'slug' => 'winning_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2304,
'field_id' => 2304,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.winning_member_id.name',
'placeholder' => 'fannan.module.lottery::field.winning_member_id.placeholder',
'warning' => 'fannan.module.lottery::field.winning_member_id.warning',
'instructions' => 'fannan.module.lottery::field.winning_member_id.instructions',
],
],
],
'translations' => [
[
'id' => 2302,
'assignment_id' => 2303,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_member_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_member_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_member_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_member_id.instructions.winning',
],
],
],
[
'id' => 2304,
'sort_order' => 247,
'stream_id' => 299,
'field_id' => 2305,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2305',
'namespace' => 'lottery',
'slug' => 'winning_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2305,
'field_id' => 2305,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.winning_mobile.name',
'placeholder' => 'fannan.module.lottery::field.winning_mobile.placeholder',
'warning' => 'fannan.module.lottery::field.winning_mobile.warning',
'instructions' => 'fannan.module.lottery::field.winning_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2303,
'assignment_id' => 2304,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_mobile.label.winning',
'warning' => 'fannan.module.lottery::field.winning_mobile.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_mobile.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_mobile.instructions.winning',
],
],
],
[
'id' => 2305,
'sort_order' => 248,
'stream_id' => 299,
'field_id' => 2306,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2306',
'namespace' => 'lottery',
'slug' => 'winning_member_real_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2306,
'field_id' => 2306,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.winning_member_real_name.name',
'placeholder' => 'fannan.module.lottery::field.winning_member_real_name.placeholder',
'warning' => 'fannan.module.lottery::field.winning_member_real_name.warning',
'instructions' => 'fannan.module.lottery::field.winning_member_real_name.instructions',
],
],
],
'translations' => [
[
'id' => 2304,
'assignment_id' => 2305,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_member_real_name.label.winning',
'warning' => 'fannan.module.lottery::field.winning_member_real_name.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_member_real_name.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_member_real_name.instructions.winning',
],
],
],
[
'id' => 2306,
'sort_order' => 249,
'stream_id' => 299,
'field_id' => 2307,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2307',
'namespace' => 'lottery',
'slug' => 'winning_prize_grade',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2307,
'field_id' => 2307,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.winning_prize_grade.name',
'placeholder' => 'fannan.module.lottery::field.winning_prize_grade.placeholder',
'warning' => 'fannan.module.lottery::field.winning_prize_grade.warning',
'instructions' => 'fannan.module.lottery::field.winning_prize_grade.instructions',
],
],
],
'translations' => [
[
'id' => 2305,
'assignment_id' => 2306,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_grade.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_grade.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_grade.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_grade.instructions.winning',
],
],
],
[
'id' => 2307,
'sort_order' => 250,
'stream_id' => 299,
'field_id' => 2308,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2308',
'namespace' => 'lottery',
'slug' => 'winning_prize_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2308,
'field_id' => 2308,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.winning_prize_name.name',
'placeholder' => 'fannan.module.lottery::field.winning_prize_name.placeholder',
'warning' => 'fannan.module.lottery::field.winning_prize_name.warning',
'instructions' => 'fannan.module.lottery::field.winning_prize_name.instructions',
],
],
],
'translations' => [
[
'id' => 2306,
'assignment_id' => 2307,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_name.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_name.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_name.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_name.instructions.winning',
],
],
],
[
'id' => 2308,
'sort_order' => 251,
'stream_id' => 299,
'field_id' => 2309,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2309',
'namespace' => 'lottery',
'slug' => 'winning_status',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2309,
'field_id' => 2309,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.winning_status.name',
'placeholder' => 'fannan.module.lottery::field.winning_status.placeholder',
'warning' => 'fannan.module.lottery::field.winning_status.warning',
'instructions' => 'fannan.module.lottery::field.winning_status.instructions',
],
],
],
'translations' => [
[
'id' => 2307,
'assignment_id' => 2308,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_status.label.winning',
'warning' => 'fannan.module.lottery::field.winning_status.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_status.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_status.instructions.winning',
],
],
],
],
'translations' => [
[
'id' => 299,
'stream_id' => 299,
'locale' => 'en',
'name' => 'fannan.module.lottery::stream.winning.name',
'description' => 'fannan.module.lottery::stream.winning.description',
],
],
];

    
public function winningLotteryId()
{

return $this->getFieldType('winning_lottery_id')->getRelation();
}

public function winningPrizeId()
{

return $this->getFieldType('winning_prize_id')->getRelation();
}

public function winningMemberId()
{

return $this->getFieldType('winning_member_id')->getRelation();
}

}
