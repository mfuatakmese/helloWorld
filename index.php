<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'HelloWorld.php';

$hello = new HelloWorld();

$hello->setHi('Selamun Aleykum');
echo $hello->getHi();
