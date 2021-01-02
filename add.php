<?php

function redirect_to($new_location) {

    header("location:". $new_location);
    exit;
}
    redirect_to("add.php")

<?php

require './conenction.php';
$add = mysqli_query($con, "insert into `emp` (`login_id`, `name`,'mobile number','address') VALUES ('123@gmail.com','john',1234567892,'delhi')");
print_r($add);
exit;
?>