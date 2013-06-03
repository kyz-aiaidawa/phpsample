<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        $conn = mysql_connect("localhost", "****","*******");
        if($conn == flase){
            die("Mysql connection error");
        }
        mysql_set_charset("utf8");
        mysql_select_db("*******");
        $sql ="select * from restaurant";
        $res = mysql_query($sql);
        if($res == false){
            die("query error.");
        }
        print("<table>");
        print("<tr>");
        print("<th> Address");
        print("</th>");
        print("<th> Name");
        print("</th>");
        print("<th> Price");
        print("</th>");
        print("</tr>\n");
        while($row = mysql_fetch_array($res)){
            print("<tr>");
            print("<td>" . $row[address] . "</td>");
            print("<td>" . $row[name] . "</td>");
            print("<td>" . $row[price] . "</td>");
            print("</tr>\n");
            
        }
         print("</table>");
        echo 'connected.';
        mysql_close();
        
        ?>
    </body>
</html>
