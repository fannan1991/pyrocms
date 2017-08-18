<?php namespace Anomaly\Streams\Platform\Model\Test;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class TestTestEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'test_test_translations';
}
