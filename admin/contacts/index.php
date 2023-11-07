<?php
require_once('contacts.php');
$contacts1=new Contacts();
$contacts1->name='Amy McKie';
$contacts1->email='AmyAMcKie@gmail.com';
$contacts1->subject='Question about product';
$contacts1->message='Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet nulla facilisi morbi tempus iaculis urna id volutpat lacus. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus.';
$contacts1->display();

$contacts2=new Contacts();
$contacts2->name='Christopher R. Townsend';
$contacts2->email='ChrisRTown@gmail.com';
$contacts2->subject='Question about product';
$contacts2->message='Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet nulla facilisi morbi tempus iaculis urna id volutpat lacus. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus.';
$contacts2->display();
