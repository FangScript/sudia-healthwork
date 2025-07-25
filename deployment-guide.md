# Laravel Application Deployment Guide

## Current Application Analysis

This is a Laravel 12 application with the following configuration:
- **Laravel Version**: 12.0
- **PHP Version**: 8.2+
- **Database**: Currently using SQLite (configured for development)
- **Cache**: Database-based caching
- **Queue**: Database-based queue
- **Session**: Database-based sessions

## Pre-Deployment Checklist

### 1. Environment Configuration

Create a production `.env` file with these critical changes:

```bash
APP_NAME=YourAppName
APP_ENV=production
APP_KEY=base64:GenerateNewKeyUsingPhpArtisanKeyGenerate
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Logging - Use daily rotation and error level only
LOG_CHANNEL=stack
LOG_STACK=daily
LOG_LEVEL=error

# Database - Switch to MySQL/PostgreSQL for production
DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_PORT=3306
DB_DATABASE=your_production_database
DB_USERNAME=your_db_username
DB_PASSWORD=your_secure_password

# Session Security
SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=true
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=strict

# Cache Configuration
CACHE_STORE=redis  # or database if Redis not available
CACHE_PREFIX=your_app_cache

# Queue Configuration (consider Redis for production)
QUEUE_CONNECTION=redis  # or database

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-server
MAIL_PORT=587
MAIL_USERNAME=your-smtp-username
MAIL_PASSWORD=your-smtp-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@yourdomain.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### 2. Security Hardening

- ✅ APP_DEBUG is set to false in production
- ✅ APP_ENV is set to production
- ✅ Generate new APP_KEY for production
- ✅ Enable session encryption
- ✅ Use secure cookies
- ✅ Set proper CORS policies

### 3. Database Migration

```bash
# Run migrations in production
php artisan migrate --force

# If you need to seed data
php artisan db:seed --force
```

### 4. Performance Optimizations

```bash
# Cache configuration files
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize Composer autoloader
composer install --optimize-autoloader --no-dev

# Build assets
npm ci --production
npm run build
```

### 5. Storage Permissions

Ensure these directories are writable:
- `storage/`
- `storage/logs/`
- `storage/framework/cache/`
- `storage/framework/sessions/`
- `storage/framework/views/`
- `bootstrap/cache/`

```bash
# Linux/Unix systems
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## Deployment Platforms

### Heroku Deployment (Procfile already configured)

1. Install Heroku CLI
2. Create Heroku app: `heroku create your-app-name`
3. Set environment variables: `heroku config:set APP_KEY=your-key`
4. Add database addon: `heroku addons:create cleardb:ignite`
5. Deploy: `git push heroku main`

### Netlify Deployment (netlify.toml already configured)

The application is configured for Netlify deployment with:
- PHP 8.2 runtime
- Node.js 18
- Automatic asset building
- Production optimizations

### Traditional VPS/Server Deployment

1. Configure web server (Apache/Nginx)
2. Point document root to `public/` directory
3. Set up database server
4. Configure environment variables
5. Set proper file permissions
6. Set up SSL certificate

## Post-Deployment Tasks

1. Test all application functionality
2. Verify database connections
3. Check email delivery
4. Monitor error logs
5. Set up monitoring and backups
6. Configure automated deployments

## Environment Variables Security

**Critical**: Never commit production `.env` files to version control. Use environment variable management services:
- Heroku Config Vars
- AWS Systems Manager Parameter Store
- Docker secrets
- Server environment variables

## Monitoring and Maintenance

1. Set up log monitoring
2. Configure error tracking (Sentry, Bugsnag)
3. Set up uptime monitoring
4. Schedule regular backups
5. Plan update strategy

## Troubleshooting Common Issues

1. **500 Error**: Check storage permissions and APP_KEY
2. **Database Connection**: Verify DB credentials and host
3. **Asset Loading**: Ensure Vite build completed successfully
4. **Session Issues**: Check session driver and database tables

## Security Best Practices

1. Keep Laravel and dependencies updated
2. Use HTTPS in production
3. Implement rate limiting
4. Configure firewall rules
5. Regular security audits
6. Backup strategy 