<?php
ini_set('display_errors', '1');  

require('model/model.php');
require('dbConnection.php');
$conn = mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE);

// $plaintext = "message to be encrypted";
// $cipher = "aes-128-gcm";

// if (in_array($cipher, openssl_get_cipher_methods()))
// {
// 	$key = openssl_random_pseudo_bytes(128);
//     $ivlen = openssl_cipher_iv_length($cipher);
//     $iv = openssl_random_pseudo_bytes($ivlen);
//     $ciphertext = openssl_encrypt($plaintext, $cipher, $key);
//     echo $ciphertext;
//     //store $cipher, $iv, and $tag for decryption later
    
// }else{
// 	echo "0";
// }
// $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key);
//     echo $original_plaintext."\n";
// echo json_encode($data);

// $pId=1000;
// $eveID = 1;
// $ownerQ = "owner1 = $pId || owner2 = $pId || owner3 = $pId || owner4 = $pId";
//         $sql = "SELECT code FROM Events E1 
//             WHERE 
//                 eveId = $eveID AND (
//                     ". $ownerQ ." || (
//                         SELECT count(*) from Events where eveId = E1.code AND (".$ownerQ.") 
//                     ) 
//                 )";

        echo json_encode( People::getUser(1000,$conn));