<?php namespace Anomaly\Streams\Platform\Model\Transaction;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class TransactionTransactionEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'transaction_transaction_translations';
}
