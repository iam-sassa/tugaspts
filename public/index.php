<?php

use OOP\App\Controller\AdminController;
use OOP\App\Controller\CollaborationController;
use OOP\App\Controller\ClientController;
use OOP\App\Controller\BranchController;
use OOP\App\Controller\ProgramsController;
use OOP\App\Controller\InvoiceController;
use OOP\App\Controller\BookingController;

use OOP\App\Core\Router;
use OOP\App\Middleware\Auth;
use OOP\App\Middleware\Guest;


require_once __DIR__ . '/../vendor/autoload.php';
session_start();

Router::addRoute('GET', '/showadmin', AdminController::class, 'index', []);
Router::addRoute('GET', '/addadmin', AdminController::class, 'add', []);
Router::addRoute('GET', '/updateadmin/:id', AdminController::class, 'update', []);
Router::addRoute('GET', '/deleteadmin/:id', AdminController::class, 'delete', []);


Router::addRoute('GET', '/showcollaboration', CollaborationController::class, 'index', []);
Router::addRoute('GET', '/addcollaboration', CollaborationController::class, 'add', []);
Router::addRoute('GET', '/updatecollaboration/:id', CollaborationController::class, 'update', []);
Router::addRoute('GET', '/deletecollaboration/:id', CollaborationController::class, 'delete', []);

Router::addRoute('GET', '/showclient', ClientController::class, 'index', []);
Router::addRoute('GET', '/addclient', ClientController::class, 'add', []);
Router::addRoute('GET', '/updateclient/:id', ClientController::class, 'update', []);
Router::addRoute('GET', '/deleteclient/:id', ClientController::class, 'delete', []);

Router::addRoute('GET', '/showbranch', BranchController::class, 'index', []);
Router::addRoute('GET', '/addbranch', BranchController::class, 'add', []);
Router::addRoute('GET', '/updatebranch/:id', BranchController::class, 'update', []);
Router::addRoute('GET', '/deletebranch/:id', BranchController::class, 'delete', []);

Router::addRoute('GET', '/showprograms', ProgramsController::class, 'index', []);
Router::addRoute('GET', '/addprograms', ProgramsController::class, 'add', []);
Router::addRoute('GET', '/updateprograms/:id', ProgramsController::class, 'update', []);
Router::addRoute('GET', '/deleteprograms/:id', ProgramsController::class, 'delete', []);

Router::addRoute('GET', '/showbooked', BookingController::class, 'index', []);
Router::addRoute('GET', '/addbooked', BookingController::class, 'add', []);
Router::addRoute('GET', '/updatebooked/:id', BookingController::class, 'update', []);
Router::addRoute('GET', '/deletebooked/:id', BookingController::class, 'delete', []);

Router::addRoute('GET', '/showinvoice/:id', InvoiceController::class, 'index', []);
Router::addRoute('GET', '/addinvoice', InvoiceController::class, 'add', []);

Router::run();