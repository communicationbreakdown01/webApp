<?php
/**
 * Created by PhpStorm.
 * User: JLx_F
 * Date: 22.02.2017
 * Time: 16:59
 */

class Call extends Page{

}

class Call_Controller extends Page_Controller{

    private static $allowed_actions = array('CreateSession');


    public function CreateSession()
    {
        // Is a member logged in?
        if (Member::currentUserID()) {


            $fields = new FieldList(
                TextField::create('Title', 'Kurzer Titel für den Telefonanruf*'),
                TextareaField::create('Description', 'Beschreibung des Anrufs*'),
                DateField::create('Date', 'Datum*')->setConfig('dateformat', 'dd-MM-yyyy')->setConfig('showcalendar', true)->setConfig('showdropdown', true),
                TimeField::create('Time', 'Zeit*'),
                PhoneNumberField::create('Phone', 'Telefonnummer*')
                //CountryDropdownField::create('Phone', 'Telefonnummer*')
            );

            $actions = new FieldList(
                FormAction::create('doSession', 'Protokoll anlegen')
            );


            $requiredFields = new RequiredFields(array('Title', 'Description'));
            return new Form($this, 'CreateSession', $fields, $actions, $requiredFields);

        }

        else{
            echo 'uncool';
        }
    }
    public function doCompany($data, $form)
    {
        //Creating a new user message Record
        $newSession = new PhoneSession();
        if (isset($data['Name'])) {

            $newSession->Title = $data['Title'];
            $newSession->Description = $data['Description'];
            $newSession->Date = $data['Date'];
            $newSession->Phone = $data['Phone'];

        }


        $newSession->write();

        $form->sessionMessage('Eintrag wurde erfolgreich erstellt.', 'gut');
        return $this->redirectBack();
    }


}