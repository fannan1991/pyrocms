<?php namespace Anomaly\Streams\Platform\Model\Configuration;

use Anomaly\Streams\Platform\Entry\EntryModel;

class ConfigurationConfigurationEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $table = 'configuration_configuration';

    protected $titleName = 'id';

    protected $rules = [
'scope' => 'required',
'key' => 'required',
'value' => '',
];

    protected $fields = [
'scope',
'key',
'value',
];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    

    

    

    protected $stream = [
'id' => '16',
'namespace' => 'configuration',
'slug' => 'configuration',
'prefix' => 'configuration_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '1',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '0',
'translatable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 97,
'sort_order' => 94,
'stream_id' => 16,
'field_id' => 87,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '87',
'namespace' => 'configuration',
'slug' => 'scope',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 87,
'field_id' => 87,
'locale' => 'en',
'name' => 'anomaly.module.configuration::field.scope.name',
'placeholder' => 'anomaly.module.configuration::field.scope.placeholder',
'warning' => 'anomaly.module.configuration::field.scope.warning',
'instructions' => 'anomaly.module.configuration::field.scope.instructions',
],
],
],
'translations' => [
[
'id' => 97,
'assignment_id' => 97,
'locale' => 'en',
'label' => 'anomaly.module.configuration::field.scope.label.configuration',
'warning' => 'anomaly.module.configuration::field.scope.warning.configuration',
'placeholder' => 'anomaly.module.configuration::field.scope.placeholder.configuration',
'instructions' => 'anomaly.module.configuration::field.scope.instructions.configuration',
],
],
],
[
'id' => 98,
'sort_order' => 95,
'stream_id' => 16,
'field_id' => 88,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'translatable' => 0,
'field' => [
'id' => '88',
'namespace' => 'configuration',
'slug' => 'key',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 88,
'field_id' => 88,
'locale' => 'en',
'name' => 'anomaly.module.configuration::field.key.name',
'placeholder' => 'anomaly.module.configuration::field.key.placeholder',
'warning' => 'anomaly.module.configuration::field.key.warning',
'instructions' => 'anomaly.module.configuration::field.key.instructions',
],
],
],
'translations' => [
[
'id' => 98,
'assignment_id' => 98,
'locale' => 'en',
'label' => 'anomaly.module.configuration::field.key.label.configuration',
'warning' => 'anomaly.module.configuration::field.key.warning.configuration',
'placeholder' => 'anomaly.module.configuration::field.key.placeholder.configuration',
'instructions' => 'anomaly.module.configuration::field.key.instructions.configuration',
],
],
],
[
'id' => 99,
'sort_order' => 96,
'stream_id' => 16,
'field_id' => 89,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'translatable' => 0,
'field' => [
'id' => '89',
'namespace' => 'configuration',
'slug' => 'value',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 89,
'field_id' => 89,
'locale' => 'en',
'name' => 'anomaly.module.configuration::field.value.name',
'placeholder' => 'anomaly.module.configuration::field.value.placeholder',
'warning' => 'anomaly.module.configuration::field.value.warning',
'instructions' => 'anomaly.module.configuration::field.value.instructions',
],
],
],
'translations' => [
[
'id' => 99,
'assignment_id' => 99,
'locale' => 'en',
'label' => 'anomaly.module.configuration::field.value.label.configuration',
'warning' => 'anomaly.module.configuration::field.value.warning.configuration',
'placeholder' => 'anomaly.module.configuration::field.value.placeholder.configuration',
'instructions' => 'anomaly.module.configuration::field.value.instructions.configuration',
],
],
],
],
'translations' => [
[
'id' => 16,
'stream_id' => 16,
'locale' => 'en',
'name' => 'anomaly.module.configuration::stream.configuration.name',
'description' => 'anomaly.module.configuration::stream.configuration.description',
],
],
];

    
}
