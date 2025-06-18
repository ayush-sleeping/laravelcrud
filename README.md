> This project is a simple Laravel CRUD app I built to refresh and recall my Laravel skills after a break, leveraging the experience I gained during my first year with the framework.

# Laravel Simple CRUD Project

This project demonstrates how to build a simple CRUD (Create, Read, Update, Delete) application in Laravel from scratch. Below are the detailed steps I followed, so I can quickly recall the process in the future:

1. **Create a New Laravel Project**
   Ran `laravel new laravelcrud` to scaffold a fresh Laravel application.

2. **Install Frontend Dependencies**
   Ran `npm install` to install all necessary Node.js packages for frontend assets.

3. **Compile Assets**
   Ran `npm run dev` (should be `npm run dev` instead of `composer run dev`) to compile CSS and JS assets using Vite.

4. **Generate Model, Migration, and Controller**
   Used `php artisan make:model Article -mc` to generate the `Article` model, its migration, and a resource controller.

5. **Complete the Migration File**
   Edited the migration file to define the `articles` table structure (fields like `title`, `slug`, `content`, `image`, etc.).

6. **Set Up the Model**
   Updated the `Article` model to include `$fillable` properties for mass assignment.

7. **Run Migrations**
   Ran `php artisan migrate` to create the `articles` table in the database.

8. **Implement CRUD Logic in Controller**
   Wrote all necessary methods in `ArticleController` for CRUD:
   - `index` (list articles)
   - `create` (show form)
   - `store` (save new article)
   - `edit` (show edit form)
   - `update` (update article)
   - `destroy` (delete article)
   - `show` (view single article, if needed)

9. **Create Blade Views for CRUD Operations**
   Built Blade templates for listing, creating, editing, and viewing articles.
   Included file upload for images and displayed images in a circular format in the table.

10. **Define Routes**
    Added resourceful routes in `routes/web.php` using `Route::resource('articles', ArticleController::class);`.

11. **Test the CRUD Functionality**
    Manually tested all CRUD operations (create, read, update, delete) through the browser to ensure everything works as expected.

**Extra Notes:**
- Used form validation for all inputs.
- Handled image uploads and displayed images in the articles list.
- Used Bootstrap for basic styling (if applicable).
- Ensured all routes and views are working and error-free.

<br>

<br>

<br>

---



















<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
