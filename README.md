## About Petition project

In this project you can find an example to implement a simple API for create a petitions. The project has 2 main classes, Petition and the Author of the petition. 

The project is subdivided in incremental branches as follows:

### 00_model_factory_sedder
Creation of base project and Petion model, controller, API resource, factory and seeder using php artisan 

### 01_databse_configuration
Creation of migrations files for Petition

### 02_factory_seeders
Definition of Petition factory using faker class, creation of 50 entries Petition in the database

### 03_routes_apiresource
Create routes using apiresource to map each PetitionController methods

### 04_exercises_solution
Solution for the individual exercises, create a Author files

### 05_API_resource_todisplay_all_petitions
Implement the index method in the petition controller for showing all petition in the database. Define the structure to response a json file for single response o a collection of petition 

### 06_API_resource_save_a_petition
Implement a store method in the petition controller for store a petition into the tadabase

### 07_API_resource_show_a_petition
Implement a show method in the petition controller for showing a single petition

### 08_API_resource_update_a_petition
Implement a update method in the petition controller for updatating an existing petition

### 09_API_resource_delete_a_petition
Implement a delete method in the petition controller for deleting an existing petition

### 10_exercises_solution
Solution for the individual exercises, implement all method for the author class, like what we done for the petition class

### 11_create_join_from_author_table
Create a migration file to add foreign key from the patition table to the author id. Update the factory class to create joined data. Add relationship in the model class.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# ePetition

