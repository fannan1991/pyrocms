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
];

    protected $fields = [
'ad_title',
'ad_slot',
'ad_image',
'ad_url',
'ad_description',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['ad_slot', 'ad_image'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Advertising\AdvertisingAdvertisingEntryTranslationsModel';

    protected $stream = [
'id' => '246',
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
'id' => 1970,
'sort_order' => 238,
'stream_id' => 246,
'field_id' => 1964,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1964',
'namespace' => 'advertising',
'slug' => 'ad_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1964,
'field_id' => 1964,
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
'id' => 1969,
'assignment_id' => 1970,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_title.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_title.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_title.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_title.instructions.advertising',
],
],
],
[
'id' => 1971,
'sort_order' => 239,
'stream_id' => 246,
'field_id' => 1965,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1965',
'namespace' => 'advertising',
'slug' => 'ad_slot',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Fannan\AdvertisingModule\Slot\SlotModel";}',
'locked' => '1',
'translations' => [
[
'id' => 1965,
'field_id' => 1965,
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
'id' => 1970,
'assignment_id' => 1971,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_slot.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_slot.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_slot.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_slot.instructions.advertising',
],
],
],
[
'id' => 1972,
'sort_order' => 240,
'stream_id' => 246,
'field_id' => 1966,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1966',
'namespace' => 'advertising',
'slug' => 'ad_image',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1966,
'field_id' => 1966,
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
'id' => 1971,
'assignment_id' => 1972,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_image.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_image.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_image.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_image.instructions.advertising',
],
],
],
[
'id' => 1973,
'sort_order' => 241,
'stream_id' => 246,
'field_id' => 1967,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1967',
'namespace' => 'advertising',
'slug' => 'ad_url',
'type' => 'anomaly.field_type.url',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1967,
'field_id' => 1967,
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
'id' => 1972,
'assignment_id' => 1973,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_url.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_url.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_url.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_url.instructions.advertising',
],
],
],
[
'id' => 1974,
'sort_order' => 242,
'stream_id' => 246,
'field_id' => 1968,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1968',
'namespace' => 'advertising',
'slug' => 'ad_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:3:{s:4:"rows";i:5;s:3:"min";i:0;s:3:"max";i:250;}',
'locked' => '1',
'translations' => [
[
'id' => 1968,
'field_id' => 1968,
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
'id' => 1973,
'assignment_id' => 1974,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.ad_description.label.advertising',
'warning' => 'fannan.module.advertising::field.ad_description.warning.advertising',
'placeholder' => 'fannan.module.advertising::field.ad_description.placeholder.advertising',
'instructions' => 'fannan.module.advertising::field.ad_description.instructions.advertising',
],
],
],
],
'translations' => [
[
'id' => 246,
'stream_id' => 246,
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
