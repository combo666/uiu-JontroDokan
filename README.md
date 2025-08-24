UIU JontroDokan
=================

Small campus marketplace + blog and lab support platform built with plain PHP and MySQL.

Quick overview
- Tech: PHP (server-rendered), MySQL/MariaDB, Bootstrap, vanilla JS
- Main features: marketplace (user-sold products), blog, recycling listings, lab equipment lending
- DB schema: see `database/jontrodokan.sql` (contains `user`, `products`, `posts`, `post_categories`, `post_comments`, `lab_items`, `lab_item_order`, `recycling`, ...)

Run locally (recommended: XAMPP)
1. Install XAMPP (https://www.apachefriends.org) and start Apache + MySQL.
2. Copy the repo into your webroot. Example (PowerShell):
   Copy-Item -Path 'C:\Users\Sahadat Islam\Downloads\My\My Projects (git)\uiu-JontroDokan' -Destination 'C:\xampp\htdocs\uiu-JontroDokan' -Recurse
3. Import the database:
   - Option A (phpMyAdmin): open http://localhost/phpmyadmin -> Create database `jontrodokan` -> Import -> choose `database/jontrodokan.sql`.
   - Option B (CLI):
     mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS jontrodokan CHARACTER SET utf8mb4;"
     mysql -u root -p jontrodokan < "C:\xampp\htdocs\uiu-JontroDokan\database\jontrodokan.sql"
4. Confirm DB credentials in `database/db_connect.php` (defaults to `root` / empty password and DB `jontrodokan`).
5. Ensure upload folders are writable (on Windows usually fine):
   - `Seller_page/uploaded_img/`
   - `blog/image/`, `lab_support/image/` etc.
6. Open in browser: http://localhost/uiu-JontroDokan/index.php (adjust path if you used a different folder name)

Quick alternative (PHP built-in server)
1. Ensure a MySQL server is running (XAMPP or system install).
2. From the project root run (PowerShell):
   cd 'C:\Users\Sahadat Islam\Downloads\My\My Projects (git)\uiu-JontroDokan'
   php -S localhost:8000
3. Import the DB as above (CLI or phpMyAdmin).
4. Open http://localhost:8000/index.php

Security & maintenance notes
- Replace custom crypt() password handling with password_hash() and password_verify().
- Convert raw SQL queries that interpolate user input to prepared statements (I started this in `Seller_page/admin.php`).
- Validate and sanitize all file uploads and user inputs.
- Add CSRF protection to sensitive POST forms.

If you'd like, I can:
- Replace the register/login flow with password_hash/password_verify and migrate existing users.
- Apply the upload validation helper to the other upload endpoints (blog, recycle, admin includes).
- Generate a short smoke-test script that checks the homepage and login route.

