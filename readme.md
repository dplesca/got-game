### GoT game

The game is inspired by 

![Imgur](https://i.imgur.com/LHI5Vhf.jpg)

To deploy: 
 - git clone
 - `composer install`
 - create `.env` file with db credentials (use `.env.example` as help)
 - `php artisan migrate` (to make tables)
 - `php artisan db:seed --class=Characters` (to seed charaters table, you can add aditional ones)