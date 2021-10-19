<?php

use CowSay\Cow;

require 'vendor/autoload.php';

$bessie = new Cow('Hello, Farm!');

$bessie->setTongue('U');
// or just echo the object for direct output
echo $bessie;