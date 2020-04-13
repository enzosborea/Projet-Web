<?php

 $pdo = new PDO("mysql:host=localhost:8890;dbname=wamingo", "wamingo", "hcybhtb0ajfmWaWS");

 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);