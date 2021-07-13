
<?php
include_once 'inc/connection.php';

$sql_entries = "SELECT * FROM contact";
$entries = $db->query($sql_entries);

$sql = "INSERT INTO contact(name, email, telephone, subject, message) VALUES (:name, :email, :phone, :subject, :message)";
$query = $db->prepare($sql);

if (isset($_POST['email']) && $_POST['email'] != '') {

    $valid = validEmail();

    if ($valid) {
        $query->bindParam(':email', $_POST['email']);

        $sanitized = sanitizeFields();

        if (!checkDuplicate($entries, $sanitized)) {
        
            $query->bindParam(':name', $sanitized[0]);
            $query->bindParam(':phone', $sanitized[1]);
            $query->bindParam(':subject', $sanitized[2]);
            $query->bindParam(':message', $sanitized[3]);
        
            $query->execute();

            echo '<script>success();</script>';
        } else return;

    } else {
        return;
    }

}

// Validate Email
function validEmail() {
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    

    //** THIS WAS THE API FOR CHECKING IF THE EMAIL EXISTED BY CHECKING THE DELIVERABILITY
    //*  I NOW GET AN ERROR WITH THE BILLING THAT STOPS ANY NEW DATA BEING SAVED.
    //*  UN-COMMENTING THE BELOW WILL GENERATE THE ERROR. */

    // $api_key = "5e7afa2dfd7e402b9d30f6c5854a8c10";
    
    // $ch = curl_init();
    
    // curl_setopt_array($ch, [
    //     CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1/?api_key=$api_key&email=$email",
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_FOLLOWLOCATION => true
    // ]);
    
    // $response = curl_exec($ch);
    
    // curl_close($ch);
    
    // $data = json_decode($response, true);

    // var_dump($data);
    // die;

    // if (isset($data["deliverability"])) {
    //     if ($data["deliverability"] === "UNDELIVERABLE") {
    //         return false;
    //     }
    // } else {
    //     return false;
    // }
    

    // Return true if valid and exists
    return true;
}

function sanitizeFields() {
    $input = array();
    $input[] = $_POST['name'];
    $input[] = $_POST['telephone'];
    $input[] = $_POST['subject'];
    $input[] = $_POST['message'];

    $output = array();
    
    foreach ($input as $field) {
        $output[] = filter_var($field, FILTER_SANITIZE_STRING);
    }

    return $output;
}

function checkDuplicate($exists, $new = []) {

    foreach ($exists as $exist) {
        if ($exist['name'] === $new[0] && 
            $exist['email'] === $_POST['email'] && 
            $exist['telephone'] === $new[1] &&
            $exist['subject'] === $new[2] && 
            $exist['message'] === $new[3]) {
                echo '<script>alreadyExists();</script>';
                return true;
        }
    }

    return false;
}
