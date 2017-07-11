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
                    'disabled' => '*'
                ],
                'openid'     => [
                    'disabled' => '*'
                ],
                'invitation_code'     => [
                    'disabled' => '*'
                ],
                '*',

            ]
        );
    }
}
