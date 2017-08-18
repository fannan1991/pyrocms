<?php namespace Anomaly\Streams\Platform\Model\Advertising;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class AdvertisingSlotEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'advertising_slot_translations';
}
