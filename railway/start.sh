#!/bin/sh
set -e

. "$(dirname "$0")/init-app.sh"

echo "=== Railway: starting web server on port ${PORT:-8080} ==="

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8080}"
