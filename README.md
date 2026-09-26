SurplusLink Lanka

Smart Surplus Food Redistribution Platform
SurplusLink Lanka is a web-based food redistribution platform designed to reduce food waste by connecting restaurants and food businesses with organizations and individuals who can make use of surplus food.

The platform provides a centralized system for managing surplus food listings, requests, users, restaurants, NGOs, delivery partners, and food redistribution activities.

🎯 Project Overview
Every day, usable food can become surplus due to overproduction, cancelled orders, excess inventory, or approaching expiry.

SurplusLink Lanka aims to provide a digital solution that helps redirect this surplus food instead of allowing it to become unnecessary waste.

The system brings together multiple stakeholders through one platform:
🍽️ Restaurants & Food Businesses
🤝 NGOs
👤 Customers
🚚 Delivery Partners
🛡️ Administrators

✨ Key Features

👤 User Management
User registration and authentication
Role-based access control
User profile management
Account status management

🍽️ Restaurant Management
Restaurant profiles
Business information management
Food surplus listing management
Listing availability management
Food request management

🥘 Food Listings
Create surplus food listings
Edit and delete listings
Food type categorization
Quantity and pricing information
Pickup address management
Availability deadline
Listing status tracking

📦 Food Requests
Browse available surplus food
Request food listings
View personal requests
Track request status
Restaurant-side request management

🤝 NGO Support
NGO profiles
NGO dashboard
Food redistribution support

🚚 Delivery Partners
Delivery partner profiles
Delivery task management
Delivery workflow support

🔔 Notifications
Food request status notifications
User notification management

🛡️ Admin Management
User management
Restaurant management
Platform monitoring

Role and status management
👥 User Roles
Role
Main Responsibilities
👤 Customer
Browse food and make requests

🍽️ Restaurant
Manage surplus food listings and requests

🤝 NGO
Support food redistribution activities

🚚 Delivery Partner
Handle delivery tasks

🛡️ Admin
Manage and monitor the platform

🛠️ Technology Stack
Backend
PHP
Laravel
Frontend
HTML5
CSS3
JavaScript
Blade
Bootstrap / Tailwind CSS
Database
MySQL / MariaDB
Development Tools
Visual Studio Code
XAMPP
Composer
npm
Git & GitHub

🏗️ Project Architecture
The application follows the Laravel MVC architecture.
SurplusLink-Lanka
│
├── app/
│ ├── Http/
│ │ ├── Controllers/
│ │ ├── Middleware/
│ │ └── Requests/
│ ├── Models/
│ └── Notifications/
│
├── bootstrap/
├── config/
├── database/
│ ├── migrations/
│ ├── factories/
│ └── seeders/
│
├── public/
├── resources/
│ ├── css/
│ ├── js/
│ └── views/
│
├── routes/
├── storage/
├── tests/
├── composer.json
├── package.json
└── artisan

🔐 Security
The project follows common Laravel security practices including:
Authentication
Role-based authorization
CSRF protection
Password hashing
Environment-based configuration
.env exclusion from version control
Sensitive environment variables and database credentials are intentionally excluded from the repository.

🚀 Installation & Setup
1. Clone the repository
git clone https://github.com/nawoda27/SurplusLink-Lanka.git
2. Navigate to the project
cd SurplusLink-Lanka
3. Install PHP dependencies
composer install
4. Install frontend dependencies
npm install
5. Create the environment file
cp .env.example .env
For Windows, you can also create a copy of .env.example and rename it to:
.env
6. Generate the application key
php artisan key:generate
7. Configure the database
Create a MySQL/MariaDB database and update the database settings in .env.
Example:
DB_DATABASE=surpluslink_lanka_laravel
DB_USERNAME=root
DB_PASSWORD=
8. Run migrations
php artisan migrate
9. Create the storage link
php artisan storage:link
10. Start the Laravel development server
php artisan serve
The application will normally be available at:
http://127.0.0.1:8000
11. Start the frontend development server
In another terminal:
npm run dev

📸 Screenshots
Screenshots of the application will be added here as the platform UI is finalized.
Planned screenshots include:
Landing Page
Customer Dashboard
Restaurant Dashboard
Food Listings
Food Request Management
NGO Dashboard
Delivery Partner Dashboard
Admin Dashboard

🗺️ Future Improvements
The platform is designed to be continuously extended.
Planned improvements include:
💳 Credit / reward system
📱 Android mobile application
🗺️ Location-based food discovery
📍 GPS-based delivery tracking
🔔 Real-time notifications
📊 Advanced analytics dashboards
🤖 Smart surplus food recommendations
📈 Food waste reduction analytics
💰 Donation and payment support
🔎 Advanced search and filtering

🎓 Project Purpose
SurplusLink Lanka is being developed as a portfolio project to demonstrate practical skills in:
Software development
Laravel web application development
Database design
Role-based system architecture
Business analysis
UI/UX design
Git and GitHub workflow
Software testing

👩‍💻 Developer
Nawoda Hansanee
HNDIT Student | Aspiring Software Developer

Skills
PHP Laravel MySQL Java Android JavaScript HTML CSS Git GitHub
📄 License
This project is currently developed for educational and portfolio purposes.
