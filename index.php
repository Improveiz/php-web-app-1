 <?php
if(isset($_GET['firstName'])){//data exist, how it
  echo $_GET['firstName'];
}
else{//no data, show form
    echo '
    <form action="">
    First Name: <input type="text" name="firstName"/><br/>
    <input type="submit"/>
    </form>
    ';
}
?>