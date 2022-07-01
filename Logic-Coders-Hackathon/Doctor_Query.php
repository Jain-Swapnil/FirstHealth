<html>
    <body>
<!--
    <form action="Doctor_Query.php" method="post"><b>
        Do you wish to view the queries?<br>
        Yes  <input type="radio" name="choice" value="yes"> <br>
        No <input type="radio" name="choice" value="no"><br></b>
       <input type="submit" name="Done" value="Done">
    </form>
-->
<style>
    body{
        background-image:url('1.jpg');
    }
    button{
  background-color: #1a5ee8;
  color: white;
  margin: top 10px;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}
.a{
    color:white;
}
span{
    display:inline-block;
    padding:45px;
    border-radius:5px;
    box-shadow:0 0 5px 7px rgba(0,0,0,0.4);
    margin:10px;'
}
</style>

<?php
//if(isset($_POST["choice"]) && ($_POST["choice"]=="yes")){
    $conn=mysqli_connect("localhost","root","","logiccoders");
               if($conn){
                   echo "<center><b><h1>RECENT QUERIES</b></h1></center>";
               }
               else{
                   echo "Connection not established";
               }               
               

               $sql="select * from patient_query";
               $result=mysqli_query($conn,$sql);
               
               while($rows=mysqli_fetch_assoc($result)){
                $name=$rows['name'];
                $mailid=$rows['email'];
                $symptoms=$rows['symptoms'];
                $Description=$rows['description'];
                echo "<span>
                        <p><b>Name       :</b>$name </p>   
                        <p><b>Symptoms   :</b>$symptoms</p>
                        <p><b>Description:</b>$Description</p>
                        <p><b>Email ID   :</b><a id=$mailid> $mailid</a></p>
                        </span>
                        
                "
                ; 
                
               }
              //echo (<p onmouseover="document.getElementById('test').innerHTML=Date()">Hi</p>);
                //echo "<p id='test'></p>";
                //<a href=# ><button style='background-color:blue;border-radius:4px;color:white;padding:4px;' >Answer</button></a>             

?>
<br><br>
<center>
<form>
<button type="submit"><a href="response.html" class="a">Click Here For Replying To Patient's Queries</a></button>
</form>
    </body>
</html>