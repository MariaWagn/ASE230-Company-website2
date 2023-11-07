<?php
require_once('awards.php');
$award1=new Awards();
$award1->name='2022';
$award1->desc='Awarded "Green Innovator of the Year" by Eco Warrior Digest in 2022';
$award1->display();

$award2=new Awards();
$award2->name='2021';
$award2->desc='GreenRoof™ installations have increased urban green spaces by 150% in cities like Seattle and Austin.';
$award2->display();

$award2=new Awards();
$award2->name='2021';
$award2->desc='Partnered with UNICEF to implement PureStream Filters™ in areas suffering from water scarcity.';
$award2->display();

$award2=new Awards();
$award2->name='2021';
$award2->desc='TerraCharge™ pathways have been adopted by 20 major city parks globally, reducing their carbon footprint';
$award2->display();
