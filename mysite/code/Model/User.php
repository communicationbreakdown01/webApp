<?php
/**
 * Created by PhpStorm.
 * User: JLx_F
 * Date: 22.02.2017
 * Time: 17:17
 */

class User extends Member{

    private static $db = array(
        'LastName' => 'Varchar(255)',
        'FirstName' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Phone' => 'Varchar(255)'
    );

    private static $has_one = array(
        'Company' => 'Company'
    );

    private static $has_many = array(
        'Phonesession' => 'Phonesession',
    );
}
