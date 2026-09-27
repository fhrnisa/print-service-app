# Ruang Cetak (Print Service & Stationary)

A web-based **print service and stationery ordering system** built with Laravel.

Ruang Cetak helps customers order printing, typing, photo printing, and stationery products through a simple and responsive interface.

## Features

### Customer

* Browse printing services and stationery products
* Order printing, typing, and photo printing services
* Upload files for print orders
* Add customer and order details
* Review orders before submission
* Get an order number
* Check order status

### Admin

* Admin authentication
* Manage products and services
* Manage customer orders
* Review uploaded files
* Update order status

## Tech Stack

* **Laravel** — Backend framework
* **PHP** — Programming language
* **Blade** — Templating
* **Tailwind CSS** — Styling
* **JavaScript** — Client-side interaction
* **MySQL** — Database
* **Vite** — Frontend asset bundling

## Main Flow

```text
Browse Services / Products
        ↓
Select Service
        ↓
Fill Order Form
        ↓
Review Order
        ↓
Submit Order
        ↓
Order Number
        ↓
Admin Processing
```

## Installation

```bash
git clone https://github.com/fhrnisa/print-service-app.git
cd print-service-app

composer install
npm install

cp .env.example .env
php artisan key:generate
```

Configure the database in `.env`, then run:

```bash
php artisan migrate --seed
php artisan storage:link
npm run dev
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

## Project Status

**In Development**

## Author

**Fahrunnisa Kusumawardani**

UI/UX Designer & Web Developer

---

## License

This project is created for educational and portfolio purposes.
