<?php require '../includes/header.php';

use Twilio\Rest\Client;

 $client = new client($config['account_sid'],$config['auth_token']);

 $_SESSION['code'] = $code = uniqid();

 $query = "insert into codes (verification_code) values('{$code}')";
 mysqli_query($connection,$query);

                $client->messages->create(
                    
                "+212631992448",
                
                [
                    'from' => $config['phonenumber'], 
                    'body' => $code
                ] 
            
                );


                echo "<h3 class='text-center bg-success'>Message has been sent</h3>";



 require '../includes/footer.php'?>