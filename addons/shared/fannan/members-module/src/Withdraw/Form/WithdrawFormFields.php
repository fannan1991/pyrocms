<?php
namespace Fannan\MembersModule\Withdraw\Form;


/**
 * Class PostFormFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PostsModule\Post\Form
 */
class WithdrawFormFields
{
    public function handle( WithdrawFormBuilder $builder)
    {
        $builder->setFields(
            [
                'withdraw_bank'     => [
                    'disabled' => '*'
                ],
                'withdraw_name'     => [
                    'disabled' => '*'
                ],
                'withdraw_card'     => [
                    'disabled' => '*'
                ],
                'withdraw_bank_card'     => [
                    'disabled' => '*'
                ],
                'withdraw_mobile'     => [
                    'disabled' => '*'
                ],
                '*',
            ]
        );
    }
}
