![Image](https://i.imgur.com/j3NBvK6.png)
        
## What is this and why?

My friend [Bowu](https://github.com/BowuDev) and I frequently share web resources with each other and others online. Managing this through Discord became chaotic, so I created a website to easily store and share both paid and free resources with a user-friendly panel.

## Previews

[Figma File](https://www.figma.com/file/IryJ2sNBnwhxvrTngILbXR/Untitled?type=design&node-id=0%3A1&mode=design&t=4xVE7lhAqz3eAD97-1)

[Live Demo](https://resources.michaelt.uk/)

## Prerequisites

 - [PHP](https://www.php.net/)
 - [Composer](https://getcomposer.org/)
 - [MySQL](https://www.mysql.com/)

## Setup Guide

```bash
git clone https://github.com/michaeltukdev/BundleBay.git

cd BundleBay

composer install

rename .env.example to .env

modify the .env file

php artisan key:generate

php artisan migrate

php artisan serve

npm run build or npm run dev
```

To deploy to production you will need to modify the User modal (Can access panel).

To access the admin panel run ```php artisan make:filament-user``` and then head to /panel


## Acknowledgements

 - [Laravel](https://laravel.com/)
 - [Laravel Livewire](https://livewire.laravel.com/)
 - [Filament PHP](https://filamentphp.com/)

## License

[MIT](https://choosealicense.com/licenses/mit/)