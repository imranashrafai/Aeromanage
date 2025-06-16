# ✈️ Aeromanage

A Laravel-based application for managing aviation operations—aircraft, personnel, flights, maintenance, reporting, and more.

## 🚀 Features

- **User Authentication & Roles**: Admin, Manager, and Standard user roles.
- **Aircraft Management**: CRUD operations, registration, status tracking.
- **Flight Scheduling**: Plan, assign, and monitor flights.
- **Maintenance Logs**: Track maintenance records and alerts.
- **Reporting & Analytics**: Generate aircraft usage and maintenance reports.
- **API Support**: RESTful endpoints for integration with external systems.

## 🗂️ Project Structure

```plaintext
app/
├── Models/
├── Http/
│ ├── Controllers/
│ └── Requests/
database/
├── migrations/
├── seeders/
resources/
├── views/
└── sass/
routes/
├── web.php
└── api.php
.env.example
artisan
composer.json
package.json

```
---

## ⚙️ Setup Instructions

```bash
git clone https://github.com/imranashrafai/Aeromanage.git
cd Aeromanage
composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate

# Configure DB and credentials in .env
php artisan migrate --seed
php artisan serve
```

## 📦 Major Dependencies
- laravel/ui or laravel/breeze for authentication
- spatie/laravel-permission for role-based access
- laravel/sanctum or passport for API auth
- yajra/laravel-datatables
- barryvdh/laravel-dompdf or maatwebsite/excel

## 🛠️ Usage
- Admin can assign users to roles.
- Create/manage aircraft and flights via dashboard.
- Generate reports accessible via Reports > Export section.
- API available under /api/* with Sanctum tokens.

## Testing
```bash
php artisan test
```

## 📜 License
This project is licensed under the MIT License.

## 👨‍💻 Developed By

**Imran Ashraf**  
📧 Email: [imranashraf0k@gmail.com](mailto:imranashraf0k@gmail.com)  
🔗 GitHub: [imranashrafai](https://github.com/imranashrafai)  
🔗 LinkedIn: [imranashrafai](https://www.linkedin.com/in/imranashrafai)
