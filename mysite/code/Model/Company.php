<?php
/**
 * Created by PhpStorm.
 * User: JLx_F
 * Date: 22.02.2017
 * Time: 19:00
 */
class Company extends DataObject{

    private static $db = array(
        'Name' => 'Varchar(255)',
        'Description' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Phone' => 'Varchar(255)'
    );

    private static $has_many = array(
        'User' => 'User'
    );
}
