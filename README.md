# Telegram Notification
It's easy implementation to start sending any messages to you via Telegram Bot.

## Setup guide
### Create bot in Telegram and get **CHAT_ID** & **ACCESS_TOKEN**
- Go to https://t.me/BotFather
- Create new bot
- Get bot **Access Token** for HTTP API.

> **Access Token** looks like: 5412345653:AAFv-vBifIioO6XDj5OJcmLghhMbdI3ERR8
> 
> Save it, we will use it in env configuration section

- Start bot chatting
> Go to Telegram. Copy the name of the bot (that you set during bot creating) to the search field and start bot chatting.
> 
> Write anything to the bot

- Get **chat id** for this bot:
> - Go to the link https://api.telegram.org/bot<ACCESS_TOKEN>/getUpdates
> 
> Example: https://api.telegram.org/bot5412345653:AAFv-vBifIioO6XDj5OJcmLghhMbdI3ERR8/getUpdates
> 
> - Get **CHAT_ID** from response
> 
> Chat id is storing in 'id' json path: `result->message->chat->id`
> 
> ```json
> {
>     "ok": true,
>     "result": [
>         {
>             "update_id": "",
>             "message": {
>                 "message_id": "",
>                 "from": {...},
>                 "chat": {
>                     "id": "chat_id_here"
>                 }
>             }
>         }
>     ]
> }

Now you know your **CHAT_ID** & **ACCESS_TOKEN**, let's start configuring `env.php`

### Set configuration

- Copy ENV file

```shell
cp env.php.sample env.php
```

- Add needed env configuration to `env.php` file
```php
'bot_api_token' => '5412345653:AAFv-vBifIioO6XDj5OJcmLghhMbdI3ERR8',//add ACCESS_TOKEN
'parse_mode'    => 'markdown',
'chat_id'       => '123420',//add CHAT_ID
```

## Usage
Test sending message to you bot
```shell
php ./Ping.php
```

🎉🎊🎉 Done! You are ready to send messages to Telegram BOT.