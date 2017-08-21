<?php namespace Anomaly\Streams\Platform\Model\Advertising;

use Anomaly\Streams\Platform\Entry\EntryModel;

class AdvertisingSlotEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'advertising_slot';

    protected $titleName = 'slot_name';

    protected $rules = [
'slot_name' => 'required',
'slot_description' => '',
];

    protected $fields = [
'slot_name',
'slot_description',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Advertising\AdvertisingSlotEntryTranslationsModel';

    protected $stream = [
'id' => '251',
'namespace' => 'advertising',
'slug' => 'slot',
'prefix' => 'advertising_',
'title_column' => 'slot_name',
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
'id' => 1990,
'sort_order' => 244,
'stream_id' => 251,
'field_id' => 1984,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '1984',
'namespace' => 'advertising',
'slug' => 'slot_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 1984,
'field_id' => 1984,
'locale' => 'en',
'name' => 'fannan.module.advertising::field.slot_name.name',
'placeholder' => 'fannan.module.advertising::field.slot_name.placeholder',
'warning' => 'fannan.module.advertising::field.slot_name.warning',
'instructions' => 'fannan.module.advertising::field.slot_name.instructions',
],
],
],
'translations' => [
[
'id' => 1989,
'assignment_id' => 1990,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.slot_name.label.slot',
'warning' => 'fannan.module.advertising::field.slot_name.warning.slot',
'placeholder' => 'fannan.module.advertising::field.slot_name.placeholder.slot',
'instructions' => 'fannan.module.advertising::field.slot_name.instructions.slot',
],
],
],
[
'id' => 1991,
'sort_order' => 245,
'stream_id' => 251,
'field_id' => 1985,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '1985',
'namespace' => 'advertising',
'slug' => 'slot_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:3:{s:4:"rows";i:5;s:3:"min";i:0;s:3:"max";i:250;}',
'locked' => '1',
'translations' => [
[
'id' => 1985,
'field_id' => 1985,
'locale' => 'en',
'name' => 'fannan.module.advertising::field.slot_description.name',
'placeholder' => 'fannan.module.advertising::field.slot_description.placeholder',
'warning' => 'fannan.module.advertising::field.slot_description.warning',
'instructions' => 'fannan.module.advertising::field.slot_description.instructions',
],
],
],
'translations' => [
[
'id' => 1990,
'assignment_id' => 1991,
'locale' => 'en',
'label' => 'fannan.module.advertising::field.slot_description.label.slot',
'warning' => 'fannan.module.advertising::field.slot_description.warning.slot',
'placeholder' => 'fannan.module.advertising::field.slot_description.placeholder.slot',
'instructions' => 'fannan.module.advertising::field.slot_description.instructions.slot',
],
],
],
],
'translations' => [
[
'id' => 251,
'stream_id' => 251,
'locale' => 'en',
'name' => 'fannan.module.advertising::stream.slot.name',
'description' => 'fannan.module.advertising::stream.slot.description',
],
],
];

    
}
