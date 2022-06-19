## The Worx App

[![Open in Visual Studio Code](https://open.vscode.dev/badges/open-in-vscode.svg)](https://open.vscode.dev/cynosure-networx/theworx)

## Documentation

Documentation will be managed at the wiki for now then make more extensive documentation built into a directory.

Default test user:
Username: misteruser
Password: password
First Name: John
Last Name: Doe
Email: user@theworx.dev


## Instructions

github template -> to new project
$ npm install
$ composer update


VALET VERSION
$ cp .env.example .env
edit .env
- App Name
- App URL
- DB Database

$ php artisan key:generate
$ php artisan migrate --seed
$ valet link <project name>
$ valet secure <project name>

Modify config>theworx.php

Laravel 9 boilerplate PHP version is ^8.0

## Features
- Blog [ Blog Tutorial](https://www.flowkl.com/tutorial/web-development/simple-blog-application-in-laravel-7/)
- Forms (Not in yet)
- Image Uploads (not in yet)

- Calendar
- Social Network registration & login
- Username/Password registration & login
- Flash Notifications
- [Tailwind CSS](https://tailwindcss.com/)
- Users' Roles & Permissions
- Sitemap - XML file needs to be formated
- [Livewire Datatables](https://laravel-livewire.com/screencasts/s7-intro)
- BrowserSync



## Packages
### Production
- (INSTALLED) [Jetstream Livewire](https://jetstream.laravel.com/2.x/stacks/livewire.html)
- (INSTALLED) [Laravel Livewire](https://laravel-livewire.com/)
- (INSTALLED) [Laracasts Flash](https://github.com/laracasts/flash)
- [Laravel Socialite](https://laravel.com/docs/9.x/socialite)
- [Spatie Permission](https://spatie.be/docs/laravel-permission/v5/introduction)
- (INSTALLED) [Spatie Sitemap](https://github.com/spatie/laravel-sitemap) - [Tutorial](https://onlinewebtutorblog.com/laravel-8-sitemap-generator-package-tutorial/)
- (INSTALLED) [Calendar - FullCalendar]https://laratutorials.com/laravel-9-livewire-fullcalendar-integration-example/)
- (INSTALLED) [Glide](https://glide.thephpleague.com/)
    - Installed through [Spaite Laravel Glide](https://github.com/spatie/laravel-glide)
- (INSTALLED)  [Jenssegers Date](https://github.com/jenssegers/date)
    - [Date Formats](https://www.php.net/manual/en/datetime.formats.date.php)(https://www.php.net/manual/en/datetime.format.php)
    -  [Time Formats](https://www.php.net/manual/en/datetime.formats.time.php)

### Development
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
- [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
- [Pretty Routes](https://github.com/garygreen/pretty-routes)

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Documentation

Documentation will be managed at the wiki for now then make more extensive documentation built into a directory.

Default test user:
Username: admin
Password: password
First Name: John
Last Name: Doe
Email: john.doe@theworx.dev

This information can be changed in the theworx config file.

If the user photo is not showing then run the command: php artisan storage:link

## Instructions

github template -> to new project
Can edit the default test user in the .env.codespaces file.

## To Dos

- Setup profile to switch from names to social network in the dashboard/profile.
- Fix initials for avatar without picture
- Format Calendar
- Format Blog
- Format Datatables
- Backend CRUD management

## VS Code extensions pre-installed
- DotENV
- Laravel Extra Intellisense
- laravel Goto View
- laravel5 Snippets
- Laravel Goto Controller
- Todo Tree
- Docker
- GitLens
- Live Preview
- Material Icon Theme
- PHP Debug


## PHP MyAdmin
### Super User Login
Username: pmasu
Password: 123456

### User Login
Username: pma
Password: pmapass


## To Dos

- Setup profile to switch from names to social network in the dashboard/profile.
- Fix initials for avatar without picture
- Format Calenar
- Format Blog
- Format Datatables
- Backend CRUD management
