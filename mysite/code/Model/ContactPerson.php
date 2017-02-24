<?php
/**
 * Created by PhpStorm.
 * User: JLx_F
 * Date: 22.02.2017
 * Time: 19:54
 */
class ContactPerson extends DataObject{

    private static $db = array(
        'LastName' => 'Varchar(255)',
        'FirstName' => 'Varchar(255)',
        'Phone' => 'Varchar(255)',
        'Email' => 'Varchar(255)'
    );

    private static $has_many = array(
        'Phonesession' => 'Phonesession'
    );
}