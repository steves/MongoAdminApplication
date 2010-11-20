<?php

require_once __DIR__ . '/../application/MongoAdminKernel.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new MongoAdminKernel('prod', true);
$kernel->handle(new Request())->send();