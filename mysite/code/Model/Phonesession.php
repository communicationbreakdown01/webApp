<?php
/**
 * Created by PhpStorm.
 * User: JLx_F
 * Date: 22.02.2017
 * Time: 19:01
 */
class Phonesession extends DataObject{

    private static $db = array(
        'Title' => 'Varchar(255)',
        'Description' => 'Varchar(255)',
        'Date' => 'SS_Datetime',
        'Phone' => 'Varchar(255)'
    );

    private static $has_one = array(
        'User' => 'User',
        'ContactPerson' => 'Contactperson'
    );
}
