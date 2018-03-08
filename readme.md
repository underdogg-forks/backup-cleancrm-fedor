
![alt text](https://raw.githubusercontent.com/ferdousulhaque/laratrust-adminpanel/master/public/img/view.png)

## Laravel Laratrust AdminPanel Basic
<ul>
<li>After cloning this repository, go to the root folder, run the following command/s,
<pre>
    - composer install
    - npm install
    - cp .env.example .env</pre>
</li>

<li>Update the database name, username & password. You can check the config/laratrust_seeder.php to create your own roles and permission level with users. This is only for seeding purpose and quick view.
<pre>
    - php artisan config:clear
    - php artisan config:cache
    - php artisan migrate
    - php artisan db:seed
    - php artisan key:generate</pre> </li>

</ul>

## Last Work
Now you are ready to check out

<pre>
    - php artisan serve
</pre>