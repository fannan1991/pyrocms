<?php
namespace App\Api\Transformers;

use Fannan\MembersModule\Message\MessageModel;
use League\Fractal\TransformerAbstract;

class MessageTransformer extends TransformerAbstract
{
    public function transform(MessageModel $messageModel)
    {
        return [
            'id' => $messageModel['id'],
            'message_title' => $messageModel['message_title'],
            'message_content' => $messageModel['message_content'],
            'message_mobile' => $messageModel['message_mobile'],
            'created_at' => $messageModel['created_at'],
        ];
    }
}