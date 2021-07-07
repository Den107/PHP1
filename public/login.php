<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "db.php";
include_once ENGINE_DIR . "base.php";
include_once ENGINE_DIR . "user.php";
session_start();

include_once ENGINE_DIR . "login.php";
include_once VIEWS_DIR . "login/login.php";
