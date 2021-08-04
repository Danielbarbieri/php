<?php

session_start();

unset($_SESSION['autenticado']);

header('location: /');