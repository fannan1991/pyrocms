<?php namespace Fannan\TransactionModule\Transaction;

use Fannan\TransactionModule\Transaction\Contract\TransactionInterface;
use Anomaly\Streams\Platform\Model\Transaction\TransactionTransactionEntryModel;

class TransactionModel extends TransactionTransactionEntryModel implements TransactionInterface
{

}
