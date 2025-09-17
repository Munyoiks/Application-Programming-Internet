<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'Ian Munyoike',
    'mail_from' => 'ian.kariuki@strathmore.edu',
    'name_to' => 'Vincent Gathuci',
    'mail_to' => 'ianmunyoiks@gmail.com',
    'subject' => 'Greetings from Munyoiks@Inc',
    'body' => 'Welcome to <b>Munyoiks@Inc</b>! This is a new Career Growth opportunity.'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);