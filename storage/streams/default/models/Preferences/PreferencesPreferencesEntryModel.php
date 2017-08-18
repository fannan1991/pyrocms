<?php namespace Anomaly\Streams\Platform\Model\Preferences;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PreferencesPreferencesEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'preferences_preferences';

    protected $titleName = 'id';

    protected $rules = [
'user' => 'required',
'key' => 'required',
'value' => '',
];

    protected $fields = [
'user',
'key',
'value',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['user'];

    

    

    

    protected $stream = [
'id' => '29',
'namespace' => 'preferences',
'slug' => 'preferences',
'prefix' => 'preferences_',
'title_column' => 'id',
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
'id' => 186,
'sort_order' => 94,
'stream_id' => 29,
'field_id' => 166,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '166',
'namespace' => 'preferences',
'slug' => 'user',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:2:{s:4:"mode";s:6:"lookup";s:7:"related";s:34:"Anomaly\UsersModule\User\UserModel";}',
'locked' => '1',
'translations' => [
[
'id' => 166,
'field_id' => 166,
'locale' => 'en',
'name' => 'anomaly.module.preferences::field.user.name',
'placeholder' => 'anomaly.module.preferences::field.user.placeholder',
'warning' => 'anomaly.module.preferences::field.user.warning',
'instructions' => 'anomaly.module.preferences::field.user.instructions',
],
],
],
'translations' => [
[
'id' => 186,
'assignment_id' => 186,
'locale' => 'en',
'label' => 'anomaly.module.preferences::field.user.label.preferences',
'warning' => 'anomaly.module.preferences::field.user.warning.preferences',
'placeholder' => 'anomaly.module.preferences::field.user.placeholder.preferences',
'instructions' => 'anomaly.module.preferences::field.user.instructions.preferences',
],
],
],
[
'id' => 187,
'sort_order' => 95,
'stream_id' => 29,
'field_id' => 167,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '167',
'namespace' => 'preferences',
'slug' => 'key',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 167,
'field_id' => 167,
'locale' => 'en',
'name' => 'anomaly.module.preferences::field.key.name',
'placeholder' => 'anomaly.module.preferences::field.key.placeholder',
'warning' => 'anomaly.module.preferences::field.key.warning',
'instructions' => 'anomaly.module.preferences::field.key.instructions',
],
],
],
'translations' => [
[
'id' => 187,
'assignment_id' => 187,
'locale' => 'en',
'label' => 'anomaly.module.preferences::field.key.label.preferences',
'warning' => 'anomaly.module.preferences::field.key.warning.preferences',
'placeholder' => 'anomaly.module.preferences::field.key.placeholder.preferences',
'instructions' => 'anomaly.module.preferences::field.key.instructions.preferences',
],
],
],
[
'id' => 188,
'sort_order' => 96,
'stream_id' => 29,
'field_id' => 168,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '168',
'namespace' => 'preferences',
'slug' => 'value',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 168,
'field_id' => 168,
'locale' => 'en',
'name' => 'anomaly.module.preferences::field.value.name',
'placeholder' => 'anomaly.module.preferences::field.value.placeholder',
'warning' => 'anomaly.module.preferences::field.value.warning',
'instructions' => 'anomaly.module.preferences::field.value.instructions',
],
],
],
'translations' => [
[
'id' => 188,
'assignment_id' => 188,
'locale' => 'en',
'label' => 'anomaly.module.preferences::field.value.label.preferences',
'warning' => 'anomaly.module.preferences::field.value.warning.preferences',
'placeholder' => 'anomaly.module.preferences::field.value.placeholder.preferences',
'instructions' => 'anomaly.module.preferences::field.value.instructions.preferences',
],
],
],
],
'translations' => [
[
'id' => 29,
'stream_id' => 29,
'locale' => 'en',
'name' => 'anomaly.module.preferences::stream.preferences.name',
'description' => 'anomaly.module.preferences::stream.preferences.description',
],
],
];

    
public function user()
{

return $this->getFieldType('user')->getRelation();
}

}
