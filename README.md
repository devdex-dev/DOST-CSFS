# 🇵🇭 DOST-CSFS

**Customer Satisfaction Feedback System** for the Department of Science and Technology – Region XI (DOST-XI)

A web-based system for collecting, managing, and analyzing customer feedback from DOST-XI's services and training programs. It supports two feedback instruments — the **SQD (Service Quality Dimensions)** form and the **Net Promoter Score** form — and provides an admin dashboard with analytics across client demographics, sectors, services, and training programs.

> This project was co-developed and is forked from [TobeJavinz/DOST-CSFS](https://github.com/TobeJavinz/DOST-CSFS).

---

## Table of Contents

- [Overview](#overview)
- [Tech Stack](#tech-stack)
- [Features](#features)
- [Project Structure](#project-structure)
- [Prerequisites](#prerequisites)
- [Local Setup](#local-setup)
- [Database Configuration](#database-configuration)
- [Building CSS with Tailwind](#building-css-with-tailwind)
- [Pages Reference](#pages-reference)
- [User Roles](#user-roles)
- [Contributing](#contributing)
- [License](#license)

---

## Overview

DOST-CSFS digitizes the customer feedback process for DOST-XI. Clients (individuals and MSMEs who availed of DOST services or training) can log in and submit feedback through standardized government feedback forms. Staff and administrators can view aggregated results and export reports.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP (server-side rendering) |
| Database | MySQL (via `mysqli`) |
| Frontend Styling | Tailwind CSS v3 |
| UI Icons | Remix Icons, Material Symbols |
| Typography | Poppins (Google Fonts) |
| PDF Export | jsPDF |
| Build Tool | Node.js / npm |
| Web Server | Apache (`.htaccess` configured) |

**Languages breakdown:** PHP ~69%, CSS ~15%, Hack ~15%, JavaScript ~1%

---

## Features

**Client-Facing**
- User registration and login with hashed passwords
- SQD (Service Quality Dimensions) feedback form submission
- Net Promoter Score feedback form submission
- Session timeout for security

**Admin Dashboard**
- Summary statistics: total clients, male/female breakdown, first-time vs. returning clients, MSME count, food/non-food training counts
- Conducted trainings table with recipient counts
- Firms assisted, delivered services, and different sectors breakdowns
- Tabular reports view (`reports.php`, `tables.php`)
- Print-ready report page (`printPage.php`)
- PDF export (via jsPDF)
- Admin-only panel (`admin.php`) separate from regular user login
- CRUD: update and delete feedback entries

**Security**
- PHP session-based authentication (`session_auth.php`)
- Session destroy on logout (`session_destroy.php`)
- JavaScript-based session timeout (`session_timeout.js`)
- Prepared statements for SQL queries

---

## Project Structure

```
DOST-CSFS/
├── assets/               # Images, logos (e.g. csfs.png)
├── src/
│   └── output.css        # Compiled Tailwind CSS output
├── node_modules/         # npm dependencies
│
├── index.php             # Login page (client entry point)
├── signup.php            # User registration
├── dashboard.php         # Main dashboard with analytics
├── admin.php             # Admin login page
├── forms.php             # Feedback form selection
├── sqd.php               # SQD feedback form
├── sqdupdate.php         # SQD submission handler / update
├── netpromoter.php       # Net Promoter Score form
├── netpromoterupdate.php # Net Promoter submission handler / update
├── reports.php           # Reports overview
├── tables.php            # Tabular data view
├── printPage.php         # Print-optimized report view
├── update.php            # General data update handler
├── delete_page.php       # Delete feedback entry handler
│
├── header.php            # Reusable page header component
├── sidebar.php           # Reusable sidebar navigation
├── DBConn.php            # Database connection function
├── session_auth.php      # Session authentication check
├── session_destroy.php   # Logout / session termination
├── session_timeout.js    # Client-side session timeout logic
│
├── style.css             # Tailwind CSS source (input file)
├── loginstyle.css        # Login page custom styles
├── tailwind.config.js    # Tailwind CSS configuration
├── package.json          # npm scripts and dependencies
└── .htaccess             # Apache URL/redirect configuration
```

---

## Prerequisites

Make sure the following are installed on your machine:

- **PHP** 7.4 or higher — [Download](https://www.php.net/downloads)
- **MySQL** 5.7 or higher — [Download](https://dev.mysql.com/downloads/)
- **Apache** web server (e.g. via [XAMPP](https://www.apachefriends.org/) or [Laragon](https://laragon.org/))
- **Node.js** v16+ and **npm** — [Download](https://nodejs.org/) *(for Tailwind CSS builds)*

---

## Local Setup

### 1. Clone the repository

```bash
git clone https://github.com/devdex-dev/DOST-CSFS.git
cd DOST-CSFS
```

### 2. Place in your web server root

Copy or move the project folder into your Apache web root:

- **XAMPP:** `C:/xampp/htdocs/DOST-CSFS`
- **Laragon:** `C:/laragon/www/DOST-CSFS`
- **Linux/Mac:** `/var/www/html/DOST-CSFS`

### 3. Install Node dependencies

```bash
npm install
```

---

## Database Configuration

### 1. Create the database

Open **phpMyAdmin** (or your MySQL client) and create a new database named:

```
dost-csfs
```

### 2. Import the schema

If a SQL dump file is available (e.g. `dost-csfs.sql`), import it via phpMyAdmin or the CLI:

```bash
mysql -u root -p dost-csfs < dost-csfs.sql
```

### 3. Update `DBConn.php`

Open `DBConn.php` and update the credentials to match your environment:

```php
$servername = "localhost";   // Your MySQL host
$username   = "root";        // Your MySQL username
$password   = "";            // Your MySQL password
$database   = "dost-csfs";   // Your database name
```

> ⚠️ **Security note:** Never commit real credentials to version control. Consider using environment variables or a `.env` file in production.

---

## Building CSS with Tailwind

The project uses Tailwind CSS. The source file is `style.css` and the compiled output goes to `src/output.css`.

### Watch mode (development)

```bash
npm run build
```

This runs:
```
npx tailwindcss -i ./style.css -o ./src/output.css --watch
```

Tailwind will watch for changes and recompile automatically. Keep this running while developing.

### One-time build (production)

```bash
npx tailwindcss -i ./style.css -o ./src/output.css --minify
```

---

## Pages Reference

| Page | URL | Description |
|---|---|---|
| Login | `index.php` | Client login page |
| Sign Up | `signup.php` | New user registration |
| Dashboard | `dashboard.php` | Analytics overview |
| Admin Login | `admin.php` | Admin-only login |
| Forms | `forms.php` | Feedback form selection |
| SQD Form | `sqd.php` | Service Quality Dimensions form |
| Net Promoter | `netpromoter.php` | Net Promoter Score form |
| Reports | `reports.php` | Report summaries |
| Tables | `tables.php` | Tabular data view |
| Print Report | `printPage.php` | Print-optimized layout |

---

## User Roles

**Regular User (Client)**
- Registers and logs in via `index.php`
- Submits SQD and/or Net Promoter feedback
- Session expires after inactivity

**Admin**
- Logs in via `admin.php`
- Full access to the dashboard, reports, and data management
- Can update and delete feedback entries

---

## Contributing

1. Fork the repository
2. Create a new branch: `git checkout -b feature/your-feature`
3. Make your changes and commit: `git commit -m "feat: describe your change"`
4. Push to your fork: `git push origin feature/your-feature`
5. Open a Pull Request against `main`

Please test locally before submitting a PR, and ensure no real credentials or sensitive data are included.

---

## License

This project is licensed under the **ISC License**.

---

> Developed for **DOST-XI (Department of Science and Technology – Region XI)**, Davao City, Philippines.
