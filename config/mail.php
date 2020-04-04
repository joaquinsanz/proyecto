<?php

return [
    "driver" => "smtp",
    "host" => "smtp.mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "from@example.com",
        "name" => "Example"
    ),
    "username" => "9c0d015dac245c",
    "password" => "129880f5f02cd3",
    "sendmail" => "/usr/sbin/sendmail -bs"
];