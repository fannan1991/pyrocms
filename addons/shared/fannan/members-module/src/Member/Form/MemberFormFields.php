<?php
namespace Fannan\MembersModule\Member\Form;


/**
 * Class PostFormFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PostsModule\Post\Form
 */
class MemberFormFields
{
    public function handle( MemberFormBuilder $builder)
    {
        $builder->setFields(
            [
                'mobile'     => [
                    'enabled' => '*'
                ],
                'password'     => [
                    'readonly' => '*'
                ],
                'openid'     => [
                    'readonly' => '*'
                ],
                'invitation_code'     => [
                    'enabled' => '*'
                ],
                'nickname'     => [
                    'readonly' => '*'
                ],
                'grade'     => [
                    'disabled' => '*'
                ],
                'integral'     => [
                    'readonly' => '*'
                ],
                'gold'     => [
                    'readonly' => '*'
                ],
                'qrcode'     => [
                    'readonly' => '*'
                ],
                'parent_id'     => [
                    'disabled' => '*'
                ],
                'grand_id'     => [
                    'disabled' => '*'
                ],
                'great_grand_id'     => [
                    'disabled' => '*'
                ],
                '*',

            ]
        );
    }
}
