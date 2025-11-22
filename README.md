
# 📘 bootcamp-fullstack-php-laravel-vue-docker

A complete learning journey covering PHP, Laravel, Vue.js, MySQL, and Docker. This repository provides an 8‑month structured curriculum with hands-on exercises, Docker environments, and real-world fullstack projects.

## 🚀 Curriculum Overview

| Month | Topic | Skills |
|------|-------|--------|
| **01** | PHP Basics | Variables, arrays, loops, functions |
| **02** | PHP OOP | Classes, inheritance, interfaces, traits |
| **03** | PHP + MySQL | PDO, CRUD, SQL queries |
| **04** | Laravel Basics | MVC, routing, controllers, migrations |
| **05** | Laravel Advanced | APIs, relationships, file uploads |
| **06** | Vue Basics | Components, props, events, router |
| **07** | Vue Advanced | Pinia, API calls, component patterns |
| **08** | Fullstack Projects | Laravel API + Vue SPA |

## 🐳 Docker Workflow

Each month includes its own Docker setup.

To run any month:

```bash
cd monthXX-folder/docker
docker compose up -d
docker compose exec php bash
```

## 📂 Repository Structure

```
bootcamp-fullstack-php-laravel-vue-docker/
├── month01-php-basics/
├── month02-php-oop/
├── month03-php-mysql/
├── month04-laravel-basics/
├── month05-laravel-advanced/
├── month06-vue-basics/
├── month07-vue-advanced/
├── month08-fullstack-projects/
└── hackerank-solutions/
```

## 🧪 Sample Projects

### ✔ Month 03 – Student CRUD App
Full PHP + MySQL CRUD app using PDO.  
Visit: `http://localhost:8080/list.php`

### ✔ Fullstack Todo App (Laravel + Vue)
API backend + Vue SPA frontend.

### ✔ Wellness Journal App
Authentication + CRUD + API + SPA.

## ❤️ Purpose

This bootcamp takes a beginner from zero experience to building fullstack applications.

## 🤝 Contributing

Suggestions welcome.

## 📈 Future Improvements

- Laravel Sail integration  
- PHPUnit tests  
- CI/CD with GitHub Actions  
- Production Docker (Nginx + PHP-FPM)

