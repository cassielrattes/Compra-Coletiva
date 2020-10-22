<?php
session_start();
session_destroy();
header("Location: /compra_coletiva/");
