<?php 
session_start();

$url = "http://localhost/front-end/";

$server = new mysqli(
     "localhost",
     "root",
     "",
     "x_store"
);