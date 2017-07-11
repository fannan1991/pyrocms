<?php namespace Fannan\MembersModule\Member;

use Fannan\MembersModule\Member\Contract\MemberRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class MemberRepository extends EntryRepository implements MemberRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var MemberModel
     */
    protected $model;

    /**
     * Create a new MemberRepository instance.
     *
     * @param MemberModel $model
     */
    public function __construct(MemberModel $model)
    {
        $this->model = $model;
    }
}
