<?php namespace Anomaly\Streams\Platform\Model\Envelopes;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class EnvelopesLogEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'envelopes_log_translations';
}
