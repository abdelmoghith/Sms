<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;
use Twilio\Rest\Client;

require __DIR__ . "/vendor/autoload.php";

$number = $_POST["number"];
$message = $_POST["message"];
$Personne = $_POST["personne"];


    $base_url = "mmz8p2.api.infobip.com";
    $api_key = "c7576fd252789a5e4b4d86ffeb29d5a9-f4aca352-4392-4d91-a04b-9eafe6445123";

    $configuration = new Configuration(host: $base_url, apiKey: $api_key);

    $api = new SmsApi(config: $configuration);

    $destination = new SmsDestination(to: $number);

    $message = new SmsTextualMessage(
        destinations: [$destination],
        text: $message,
        from: $Personne,
    );

    $request = new SmsAdvancedTextualRequest(messages: [$message]);

    $response = $api->sendSmsMessage($request);



// } else {   // Twilio

//     $account_id = "your account SID";
//     $auth_token = "your auth token";

//     $client = new Client($account_id, $auth_token);

//     $twilio_number = "+ your outgoing Twilio phone number";

//     $client->messages->create(
//         $number,
//         [
//             "from" => $twilio_number,
//             "body" => $message
//         ]
//     );

// }

echo "Message sent.";

?>