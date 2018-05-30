<?php
    include('vendor/autoload.php');
    include('db_connect.php');//Подключаем библиотеку
    include('users.php');
    use Telegram\Bot\Api; 

    $telegram = new Api('618593900:AAHp7BuTm-MHHRaP63H8IrqD7s7eadWbFtY'); //Устанавливаем токен, полученный у BotFather
    $result = $telegram -> getWebhookUpdates(); //Передаем в переменную $result полную информацию о сообщении пользователя
	$bot = new \TelegramBot\Api\Client($token);
    /*
    $text = $result["message"]["text"]; //Текст сообщения
    $chat_id = $result["message"]["chat"]["id"]; //Уникальный идентификатор пользователя
    $name = $result["message"]["from"]["username"]; //Юзернейм пользователя
    $keyboard = [["Фамилия имя отчество?"],["Кем являетесь?"],["Где именно?"],["Кличка?"],["Воуу блааааа"]]; //Клавиатура

    if($text){
         if ($text == "/start") {
            $reply = "Погнали";
            $reply_markup = $telegram->replyKeyboardMarkup([ 'keyboard' => $keyboard, 'resize_keyboard' => true, 'one_time_keyboard' => false ]);
            $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply, 'reply_markup' => $reply_markup ]);
        }elseif ($text == "Фамилия имя отчество?") 
		{
            $reply = "Зубенко Михаил Петрович";
            $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
        }
		elseif ($text == "Кем являетесь?") 
		{
            $reply = "Вор в законе";
            $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
        }
		elseif ($text == "Где именно?") 
		{
            $reply = "Шумиловский городок";
            $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
		}
		elseif ($text == "Кличка?") 
		{
            $reply = "Мафиозник";
            $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply ]);
		}
		elseif ($text == "Воуу блааааа") 
		{
            $reply = "https://www.youtube.com/watch?v=0V79ANwcmQw";
            $telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => $reply  ]);
		}
    }else{
    	$telegram->sendMessage([ 'chat_id' => $chat_id, 'text' => "По русски говори э." ]);
    }*/
    $bot->on(function($Update) use ($bot){
    $message = $Update->getMessage();
    $mtext = $message->getText();
    $cid = $message->getChat()->getId();
    make_user($message->getFrom()->getUsername(),$cid);

    }, function($message) use ($name){
    return true; // когда тут true - команда проходит
    });
?>