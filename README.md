## About Twitter Clone - HOW TO RUN IT

<!-- - [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
 -->

 I created the project using sqlite3. So, I made some Seeders in order to get your tests easier to be done.
 - Once you clone the project, rename the .env-example to .env
 - This file contains all the info needed to run the project, such as database information (you could run it on sqlite or mysql - instructions written on .env)
 - Renamed that file, you can run on you terminal the command: PHP ARTISAN STORAGE LINK to create a virtual link to the storage directory
 - Then, run PHP ARTISAN SERVE and access localhost:8000 on your browser.
 - The users I created through the Seeders are:
    
    'name' => "Eduardo Ribeiro",
    'email' => 'edu0995@gmail.com',
    'username' => 'edu0995',
    'password' => 12345678,

    'name' => "Gary L. Newman",
    'email' => 'gary@gmail.com',
    'username' => 'gary',
    'password' => 12345678,

    'name' => "Evan Boyer",
    'email' => 'evan@gmail.com',
    'username' => 'evan',
    'password' => 12345678,

    'name' => "Brennan Raymond",
    'email' => 'brennan@gmail.com',
    'username' => 'brennan',
    'password' => 12345678,

    'name' => "Wade Terrell",
    'email' => 'wade@gmail.com',
    'username' => 'wade',
    'password' => 12345678,

    'name' => "Kiri Wallace",
    'email' => 'kiri@gmail.com',
    'username' => 'kiri',
    'password' => 12345678

    You can log in with all these users or click "REGISTER" to create a new user.

- Once logged in, you will be able to check all the features developed
- The tests are implemented on tests/Feature directory


Any doubts, I will be glad to help!
