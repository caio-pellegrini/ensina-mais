# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**Ensina+** is a Laravel 11 educational platform for SESI-SP students, featuring video lessons, multiple-choice questions, essay correction, and discussion forums. It uses Filament 3.2 for admin panels with role-based access (admin, professor, aluno).

## Commands

### Development
```bash
php artisan serve          # Start PHP dev server at http://127.0.0.1:8000
npm run dev                # Start Vite HMR server
```

### Database
```bash
php artisan migrate --seed # Run migrations + seed default users
```

### Testing
```bash
./vendor/bin/pest                  # Run all tests
./vendor/bin/pest tests/Unit/      # Unit tests only
./vendor/bin/pest tests/Feature/   # Feature tests only
./vendor/bin/pest --filter=TestName # Single test
```

### Code Style
```bash
./vendor/bin/pint          # Format PHP code (Laravel Pint)
```

### Build
```bash
npm run build              # Production asset bundle
npm run optimize           # PHP + Filament cache optimization
npm run optimize:clear     # Clear optimization caches
```

## Architecture

### Panels
- **`/admin`** — Filament admin panel (admin role only), manages all content
- **`/teacher-panel`** — Filament teacher panel (professor + admin roles), manages lesson content
- Panel access is gated via `canAccessPanel()` in the `User` model

### Routing
All web routes require authentication (defined in `routes/web.php`). Key route structure:
- `/disciplinas/{discipline:slug}/{topic:slug}/{lesson:slug}` — Nested slug-based content routing
- `/questoes`, `/redacao`, `/forum`, `/simulados` — Feature areas
- `/area-aluno` — Student dashboard

### Content Hierarchy
Category → Discipline → Topic → Lesson (each with slugs via Spatie Sluggable)

Lessons store YouTube embed links and duration. Student progress is tracked in the `students_lessons` pivot table (`is_completed`, `completed_at`).

### Filament Resources
Located in `app/Filament/Resources/` (admin) and `app/Filament/TeacherPanel/Resources/` (teacher). Each resource corresponds to a model with full CRUD.

### Frontend Stack
- **Blade** templates with **Alpine.js** for reactivity
- **Tailwind CSS** + **Flowbite** for UI components
- **Swiper** for carousels, **Framer Motion** for animations
- Vite entry points: `resources/css/app.css` and `resources/js/app.js`

### Key Packages
- `spatie/laravel-sluggable` — Auto slug generation on models
- `spatie/eloquent-sortable` — Drag-and-drop ordering (Discipline, Topic)
- `diglactic/laravel-breadcrumbs` — Breadcrumbs in `routes/breadcrumbs.php`

## Default Seeded Users

| Role      | Email                          | Password        |
|-----------|-------------------------------|-----------------|
| Admin     | admin@ensinamais.com.br       | Admin#0987      |
| Professor | professor@ensinamais.com.br   | Professor#0987  |
| Aluno     | aluno@ensinamais.com.br       | Aluno#0987      |

## Environment

- Database: PostgreSQL (see `.env.example`). A MySQL 8 container is also available via `compose.yaml` on port 3306.
- Locale: `pt_BR`
- Sessions/Cache/Queue: database-backed
