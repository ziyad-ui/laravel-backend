## Final Project – Backend (Laravel)

This repository contains the **backend** API for **STUDENT DASHBOARD/MANAGEMENT SYSTEM** built with Laravel.

---
1. ### Screenshots

![Login screen](https://docs.google.com/document/d/1tE-BZMJcpcrUbfVhmqkbjr1hhDAaPcdhIifO0fA3ewI/edit?tab=t.0)
![Dashboard](https://docs.google.com/document/d/1bwpPzB7CxmhFT8TJLfKhLHRs7VfbMHjl_-jMzDG6RF0/edit?tab=t.0)
![Student Insights Overview](https://docs.google.com/document/d/1ALzH5ywuicp-YIKOD3g5sjHUS-8LGDwn51yiC72_p3c/edit?tab=t.0)
![Attendance Over School Days](https://docs.google.com/document/d/1GM5wJXoLNjIi72ImXn7zXQ5x_5n86SDs1XmqSxnAuo4/edit?tab=t.0)
![Weather Forcast](https://docs.google.com/document/d/19eRlZH5MVSeQS_5JEZomiPnlT0yQRpVRsEVZWZQPDN4/edit?tab=t.0)

---

### 2.More detail in [`docs/tech-stack.md`](docs/tech-stack.md).

---
### 3. Technologies Used

- Laravel **12.54.1**
- PHP **8.2.12**
- Composer **2.9.5**
- Database: **MySQL/PostgreSQL 8.0**
- Other: **list any major packages (e.g.Laravel Sanctum, Laravel Breeze, etc.)**

---
### 4. Video Demonstration

[Watch the video]()

---
### 5. Getting Started (Local Setup)

#### 5.1 Prerequisites

- PHP **8.2.12** or higher  
- Composer **2.9.5**  
- MySQL/PostgreSQL  
- Node.js & npm (if using Vite for assets)

#### 5.2 Installation

```bash
# from project root
cd laravel-backend

composer install

cp .env.example .env
php artisan key:generate

# configure your database in .env
php artisan migrate --seed

php artisan serve

