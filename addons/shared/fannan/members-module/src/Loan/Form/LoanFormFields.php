<?php
namespace Fannan\MembersModule\Loan\Form;


/**
 * Class PostFormFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PostsModule\Post\Form
 */
class LoanFormFields
{
    public function handle( LoanFormBuilder $builder)
    {
        $builder->setFields(
            [
                'loan_name'     => [
                    'disabled' => '*'
                ],
                'loan_id_card'     => [
                    'disabled' => '*'
                ],
                'loan_amount'     => [
                    'disabled' => '*'
                ],
                'loan_order_sn'     => [
                    'disabled' => '*'
                ],
                'loan_member_id'     => [
                    'disabled' => '*'
                ],
                '*',
            ]
        );
    }
}
