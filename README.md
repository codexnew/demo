# ## ✨ Features

- ✅ Add New Student with validation
- ✅ View All Students with Search functionality
- ✅ Responsive & Beautiful UI (Modern Design)
- ✅ Delete Student
- ✅ Email format validation
- ✅ Student ID uniqueness
- ✅ Toast/Success & Error Messages
- ✅ Fully Responsive (Mobile + Desktop)

## 🛠️ Technologies Used

- **Backend**: PHP 8
- **Database**: MySQL
- **Frontend**: Bootstrap 5.3, Bootstrap Icons
- **Server**: XAMPP / WAMP

---

## Installation

### Prerequisites
- PHP 8.1 or later
- [Composer](https://getcomposer.org/)
- MySQL or PostgreSQL

### Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/codexvisual/demo.git
   cd demo
   ```
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Set up the environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Configure your database in `.env`, then run migrations:
   ```bash
   php artisan migrate --seed
   ```
5. Start the development server:
   ```bash
   php artisan serve
   ```
