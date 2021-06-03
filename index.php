 <?php
if(isset($_GET['firstName'])){//data exist, how it
  //echo $_GET['firstName'] . ' ' . $_GET['lastName'];

echo '<pre>';
var_dump($_GET);
echo '</pre>';

}
else{//no data, show form
    echo '
    <form action="">
    First Name: <input type="text" name="firstName"/><br/>
    Last Name: <input type="text" name="lastName"/><br/>
    <input type="submit"/>
    </form>
    ';
}
?>
