<?php namespace Anomaly\Streams\Platform\Model\Lottery;

use Anomaly\Streams\Platform\Entry\EntryModel;

class LotteryPrizeEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'lottery_prize';

    protected $titleName = 'prize_name';

    protected $rules = [
'prize_grade' => 'required',
'prize_name' => 'required',
'prize_probability' => 'required',
'prize_num' => 'required',
'prize_lottery_id' => '',
'prize_winning_mobile' => '',
'prize_description' => '',
];

    protected $fields = [
'prize_grade',
'prize_name',
'prize_probability',
'prize_num',
'prize_lottery_id',
'prize_winning_mobile',
'prize_description',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['prize_lottery_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Lottery\LotteryPrizeEntryTranslationsModel';

    protected $stream = [
'id' => '303',
'namespace' => 'lottery',
'slug' => 'prize',
'prefix' => 'lottery_',
'title_column' => 'prize_name',
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
'id' => 2326,
'sort_order' => 238,
'stream_id' => 303,
'field_id' => 2327,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2327',
'namespace' => 'lottery',
'slug' => 'prize_grade',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2327,
'field_id' => 2327,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.prize_grade.name',
'placeholder' => 'fannan.module.lottery::field.prize_grade.placeholder',
'warning' => 'fannan.module.lottery::field.prize_grade.warning',
'instructions' => 'fannan.module.lottery::field.prize_grade.instructions',
],
],
],
'translations' => [
[
'id' => 2325,
'assignment_id' => 2326,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_grade.label.prize',
'warning' => 'fannan.module.lottery::field.prize_grade.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_grade.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_grade.instructions.prize',
],
],
],
[
'id' => 2327,
'sort_order' => 239,
'stream_id' => 303,
'field_id' => 2328,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2328',
'namespace' => 'lottery',
'slug' => 'prize_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2328,
'field_id' => 2328,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.prize_name.name',
'placeholder' => 'fannan.module.lottery::field.prize_name.placeholder',
'warning' => 'fannan.module.lottery::field.prize_name.warning',
'instructions' => 'fannan.module.lottery::field.prize_name.instructions',
],
],
],
'translations' => [
[
'id' => 2326,
'assignment_id' => 2327,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_name.label.prize',
'warning' => 'fannan.module.lottery::field.prize_name.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_name.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_name.instructions.prize',
],
],
],
[
'id' => 2328,
'sort_order' => 240,
'stream_id' => 303,
'field_id' => 2329,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2329',
'namespace' => 'lottery',
'slug' => 'prize_probability',
'type' => 'anomaly.field_type.decimal',
'config' => 'a:6:{s:13:"default_value";N;s:9:"separator";s:1:",";s:5:"point";s:1:".";s:8:"decimals";i:2;s:3:"min";d:0.01;s:3:"max";i:100;}',
'locked' => '1',
'translations' => [
[
'id' => 2329,
'field_id' => 2329,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.prize_probability.name',
'placeholder' => 'fannan.module.lottery::field.prize_probability.placeholder',
'warning' => 'fannan.module.lottery::field.prize_probability.warning',
'instructions' => 'fannan.module.lottery::field.prize_probability.instructions',
],
],
],
'translations' => [
[
'id' => 2327,
'assignment_id' => 2328,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_probability.label.prize',
'warning' => 'fannan.module.lottery::field.prize_probability.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_probability.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_probability.instructions.prize',
],
],
],
[
'id' => 2329,
'sort_order' => 241,
'stream_id' => 303,
'field_id' => 2330,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2330',
'namespace' => 'lottery',
'slug' => 'prize_num',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:1;s:4:"step";i:1;s:13:"default_value";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 2330,
'field_id' => 2330,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.prize_num.name',
'placeholder' => 'fannan.module.lottery::field.prize_num.placeholder',
'warning' => 'fannan.module.lottery::field.prize_num.warning',
'instructions' => 'fannan.module.lottery::field.prize_num.instructions',
],
],
],
'translations' => [
[
'id' => 2328,
'assignment_id' => 2329,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_num.label.prize',
'warning' => 'fannan.module.lottery::field.prize_num.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_num.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_num.instructions.prize',
],
],
],
[
'id' => 2330,
'sort_order' => 242,
'stream_id' => 303,
'field_id' => 2331,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2331',
'namespace' => 'lottery',
'slug' => 'prize_lottery_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:41:"Fannan\LotteryModule\Lottery\LotteryModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2331,
'field_id' => 2331,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.prize_lottery_id.name',
'placeholder' => 'fannan.module.lottery::field.prize_lottery_id.placeholder',
'warning' => 'fannan.module.lottery::field.prize_lottery_id.warning',
'instructions' => 'fannan.module.lottery::field.prize_lottery_id.instructions',
],
],
],
'translations' => [
[
'id' => 2329,
'assignment_id' => 2330,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_lottery_id.label.prize',
'warning' => 'fannan.module.lottery::field.prize_lottery_id.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_lottery_id.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_lottery_id.instructions.prize',
],
],
],
[
'id' => 2331,
'sort_order' => 243,
'stream_id' => 303,
'field_id' => 2332,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2332',
'namespace' => 'lottery',
'slug' => 'prize_winning_mobile',
'type' => 'anomaly.field_type.tags',
'config' => 'a:6:{s:3:"min";N;s:3:"max";N;s:7:"options";a:0:{}s:10:"free_input";b:1;s:6:"filter";N;s:13:"default_value";N;}',
'locked' => '1',
'translations' => [
[
'id' => 2332,
'field_id' => 2332,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.prize_winning_mobile.name',
'placeholder' => 'fannan.module.lottery::field.prize_winning_mobile.placeholder',
'warning' => 'fannan.module.lottery::field.prize_winning_mobile.warning',
'instructions' => 'fannan.module.lottery::field.prize_winning_mobile.instructions',
],
],
],
'translations' => [
[
'id' => 2330,
'assignment_id' => 2331,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_winning_mobile.label.prize',
'warning' => 'fannan.module.lottery::field.prize_winning_mobile.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_winning_mobile.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_winning_mobile.instructions.prize',
],
],
],
[
'id' => 2332,
'sort_order' => 244,
'stream_id' => 303,
'field_id' => 2333,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2333',
'namespace' => 'lottery',
'slug' => 'prize_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:3:{s:4:"rows";i:5;s:3:"min";i:0;s:3:"max";i:500;}',
'locked' => '1',
'translations' => [
[
'id' => 2333,
'field_id' => 2333,
'locale' => 'en',
'name' => 'fannan.module.lottery::field.prize_description.name',
'placeholder' => 'fannan.module.lottery::field.prize_description.placeholder',
'warning' => 'fannan.module.lottery::field.prize_description.warning',
'instructions' => 'fannan.module.lottery::field.prize_description.instructions',
],
],
],
'translations' => [
[
'id' => 2331,
'assignment_id' => 2332,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_description.label.prize',
'warning' => 'fannan.module.lottery::field.prize_description.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_description.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_description.instructions.prize',
],
],
],
],
'translations' => [
[
'id' => 303,
'stream_id' => 303,
'locale' => 'en',
'name' => 'fannan.module.lottery::stream.prize.name',
'description' => 'fannan.module.lottery::stream.prize.description',
],
],
];

    
public function prizeLotteryId()
{

return $this->getFieldType('prize_lottery_id')->getRelation();
}

}
