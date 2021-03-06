<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');

require_once('./message.php');
require_once('./message_2.php');

$channelAccessToken = getenv('LINE_CHANNEL_ACCESSTOKEN');
$channelSecret = getenv('LINE_CHANNEL_SECRET');

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                	$m_message = $message['text'];
                	if($m_message!="")
                	{
                		$client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => GREETING_MESSAGE
                    	));
                	}
                    break;   
            }
            break;
        case 'postback': 
            $postback = $event['postback'];
            $data = $postback['data'];
            $displayText = $postback['displayText'];
            if ($data = 'paypal' or $displayText = 'paypal' ) {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => PAYPAL
                ));
            } elseif ($data = 'webmoney' or $displayText = 'webmoney' ) {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => WEB_MONEY
                ));
            } elseif ($data = 'perfectmoney' or $displayText = 'perfectmoney' ) {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => PERFECT_MONEY
                ));
            } elseif ($data = 'neteller' or $displayText = 'neteller' ) {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => NETELLER
                ));
            } elseif ($data = 'skrill' or $displayText = 'skrill' ) {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => SKRILL
                ));
            } 
            break;
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};
