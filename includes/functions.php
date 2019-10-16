<?php

//TODO apology (something has gone wrong)
function sorry($message){
  return 1; //placeholder
}
// build the requested page
function build($template, $params =[]){
  //get parameters
  extract($params);
  //get header
  require(HOME."/templates/header.php");
  //get body
  require(HOME."/templates/$template");
  //get footer
  require(HOME."/templates/footer.php");

}

//TODO dump variable contents to browser (debug feature)

//TODO login and logout

//TODO connect to database
function db_connect(){
    $connection =  mysqli_connect (SERVER,USERNAME,PASSWORD,DATABASE)
                   or die ("message");
    return $connection;
}

//TODO check user permissions

//TODO SQL update
function update_query($cxn,$query){
    if  (mysqli_query($cxn, $query)) {
        //echo "Record updated successfully";

    } else {
        return mysqli_error($cxn);
    }
    return 1;
}



//TODO sanitize input
function san($str){
   $str = trim($str);
   $str = addslashes($str);
   return $str;
}
//TODO validate current session

?>
