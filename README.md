# RoleWise Auth System

A simple yet effective authentication system in Laravel with role-based access control. This project allows users to register and login as a User, Admin, or Super Admin, each having access to their respective dashboards.

## 📦 Features

* User registration with role selection (User, Admin, Super Admin)
* Role-based dashboard redirection after login
* Authentication with Laravel's built-in `Auth` system
* Secure password hashing

## 🛠️ Installation

1. **Clone the repository:**

```bash
https://github.com/ESE-Wahaj/roles
cd roles
```

2. **Install dependencies:**

```bash
composer install
```

3. **Set up the `.env` file:**

```bash
cp .env.example .env
```

Update the `.env` file with your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=basic_auth_db
DB_USERNAME=root
DB_PASSWORD=
```

4. **Generate the application key:**

```bash
php artisan key:generate
```

5. **Run the migrations:**

```bash
php artisan migrate
```

6. **Start the server:**

```bash
php artisan serve
```

Access the application at: `http://127.0.0.1:8000`

## 🚀 Usage

* Navigate to `/signup` to create a new account with role selection.
* Login via `/login`.
* Depending on the role, the user will be redirected to their respective dashboard:

  * User: `/user/dashboard`
  * Admin: `/admin/dashboard`
  * Super Admin: `/super-admin/dashboard`

## 🛡️ Security

* Passwords are securely hashed using Laravel's `Hash` facade.
* Role management ensures restricted access based on user roles.

## 📁 Folder Structure

* `app/Http/Controllers/AuthController.php` - Handles registration and login logic.
* `resources/views` - Contains the login, signup, and dashboard views.
* `routes/web.php` - Defines all web routes.

## 🔧 Future Enhancements

* Implement email verification.
* Add password reset functionality.
* Advanced role-based access control (RBAC).

## 🤝 Contributions

Feel free to fork this repository, make your changes, and submit a pull request.

## 📄 License

This project is open-source and available under the MIT License.
