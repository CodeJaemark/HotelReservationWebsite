<?php

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['get_general']))
{
    $q = "SELECT* FROM settings WHERE sr_no=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if (isset($_POST['upd_general'])) 
{
    $frm_data = filteration($_POST);
    $q = "UPDATE settings SET site_title=?, site_about=? WHERE sr_no=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');
    echo $res;
}

if (isset($_POST['upd_shutdown'])) 
{
    $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE settings SET shutdown=? WHERE sr_no=?";
    $values = [$frm_data, 1]; // Assuming 1 is the sr_no value; replace it with the actual value if needed
    $res = update($q, $values, 'ii'); // Assuming 'shutdown' column is an integer; adjust the 'ii' if needed
    echo $res;
}

if (isset($_POST['get_contacts']))
{
    $q = "SELECT* FROM contact_details WHERE sr_no=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if (isset($_POST['upd_contacts'])) 
{
    $frm_data = filteration($_POST);
    $q = "UPDATE contact_details SET address=?, gmap=?, pn1=?, pn2=?, email=?, iframe=? WHERE sr_no=?";
    $values = [$frm_data['address'], $frm_data['gmap'], $frm_data['pn1'], $frm_data['pn2'], $frm_data['email'], $frm_data['iframe'], 1];
    $res = update($q, $values, 'ssssssi');
    echo $res;
}



?>


