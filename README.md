# Laravel Dockerized Environment

This project is a fully containerized Laravel development environment using Docker Compose.  
It includes Nginx, PHP-FPM, MySQL, Redis, Laravel Horizon, and Scheduler.

---

## Tech Stack

- Laravel (PHP 8.4)
- Docker & Docker Compose
- Nginx
- MySQL 8
- Redis 7
- Laravel Horizon (Queue Management)
- Laravel Scheduler

---

## Services Overview

### App (PHP-FPM)
Handles Laravel application logic.

### Nginx
Acts as a reverse proxy and serves the application.

### MySQL
Database service with persistent volume.

### Redis
Used for caching, sessions, and queues.

### Horizon
Manages and monitors Laravel queues.

### Scheduler
Runs Laravel scheduled tasks continuously.

---

## How to Run

Make sure Docker and Docker Compose are installed.

```bash
docker compose up -d --build
