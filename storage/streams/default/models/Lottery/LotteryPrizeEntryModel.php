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
'prize_description' => '',
];

    protected $fields = [
'prize_grade',
'prize_name',
'prize_probability',
'prize_num',
'prize_lottery_id',
'prize_description',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['prize_lottery_id'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Lottery\LotteryPrizeEntryTranslationsModel';

    protected $stream = [
'id' => '298',
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
'id' => 2295,
'sort_order' => 238,
'stream_id' => 298,
'field_id' => 2296,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2296',
'namespace' => 'lottery',
'slug' => 'prize_grade',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2296,
'field_id' => 2296,
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
'id' => 2294,
'assignment_id' => 2295,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_grade.label.prize',
'warning' => 'fannan.module.lottery::field.prize_grade.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_grade.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_grade.instructions.prize',
],
],
],
[
'id' => 2296,
'sort_order' => 239,
'stream_id' => 298,
'field_id' => 2297,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2297',
'namespace' => 'lottery',
'slug' => 'prize_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 2297,
'field_id' => 2297,
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
'id' => 2295,
'assignment_id' => 2296,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_name.label.prize',
'warning' => 'fannan.module.lottery::field.prize_name.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_name.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_name.instructions.prize',
],
],
],
[
'id' => 2297,
'sort_order' => 240,
'stream_id' => 298,
'field_id' => 2298,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2298',
'namespace' => 'lottery',
'slug' => 'prize_probability',
'type' => 'anomaly.field_type.decimal',
'config' => 'a:6:{s:13:"default_value";N;s:9:"separator";s:1:",";s:5:"point";s:1:".";s:8:"decimals";i:2;s:3:"min";d:0.01;s:3:"max";i:100;}',
'locked' => '1',
'translations' => [
[
'id' => 2298,
'field_id' => 2298,
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
'id' => 2296,
'assignment_id' => 2297,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_probability.label.prize',
'warning' => 'fannan.module.lottery::field.prize_probability.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_probability.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_probability.instructions.prize',
],
],
],
[
'id' => 2298,
'sort_order' => 241,
'stream_id' => 298,
'field_id' => 2299,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '2299',
'namespace' => 'lottery',
'slug' => 'prize_num',
'type' => 'anomaly.field_type.integer',
'config' => 'a:4:{s:9:"separator";s:1:",";s:3:"min";i:1;s:4:"step";i:1;s:13:"default_value";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 2299,
'field_id' => 2299,
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
'id' => 2297,
'assignment_id' => 2298,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_num.label.prize',
'warning' => 'fannan.module.lottery::field.prize_num.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_num.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_num.instructions.prize',
],
],
],
[
'id' => 2299,
'sort_order' => 242,
'stream_id' => 298,
'field_id' => 2300,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2300',
'namespace' => 'lottery',
'slug' => 'prize_lottery_id',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:41:"Fannan\LotteryModule\Lottery\LotteryModel";}',
'locked' => '1',
'translations' => [
[
'id' => 2300,
'field_id' => 2300,
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
'id' => 2298,
'assignment_id' => 2299,
'locale' => 'en',
'label' => 'fannan.module.lottery::field.prize_lottery_id.label.prize',
'warning' => 'fannan.module.lottery::field.prize_lottery_id.warning.prize',
'placeholder' => 'fannan.module.lottery::field.prize_lottery_id.placeholder.prize',
'instructions' => 'fannan.module.lottery::field.prize_lottery_id.instructions.prize',
],
],
],
[
'id' => 2300,
'sort_order' => 243,
'stream_id' => 298,
'field_id' => 2301,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '2301',
'namespace' => 'lottery',
'slug' => 'prize_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:3:{s:4:"rows";i:5;s:3:"min";i:0;s:3:"max";i:500;}',
'locked' => '1',
'translations' => [
[
'id' => 2301,
'field_id' => 2301,
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
'id' => 2299,
'assignment_id' => 2300,
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
'id' => 298,
'stream_id' => 298,
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
