<?php
// index.php - Main entry point for the Hauk location sharing service

// Load configuration
require_once __DIR__ . '/config/config.php';

// Initialize the server
$server = new Server($config);

// Handle incoming requests
$server->handleRequests();