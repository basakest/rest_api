<?php
require('./Response.php');
$response = new Response();
$response->setSuccess(true);
$response->setHttpStatusCode(200);
$response->addMessage('success');
$response->send();