<?php

// Entry point for Azure App Service deployments.
// Redirects to the Laravel public index so App Service serves the app without extra config.
require __DIR__ . '/public/index.php';
