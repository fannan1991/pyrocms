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
'id' => '304',
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
'id' => 2333,
'sort_order' => 245,
'stream_id' => 304,
'field_id' => 2334,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2334',
'namespace' => 'lottery',
'slug' => 'winning_lottery_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:41:"Fannan\LotteryModule\Lottery\LotteryModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2334,
'field_id' => 2334,
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
'id' => 2332,
'assignment_id' => 2333,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_lottery_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_lottery_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_lottery_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_lottery_id.instructions.winning',
],
],
],
[
'id' => 2334,
'sort_order' => 246,
'stream_id' => 304,
'field_id' => 2335,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2335',
'namespace' => 'lottery',
'slug' => 'winning_prize_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:37:"Fannan\LotteryModule\Prize\PrizeModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2335,
'field_id' => 2335,
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
'id' => 2333,
'assignment_id' => 2334,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_id.instructions.winning',
],
],
],
[
'id' => 2335,
'sort_order' => 247,
'stream_id' => 304,
'field_id' => 2336,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2336',
'namespace' => 'lottery',
'slug' => 'winning_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2336,
'field_id' => 2336,
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
'id' => 2334,
'assignment_id' => 2335,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_member_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_member_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_member_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_member_id.instructions.winning',
],
],
],
[
'id' => 2336,
'sort_order' => 248,
'stream_id' => 304,
'field_id' => 2337,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2337',
'namespace' => 'lottery',
'slug' => 'winning_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2337,
'field_id' => 2337,
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
'id' => 2335,
'assignment_id' => 2336,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_mobile.label.winning',
'warning' => 'fannan.module.lottery::field.winning_mobile.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_mobile.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_mobile.instructions.winning',
],
],
],
[
'id' => 2337,
'sort_order' => 249,
'stream_id' => 304,
'field_id' => 2338,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2338',
'namespace' => 'lottery',
'slug' => 'winning_member_real_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2338,
'field_id' => 2338,
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
'id' => 2336,
'assignment_id' => 2337,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_member_real_name.label.winning',
'warning' => 'fannan.module.lottery::field.winning_member_real_name.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_member_real_name.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_member_real_name.instructions.winning',
],
],
],
[
'id' => 2338,
'sort_order' => 250,
'stream_id' => 304,
'field_id' => 2339,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2339',
'namespace' => 'lottery',
'slug' => 'winning_prize_grade',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2339,
'field_id' => 2339,
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
'id' => 2337,
'assignment_id' => 2338,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_grade.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_grade.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_grade.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_grade.instructions.winning',
],
],
],
[
'id' => 2339,
'sort_order' => 251,
'stream_id' => 304,
'field_id' => 2340,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2340',
'namespace' => 'lottery',
'slug' => 'winning_prize_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2340,
'field_id' => 2340,
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
'id' => 2338,
'assignment_id' => 2339,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_name.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_name.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_name.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_name.instructions.winning',
],
],
],
[
'id' => 2340,
'sort_order' => 252,
'stream_id' => 304,
'field_id' => 2341,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2341',
'namespace' => 'lottery',
'slug' => 'winning_status',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2341,
'field_id' => 2341,
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
'id' => 2339,
'assignment_id' => 2340,
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
'id' => 304,
'stream_id' => 304,
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
