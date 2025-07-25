#!/bin/bash

# Build script for Vercel deployment

echo "Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev

echo "Installing Node dependencies..."
npm ci

echo "Building assets..."
npm run build

echo "Creating writable directories..."
mkdir -p storage/logs
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions  
mkdir -p storage/framework/views
mkdir -p bootstrap/cache

echo "Setting up database..."
touch database/database.sqlite

echo "Caching Laravel configuration..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Caching views..."
php artisan view:cache

echo "Build completed successfully!" 