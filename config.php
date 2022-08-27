<?php
$user = 'epiz_32465712';
$password = 'u9c2qw0LsIp';
$db = 'epiz_32465712_medObtain';
$server = 'sql212.epizy.com';

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn){
    echo "Connection Error:". mysqli_connect_error();
}
else{
    ?>
    <script>
        console.log('connection established!');
    </script>
    <?php
}

?>