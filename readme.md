## Laravel Laratrust AdminPanel Basic
<ul>
<li>After cloning this repository, go to the root folder, run the following command/s,
<pre>
    composer install
    npm install</pre>
</li>
<li>cp .env.example .env</li>
Update the database name, username & password. You can check the config/laratrust_seeder.php to create your own roles and permission level with users. This is only for seeding purpose and quick view.
<pre><li>php artisan config:clear</li>
<li>php artisan config:cache</li>
<li>php artisan migrate</li></pre>
<li>php artisan db:seed</li></pre>
<li>Run <pre>php artisan key:generate</pre> </li>

</ul>

## Last Work
Now you are ready to check out

<pre>php artisan serve</pre>