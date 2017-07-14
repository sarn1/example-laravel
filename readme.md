<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Other Notes
* https://code.tutsplus.com/courses/get-started-with-laravel-5
* https://github.com/jasonlewis/build-your-first-laravel-site

### Let's Begin
Add Laravel into your project.
```
composer create-project laravel/laravel .
```

Serve your website using artisan.  Open your browser and goto http://localhost.com:8080, learn more [here](https://laravel.com/docs/4.2/artisan).
```
php artisan serve —port 8080
```

### Have An Old Version of PHP?
You may have an old version of Laravel, if you do, you probably need to update your PHP engine.  You can check your version of PHP by running
```
php -v
```
and for Laravel:
```
php artisan --version
```
To update PHP run the following lines below.  [Learn more.](https://jason.pureconcepts.net/2016/09/upgrade-php-mac-os-x)
```
curl -s http://php-osx.liip.ch/install.sh | bash -s 7.1
```
Then you have to update the bash profile so that when you run things from the terminal that need the PHP engine, it would run the updated PHP version.  You'll do this by running this command also in terminal.
```
echo ‘export PATH=/usr/local/php5/bin:$PATH’ >>~/.bash_profile
```
If you check your php version, you'll see that it still shows you have an old version of PHP.  So what you need to do is quit out of terminal and reopen it.  Then when you lookup your php version, the changes will then be reflected.

### MailTrap.io
Laravel has built in integration with [MailTrap.io](https://mailtrap.io/) for testing emails.  This is seen in the .env file.

![MailTrap](https://github.com/sarn1/example-laravel/blob/master/doc/mailtrap.JPG)

You can have Laravel generate a *Mailable* class for you so that you can extend it.  When you run the command below, it will create a *Contact* class that extends the Laravel *Mailable* class under the app > mail > contact.php in your directory.
```
php artisan make:mail Contact
```
### Side Notes
* Message bag and flash session data.
https://github.com/sarn1/example-laravel/blob/master/routes/web.php#L50
![Message Bad](https://github.com/sarn1/example-laravel/blob/master/doc/mailbag.png)
* Route names : https://github.com/sarn1/example-laravel/blob/master/routes/web.php#L16 / https://github.com/sarn1/example-laravel/blob/master/resources/views/template.blade.php#L32
* Validation : https://github.com/sarn1/example-laravel/blob/master/routes/web.php#L33
* Mailer code: https://github.com/sarn1/example-laravel/tree/master/app/Mail
* Blade @yield : https://github.com/sarn1/example-laravel/blob/master/resources/views/template.blade.php#L46


