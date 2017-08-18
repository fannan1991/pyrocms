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
'winning_prize_grade' => '',
'winning_prize_name' => '',
'winning_status' => '',
];

    protected $fields = [
'winning_lottery_id',
'winning_prize_id',
'winning_member_id',
'winning_mobile',
'winning_prize_grade',
'winning_prize_name',
'winning_status',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['winning_lottery_id', 'winning_prize_id', 'winning_member_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Lottery\LotteryWinningEntryTranslationsModel';

    protected $stream = [
'id' => '229',
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
'id' => 1857,
'sort_order' => 214,
'stream_id' => 229,
'field_id' => 1846,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1846',
'namespace' => 'lottery',
'slug' => 'winning_lottery_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:41:"Fannan\LotteryModule\Lottery\LotteryModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1846,
'field_id' => 1846,
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
'id' => 1856,
'assignment_id' => 1857,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_lottery_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_lottery_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_lottery_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_lottery_id.instructions.winning',
],
],
],
[
'id' => 1858,
'sort_order' => 215,
'stream_id' => 229,
'field_id' => 1847,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1847',
'namespace' => 'lottery',
'slug' => 'winning_prize_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:37:"Fannan\LotteryModule\Prize\PrizeModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1847,
'field_id' => 1847,
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
'id' => 1857,
'assignment_id' => 1858,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_id.instructions.winning',
],
],
],
[
'id' => 1859,
'sort_order' => 216,
'stream_id' => 229,
'field_id' => 1848,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1848',
'namespace' => 'lottery',
'slug' => 'winning_member_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\MembersModule\Member\MemberModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1848,
'field_id' => 1848,
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
'id' => 1858,
'assignment_id' => 1859,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_member_id.label.winning',
'warning' => 'fannan.module.lottery::field.winning_member_id.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_member_id.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_member_id.instructions.winning',
],
],
],
[
'id' => 1860,
'sort_order' => 217,
'stream_id' => 229,
'field_id' => 1849,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1849',
'namespace' => 'lottery',
'slug' => 'winning_mobile',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1849,
'field_id' => 1849,
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
'id' => 1859,
'assignment_id' => 1860,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_mobile.label.winning',
'warning' => 'fannan.module.lottery::field.winning_mobile.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_mobile.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_mobile.instructions.winning',
],
],
],
[
'id' => 1861,
'sort_order' => 218,
'stream_id' => 229,
'field_id' => 1850,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1850',
'namespace' => 'lottery',
'slug' => 'winning_prize_grade',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1850,
'field_id' => 1850,
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
'id' => 1860,
'assignment_id' => 1861,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_grade.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_grade.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_grade.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_grade.instructions.winning',
],
],
],
[
'id' => 1862,
'sort_order' => 219,
'stream_id' => 229,
'field_id' => 1851,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1851',
'namespace' => 'lottery',
'slug' => 'winning_prize_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1851,
'field_id' => 1851,
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
'id' => 1861,
'assignment_id' => 1862,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.winning_prize_name.label.winning',
'warning' => 'fannan.module.lottery::field.winning_prize_name.warning.winning',
'placeholder' => 'fannan.module.lottery::field.winning_prize_name.placeholder.winning',
'instructions' => 'fannan.module.lottery::field.winning_prize_name.instructions.winning',
],
],
],
[
'id' => 1863,
'sort_order' => 220,
'stream_id' => 229,
'field_id' => 1852,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1852',
'namespace' => 'lottery',
'slug' => 'winning_status',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:6:{s:13:"default_value";b:0;s:8:"on_color";s:7:"success";s:9:"off_color";s:6:"danger";s:7:"on_text";s:3:"YES";s:8:"off_text";s:2:"NO";s:4:"mode";N;}',
'locked' => '1',
'translations' => [
[
'id' => 1852,
'field_id' => 1852,
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
'id' => 1862,
'assignment_id' => 1863,
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
'id' => 229,
'stream_id' => 229,
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
