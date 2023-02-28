

<html>
    <body>
        <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    FIRSTNAME: <input type="text" name="fname" id="">
Lastname: <input type="text" name="lname">
<input type="submit">

</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];

    if(empty($fname) || empty($lname)){
        echo "Data is required";

    }else {
        echo $fname ; 
        echo $lname;
    }

}
?>
    </body>
</html>


