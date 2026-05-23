#!/bin/sh
set -e

echo "=== Railway: preparing Laravel ==="

if [ -z "$APP_KEY" ]; then
    echo "ERROR: APP_KEY is not set."
    echo "Run locally: php artisan key:generate --show"
    echo "Then add the value to Railway → your service → Variables."
    exit 1
fi

chmod -R ug+rwx storage bootstrap/cache 2>/dev/null || true

php artisan config:clear

needs_db=false
case "${SESSION_DRIVER:-file}" in
    database|redis|dynamodb) needs_db=true ;;
esac
case "${CACHE_STORE:-file}" in
    database|redis|dynamodb) needs_db=true ;;
esac
case "${QUEUE_CONNECTION:-sync}" in
    database|redis|beanstalkd|sqs) needs_db=true ;;
esac

if [ "$needs_db" = "true" ]; then
    if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
        mkdir -p database
        touch database/database.sqlite
    fi
    php artisan migrate --force
fi

php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "=== Railway: Laravel ready ==="
