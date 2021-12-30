<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Email COnfiguration
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'email-smtp.ap-southeast-2.amazonaws.com';

// $config['smtp_port'] = 465;
// $config["smtp_crypto"] = "ssl";3

 $config['smtp_port'] = 587;
 $config["smtp_crypto"] = "tls";

$config['smtp_user'] = 'AKIA52YINMXWD2SSSQPJ';
$config['smtp_pass'] = 'BLzLNJFf7jouvELY3UBsmsCu/Z9RNrgnuyMYm7A/FEWI';
$config['mailtype'] = 'html';
$config['smtp_timeout'] = '500';

$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
defined('BASEPATH') OR exit('No direct script access allowed');