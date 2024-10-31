
# Data Explorer Demo

**Data Explorer Demo** is a Laravel application showcasing the features of the **Data Explorer package**, a tool designed to provide users with an intuitive web interface for interacting with database tables. This demo enables users to experience the export functionality, with support for custom filters, column selection, and multiple export formats.

---

## Features

1. **Browse and Select Database Tables**:
   - Dynamically retrieves tables from the database and displays column details.
   - Excludes non-essential tables (e.g., `sessions`, `cache`) from exports.

2. **Data Export Options**:
   - Supports exporting data in CSV, JSON, and Excel formats.
   - Allows users to:
     - **Filter data** by applying conditions (e.g., `equal to`, `greater than`, `starts with`).
     - **Select specific columns** for targeted exports.
     - **Customize formats** with options for headers, column formatting, and more.

3. **User-Friendly Interface**:
   - The application includes a simple and intuitive UI for selecting tables, applying filters, and initiating data exports.

---

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/AYOUBBASIDI/Data-Explorer-Demo
   cd Data-Explorer-Demo
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Set up the environment**:
   - Copy `.env.example` to `.env` and configure your database and other settings.
   ```bash
   php artisan key:generate
   ```

4. **Run migrations and seed the database**:
   - The demo includes sample tables and data for testing.
   ```bash
   php artisan migrate --seed
   ```

5. **Serve the application**:
   ```bash
   php artisan serve
   ```

---

## Usage

After setup, access the demo application via `http://localhost:8000/data-explorer`. 

- Navigate through available tables, apply filters, and export data in various formats.
- Experiment with column selection and customized formatting to see the power of the Data Explorer package.

---

## Requirements

- PHP 8.0 or higher
- Laravel 9.x or higher
- Supported database (MySQL, PostgreSQL, SQLite, SQL Server)

---

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve this demo.

