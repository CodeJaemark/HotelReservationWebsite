<?php
require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');
require("vendor/autoload.php");
require("vendor/mailin-api/mailin-api-php/src/Sendinblue/Mailin.php");

// function send_mail($email, $name, $token){
//     include 'path/to/mailin-api/Mailin.php';

//     // Assuming you have a method like setSender in the Mailin class
//     $mailin = new Mailin('blessaoren@gmail.com', '5RckjfHrCnmMsqAh');
//     $mailin->setSender('blessaoren@gmail.com', 'Blessa Angela Oren')
//            ->setReplyTo('blessaoren@gmail.com', 'Blessa Angela Oren')
//            ->setSubject('Account Verification Link')
//            ->setText('Hello')
//            ->setHtml('<strong>Hello</strong>');

//     $res = $mailin->send();
//     /**
//     Successful send message will be returned in this format:
//     {'result' => true, 'message' => 'Email sent'}
//     */
// }

if (isset($_POST['register'])) {
    $data = filteration($_POST);

    if (isset($data['pass']) && $data['pass'] !== $data['cpass']) {
        echo 'pass_mismatch';
        exit;
    }

    $u_exist = select("SELECT * FROM user_cred WHERE email=? OR phonenum=?", [$data['email'], $data['phonenum']], "ss");

    $num_rows = mysqli_num_rows($u_exist);

    if ($num_rows > 0) {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
        exit;
    }

    $query = "INSERT INTO user_cred(id, name, email, address, phonenum, pincode, dob, password) VALUES (?,?,?,?,?,?,?,?)";

    $values = [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['pincode'], $data['dob'], $data['password']];

    if (insert($query, $values, 'ssssssss')) {
        echo 1;
    } else {
        echo 'ins_failed';
    }
}
?>
