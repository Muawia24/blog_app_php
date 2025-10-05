# BlogApp

BlogApp is a simple CRUD (Create, Read, Update, Delete) web application built with Laravel. It allows users to manage blog posts with basic functionality and demonstrates essential Laravel concepts such as routing, controllers, models, and views.

## Features

- Create new blog posts
- View a list of all posts
- Edit existing posts
- Delete posts

## Technology Stack

- **Backend:** Laravel (PHP)
- **Database:** MySQL or SQLite

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL or SQLite

### Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/Muawia24/blogapp.git
    cd blogapp
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Copy `.env.example` to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```

4. Run migrations:
    ```bash
    php artisan migrate
    ```

5. Start the development server:
    ```bash
    php artisan serve
    ```

### Usage

- Access the app in your browser at `http://localhost:8000`
- Add, view, edit, and delete blog posts
