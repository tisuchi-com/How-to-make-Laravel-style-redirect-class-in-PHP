<?php


//including required class
require_once('URL.php');



//redirecting to other page
URL::to('view/dhaka.php');



//creating HTML link
echo URL::link('view/dhaka.php', 'Dhaka');

