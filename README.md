Disktotalspace
==========
Monitor disk space

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ulugbek/disktotalspace "*"
```

or add

```
"ulugbek/disktotalspace": "*"
```

to the require section of your `composer.json` file.


Usage
-----

throw this into the modules

```php
 'disk-total-space-manager' => [
            'class' => 'ulugbek\disktotalspace\Module',
        ],
```

for migration

```php
php yii migrate/up --migrationPath=@vendor/ulugbek/disktotalspace/migrations
```
