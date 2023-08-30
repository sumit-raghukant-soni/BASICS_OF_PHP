<html>

<form action="">
    <input type="text" name="Name" id="">
    <input type="submit" value="Name" name="sub">
</form>

</html>

<?php
if(isset($_REQUEST['sub'])){
    $nm = $_REQUEST['Name'];    
    $url = "http://localhost/php%20programs/Json/Practical_09/Rest_API.php?q=" . $nm;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    $response = json_decode($response, true);

    // var_dump($response);
    echo $response;

    curl_close($ch);
}

?>