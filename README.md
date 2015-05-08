# Streak
Streak CRM Laravel API

```
"require": {
	"xvize/streak": "dev-master"
}
```

Next, update `config/streak.php` with your Streak API key. You are better off using Laravel env file to store you key.
```php
	'api_key' => env('STREAK_KEY')
```

Now you are ready to register the service provider and facade if you wish `config/app.php`.
```php
	'providers' => [
		......
		'Xvize\Streak\StreakServiceProvider'
	],

	'aliases' => [
		......
		'Streak'  => 'Xvize\Streak\StreakFacade'
	]
```