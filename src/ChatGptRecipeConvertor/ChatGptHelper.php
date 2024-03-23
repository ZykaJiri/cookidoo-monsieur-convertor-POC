<?php

namespace App\ChatGptRecipeConvertor;

use OpenAI;

class ChatGptHelper
{
    public function getGptResponse(string $prompt): string
    {
        $yourApiKey = $_ENV['CHAT_GPT_API_KEY'];
        $client = OpenAI::client($yourApiKey);

        $result = $client->chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        return $result->choices[0]->message->content;
    }
}