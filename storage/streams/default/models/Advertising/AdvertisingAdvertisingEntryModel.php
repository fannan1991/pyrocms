<?php namespace Anomaly\Streams\Platform\Model\Advertising;

use Anomaly\Streams\Platform\Entry\EntryModel;

class AdvertisingAdvertisingEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'advertising_advertising';

    protected $titleName = 'ad_title';

    protected $rules = [
'ad_title' => 'required',
'ad_slot' => '',
'ad_image' => 'required',
'ad_url' => '',
'ad_description' => '',
'ad_sorting' => '',
];

    protected $fields = [
'ad_title',
'ad_slot',
'ad_image',
'ad_url',
'ad_description',
'ad_sorting',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['ad_slot', 'ad_image'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Advertising\AdvertisingAdvertisingEntryTranslationsModel';

    protected $stream = [
'id' => '250',
'namespace' => 'advertising',
'slug' => 'advertising',
'prefix' => 'advertising_',
'title_column' => 'ad_title',
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
'id' => 1984,
'sort_order' => 238,
'stream_id' => 250,
'field_id' => 1978,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1978',
'namespace' => 'advertising',
'slug' => 'ad_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1978,
'field_id' => 1978,
'locale' => 'en',
'name' => 'fannan.module.advertising::field.ad_title.name',
'placeholder' => 'fannan.module.advertising::field.ad_title.placeholder',
'warning' => 'fannan.module.advertising::field.ad_title.warning',
'instructions' => 'fannan.module.advertising::field.ad_title.instructions',
],
],
],
'translations' => [
[
'id' => 1983,
'assignment_id' => 1984,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_title.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_title.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_title.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_title.instructions.advertising',
],
],
],
[
'id' => 1985,
'sort_order' => 239,
'stream_id' => 250,
'field_id' => 1979,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1979',
'namespace' => 'advertising',
'slug' => 'ad_slot',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\AdvertisingModule\Slot\SlotModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1979,
'field_id' => 1979,
'locale' => 'en',
'name' => 'fannan.module.advertising::field.ad_slot.name',
'placeholder' => 'fannan.module.advertising::field.ad_slot.placeholder',
'warning' => 'fannan.module.advertising::field.ad_slot.warning',
'instructions' => 'fannan.module.advertising::field.ad_slot.instructions',
],
],
],
'translations' => [
[
'id' => 1984,
'assignment_id' => 1985,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_slot.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_slot.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_slot.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_slot.instructions.advertising',
],
],
],
[
'id' => 1986,
'sort_order' => 240,
'stream_id' => 250,
'field_id' => 1980,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1980',
'namespace' => 'advertising',
'slug' => 'ad_image',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1980,
'field_id' => 1980,
'locale' => 'en',
'name' => 'fannan.module.advertising::field.ad_image.name',
'placeholder' => 'fannan.module.advertising::field.ad_image.placeholder',
'warning' => 'fannan.module.advertising::field.ad_image.warning',
'instructions' => 'fannan.module.advertising::field.ad_image.instructions',
],
],
],
'translations' => [
[
'id' => 1985,
'assignment_id' => 1986,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_image.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_image.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_image.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_image.instructions.advertising',
],
],
],
[
'id' => 1987,
'sort_order' => 241,
'stream_id' => 250,
'field_id' => 1981,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1981',
'namespace' => 'advertising',
'slug' => 'ad_url',
'type' => 'anomaly.field_type.url',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1981,
'field_id' => 1981,
'locale' => 'en',
'name' => 'fannan.module.advertising::field.ad_url.name',
'placeholder' => 'fannan.module.advertising::field.ad_url.placeholder',
'warning' => 'fannan.module.advertising::field.ad_url.warning',
'instructions' => 'fannan.module.advertising::field.ad_url.instructions',
],
],
],
'translations' => [
[
'id' => 1986,
'assignment_id' => 1987,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_url.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_url.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_url.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_url.instructions.advertising',
],
],
],
[
'id' => 1988,
'sort_order' => 242,
'stream_id' => 250,
'field_id' => 1982,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1982',
'namespace' => 'advertising',
'slug' => 'ad_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:3:{s:4:"rows";i:5;s:3:"min";i:0;s:3:"max";i:250;}',
'locked' => '1',
'translations' => [
[
'id' => 1982,
'field_id' => 1982,
'locale' => 'en',
'name' => 'fannan.module.advertising::field.ad_description.name',
'placeholder' => 'fannan.module.advertising::field.ad_description.placeholder',
'warning' => 'fannan.module.advertising::field.ad_description.warning',
'instructions' => 'fannan.module.advertising::field.ad_description.instructions',
],
],
],
'translations' => [
[
'id' => 1987,
'assignment_id' => 1988,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_description.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_description.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_description.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_description.instructions.advertising',
],
],
],
[
'id' => 1989,
'sort_order' => 243,
'stream_id' => 250,
'field_id' => 1983,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1983',
'namespace' => 'advertising',
'slug' => 'ad_sorting',
'type' => 'anomaly.field_type.integer',
'config' => 'a:3:{s:9:"separator";s:1:",";s:3:"min";i:0;s:4:"step";i:1;}',
'locked' => '1',
'translations' => [
[
'id' => 1983,
'field_id' => 1983,
'locale' => 'en',
'name' => 'fannan.module.advertising::field.ad_sorting.name',
'placeholder' => 'fannan.module.advertising::field.ad_sorting.placeholder',
'warning' => 'fannan.module.advertising::field.ad_sorting.warning',
'instructions' => 'fannan.module.advertising::field.ad_sorting.instructions',
],
],
],
'translations' => [
[
'id' => 1988,
'assignment_id' => 1989,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_sorting.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_sorting.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_sorting.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_sorting.instructions.advertising',
],
],
],
],
'translations' => [
[
'id' => 250,
'stream_id' => 250,
'locale' => 'en',
'name' => 'fannan.module.advertising::stream.advertising.name',
'description' => 'fannan.module.advertising::stream.advertising.description',
],
],
];

    
public function adSlot()
{

return $this->getFieldType('ad_slot')->getRelation();
}

public function adImage()
{

return $this->getFieldType('ad_image')->getRelation();
}

}
