# Freelance Hours ⏰

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

[![GitHub followers](https://img.shields.io/github/followers/rinel-benjamim?style=social)](https://github.com/rinel-benjamim)

</div>

## 📋 About

Freelance Hours is a comprehensive project management system designed specifically for freelancers to track their working hours, manage projects, and streamline their workflow. Built with Laravel and modern web technologies, it provides an intuitive interface for managing freelance work efficiently.

## ✨ Features

### 🚀 Project Management
- Create and manage multiple projects
- Track project status and deadlines
- Organize projects by tech stack and categories
- View detailed project analytics

### ⏱️ Time Tracking
- Log working hours for each project
- Generate detailed time reports
- Track billable hours automatically
- Export time logs for invoicing

### 👥 Client Management
- Maintain client information
- Track client-specific project requirements
- Manage client communication history

### 💰 Financial Management
- Generate invoices based on tracked hours
- Set different hourly rates per project
- Track payments and outstanding balances

## 🛠️ Installation

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL

### Setup Steps

1. **Clone the repository**
```bash
git clone https://github.com/rinel-benjamim/freelance-hours.git
cd freelance-hours
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install Node dependencies**
```bash
npm install
```

4. **Environment Setup**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure your database in .env file**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. **Run migrations**
```bash
php artisan migrate
```

7. **Build assets**
```bash
npm run dev
```

8. **Start the development server**
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 🔧 Technologies Used

- **Backend:** Laravel 10.x, PHP 8.1
- **Frontend:** TailwindCSS, JavaScript
- **Database:** MySQL
- **Authentication:** Laravel Breeze
- **Development:** Vite

## 👨‍💻 Developer

### Rinel Benjamim

<div align="center">
  <a href="https://github.com/rinel-benjamim">
    <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white" alt="GitHub"/>
  </a>
  <a href="https://github.com/rinel-benjamim">
    <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn"/>
  </a>
</div>

Full-stack developer passionate about creating efficient solutions for real-world problems. Specialized in Laravel and modern web development technologies.

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🤝 Contributing

Contributions are welcome! Feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request
