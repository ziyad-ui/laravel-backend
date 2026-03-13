## Final Project – Backend (Laravel)

This repository contains the **backend** API for **YOUR PROJECT NAME** built with Laravel.

---

### 1. Technologies Used

- Laravel **X.X**
- PHP **X.X**
- Composer **X.X**
- Database: **MySQL/PostgreSQL X.X**
- Other: **list any major packages (e.g. Laravel Sanctum, Laravel Breeze, etc.)**

More detail in [`docs/tech-stack.md`](docs/tech-stack.md).

---

### 2. Getting Started (Local Setup)

#### 2.1 Prerequisites

- PHP **X.X** or higher  
- Composer **X.X**  
- MySQL/PostgreSQL  
- Node.js & npm (if using Vite for assets)

#### 2.2 Installation

```bash
# from project root
cd laravel-backend

composer install

cp .env.example .env
php artisan key:generate

# configure your database in .env
php artisan migrate --seed

php artisan serve

