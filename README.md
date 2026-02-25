# 🛒 Ecommerce Application

JWT Based Single Sign-On (SSO) Provider

This is a Laravel-based Ecommerce application that works as the
**Identity Provider** in a JWT-based Single Sign-On (SSO) system.

When a user logs in here, a JWT token is generated and the user is
automatically authenticated in the connected Foodpanda application.

------------------------------------------------------------------------

## 🚀 Features

-   Laravel 11 Application
-   JWT Authentication
-   SSO Token Generation
-   Secure Login System
-   Redirect-Based Cross-App Authentication
-   Clean Architecture
-   Production Ready Setup

------------------------------------------------------------------------

## 🧰 Tech Stack

-   Laravel
-   PHP 8+
-   MySQL
-   JWT (tymon/jwt-auth)
-   Bootstrap (Blade UI)

------------------------------------------------------------------------

# 📦 Installation Guide

## 1️⃣ Clone the Repository

    git clone https://github.com/ArifurDev/ecommerce-app.git
    cd ecommerce-app

------------------------------------------------------------------------

## 2️⃣ Install Backend Dependencies

    composer install

------------------------------------------------------------------------

## 3️⃣ Install Frontend Dependencies

    npm install
    npm run build

------------------------------------------------------------------------

## 4️⃣ Create Environment File

    cp .env.example .env

------------------------------------------------------------------------

## 5️⃣ Configure Environment Variables

Update `.env`:

------------------------------------------------------------------------

## 🔐 JWT Configuration (IMPORTANT)

Generate JWT secret:

    php artisan jwt:secret

⚠ If using shared SSO, manually copy the same `JWT_SECRET` to both apps.

Example:

JWT_SECRET=shared_super_secret_key_here

------------------------------------------------------------------------

## 6️⃣ Generate Application Key

    php artisan key:generate

------------------------------------------------------------------------

## 7️⃣ Run Database Migration

    php artisan migrate --seed
------------------------------------------------------------------------

## 8️⃣ Start Development Server

    php artisan serve

Visit:

http://127.0.0.1:8000

------------------------------------------------------------------------

# 🔄 How SSO Works

1.  User logs in to Ecommerce.

2.  JWT token is generated.

3.  User is redirected to:

    foodpanda-app/sso-login?token=JWT_TOKEN

4.  Foodpanda verifies the token.

5.  User is automatically logged in.

------------------------------------------------------------------------

# 🛡 Security Notes

-   CSRF protection enabled
-   Request validation implemented
-   JWT expiration configured
-   Shared secret required for SSO
-   Use HTTPS in production
-   Set APP_DEBUG=false in production

------------------------------------------------------------------------

# 🚀 Production Setup

Update `.env`:

APP_ENV=production\
APP_DEBUG=false

Then run:

    php artisan config:cache
    php artisan route:cache
    php artisan view:cache

Ensure:

-   Correct database credentials
-   Same JWT_SECRET as Foodpanda app
-   Domain points to /public
-   HTTPS enabled

------------------------------------------------------------------------

# 👨‍💻 Author

Arifur Rahman Rifat\
GitHub: https://github.com/ArifurDev

------------------------------------------------------------------------

# 📜 License

This project is built for educational and demonstration purposes.
