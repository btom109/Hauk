<?php
// Configuration settings for the Hauk location sharing service

// Database connection settings
define('DB_HOST', 'localhost');
define('DB_NAME', 'hauk_db');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');

// Environment settings
define('ENVIRONMENT', 'development'); // Change to 'production' in production environment

// Cache settings
define('CACHE_DRIVER', 'memcached'); // Options: 'memcached' or 'redis'

// LDAP settings (if using LDAP authentication)
define('LDAP_ENABLED', false);
define('LDAP_HOST', 'ldap.example.com');
define('LDAP_BASE_DN', 'dc=example,dc=com');

// Other settings
define('APP_URL', 'http://localhost/hauk-location-sharing-service'); // Change to your server URL
?>