<?php
require __DIR__.'/vendor/autoload.php';


$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addColumn('Ravi')
         ->addColumn('Ravi@gmail.com')
    ->addRow()
         ->addColumn('1002')
        ->addColumn('Chandan')
         ->addColumn('chandan@gmail.com')
    ->addRow()
         ->addColumn('1003')
        ->addColumn('Kundan')
         ->addColumn('Kundan@gmail.com')
    ->display()
;