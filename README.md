# Freelance Hours ⏰

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

[![GitHub followers](https://img.shields.io/github/followers/rinel-benjamim?style=social)](https://github.com/rinel-benjamim)

</div>

## 📋 About

Freelance Hours is a project management platform that connects freelancers with projects. It allows project owners to post their projects with specific tech stack requirements and deadlines, while freelancers can submit proposals with their estimated working hours. The system streamlines the project bidding process and helps manage project timelines effectively.

## ✨ Features

### 🚀 Project Management
- Create and publish projects with detailed descriptions
- Specify required tech stack (e.g., Node.js, React, JavaScript)
- Set project deadlines and track status (open/closed)
- View and manage all project proposals

### 📝 Project Proposals
- Submit proposals for open projects
- Specify estimated hours for project completion
- Track proposal status
- Receive notifications about proposal updates

### 👥 User System
- User authentication and authorization
- Project creation and management for project owners
- Profile management with email verification
- Track created projects and submitted proposals

### 🔧 Technical Features
- Email notifications for proposal updates
- Job queue system for background processing
- Cache system for improved performance
- JSON storage for tech stack data

## 🗄️ Database Structure

### Projects Table
- `id`: Unique identifier
- `title`: Project title
- `description`: Detailed project description
- `ends_at`: Project deadline
- `status`: Project status (open/closed)
- `tech_stack`: Required technologies (JSON)
- `created_by`: Project owner reference

### Proposals Table
- `id`: Unique identifier
- `email`: Freelancer's email
- `hours`: Estimated completion hours
- `project_id`: Associated project
- `position_status`: Proposal status

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

9. **Configure queue worker (optional but recommended)**
```bash
php artisan queue:work
```

Visit `http://localhost:8000` in your browser.

## 🔧 Technologies Used

- **Backend:** Laravel 10.x, PHP 8.1
- **Frontend:** TailwindCSS, JavaScript
- **Database:** MySQL
- **Queue System:** Laravel Jobs
- **Cache:** Laravel Cache
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

Full-stack developer specialized in Laravel and modern web development technologies. Creating efficient solutions for real-world freelancing challenges.

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🤝 Contributing

Contributions are welcome! Feel free to submit a Pull Request.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request
