## Laravel FCM HTTP v1 API Package

### Package installation
```
composer require meunee/laravel-fcmhttpv1
```

### Assign values to the .env variables
```env
FCM_API_KEY="<firebase apiKey>"
FCM_AUTH_DOMAIN="<firebase authDomain>"
FCM_PROJECT_ID="<firebase projectId>"
FCM_STORAGE_BUCKET="<firebase storageBucket>"
FCM_MESSAGIN_SENDER_ID="<firebase messagingSenderId>"
FCM_APP_ID="<firebase appId>"
FCM_JSON="<name of the json file>"
FCM_API_SERVER_KEY="<api server key>"
```

## Usage

### Topics

Topics are used to make groups of device tokens. They will allow you to send notification directly to the topic where users are registered in.

#### Subscribe

To subscribe tokens to a topic :

```php
use Appy\FcmHttpV1\FcmTopicHelper;

$tokens = ["first token", ... , "last token"];
FcmTopicHelper::subscribeToTopic($tokens, "myTopic");
```
#### Unsubscribe

```php
use Appy\FcmHttpV1\FcmTopicHelper;

$tokens = ["first token", ... , "last token"];
FcmTopicHelper::unsubscribeToTopic($tokens, "myTopic");
```

#### List subscriptions

```php
use Appy\FcmHttpV1\FcmTopicHelper;

$token = "your awesome device token";
FcmTopicHelper::getTopicsByToken($token);

```

## Notification

You can send notification to specific user or to topics.

### Send to unique token
```php
use Appy\FcmHttpV1\FcmNotification;

$notif = new FcmNotification();
$notif->setTitle("Title")->setBody("Message here")->setIcon("icon.png")->setToken("put device token here")->setClickAction("/news")->send();

```

### Send to topic
```php
use Appy\FcmHttpV1\FcmNotification;

$notif = new FcmNotification();
$notif->setTitle("Title")->setBody("Message here")->setIcon("icon.png")->setTopic("general_topic")->setClickAction("/news")->send();

```

