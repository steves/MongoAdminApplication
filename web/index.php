<?php

require_once __DIR__ . '/../application/MongoAdminKernel.php';

$kernel = new MongoAdminKernel('prod', true);
$kernel->handle()->send();