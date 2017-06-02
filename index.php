<?php

require 'vendor/autoload.php';

Flight::route('GET /', function(){
  Flight::render('home');
});

Flight::route('/products', function(){
  Flight::render('products');
});

Flight::route('GET /contact', function(){
  Flight::render('contact');
});

Flight::route('POST /contact', function(){
  // Flight::render('contact');
  echo "Sent Contact Form";
});

Flight::route('GET /register', function(){
  Flight::render('register');
});

Flight::route('POST /register', function(){
  // Flight::render('register');
  echo "Register Form Sent";
});

Flight::route('GET /login', function(){
  Flight::render('login');
});

Flight::route('POST /login', function(){
  // Flight::render('login');
  echo "Login Form Sent";
});

Flight::route('/checkout', function(){
  Flight::render('checkout');
});

Flight::route('/single', function(){
  Flight::render('single');
});

Flight::start();
