<?php


$config = \OC::$server->getConfig();
$dbConnection = \OC::$server->getDatabaseConnection();
$userManager = OC::$server->getUserManager();
$config = \OC::$server->getConfig();

/** @var Symfony\Component\Console\Application $application */
$application->add(new AddMailAcount($userManager, $dbConnection, $config));
