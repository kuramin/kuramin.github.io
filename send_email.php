<!DOCTYPE HTML>
<html>  
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            min-width: 175px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<?php
// way of definition of queries to database depends on type of request
// when a GET request from front-end is received, back-end sends 2 queries to corresponding table of the database:
    // query_headers asks for the names of the columns of the table
    // query_data asks for contents of the table
// else when a POST request from front-end is received, back-end sends 1 query to corresponding table of the database
//if ($_SERVER['HTTP_REFERER']=='https://whispering-hollows-61635.herokuapp.com/send_db_query.html') {
    /*if ($_SERVER['REQUEST_METHOD']=='GET') { // GET is used for show-the-whole-table queries		
        $query_data = $_REQUEST['message'];
        $result_data = pg_query($query_data) or die('Users query failed: ' . pg_last_error()); // result_data contains table data itself    

        // take name of the required table from show-the-whole-table query and use it to request column names
        $parsed_query = explode(' ', $query_data);
        $from_index = array_search("FROM",$parsed_query);
        $table_name = $parsed_query[$from_index + 1];

        // define query_headers and receive result_headers	
        $query_headers = "SELECT column_name FROM information_schema.columns WHERE table_name = '" . $table_name . "';";
        $result_headers = pg_query($query_headers) or die('Show columns query failed: ' . pg_last_error()); // result_headers contains names of columns of the table

        // add lines to the html
        echo "<b>Table <i>" . $table_name . "</i></b><br><br>\n"; // add the table name in this case
        echo "<table>\n"; // table tag

        // create row of column names from result_headers
        echo "\t<tr>\n"; // row tag
        while ($line = pg_fetch_array($result_headers, null, PGSQL_NUM)) { // for every entry of result_headers
            echo "\t\t<th>$line[0]</th>\n"; // create a column name
        }
        echo "\t</tr>\n"; // close row tag
    } else { // POST is used for user-defined queries*/
        $query_data = file_get_contents('php://input');
        //$result_data = pg_query($query_data) or die('Users query failed: ' . pg_last_error()); // result_data contains table data itself
        echo "Response from backend"; // show constant text instead of a table name
    //}
//}

// create datarows from result_data (done for any type of request)
/*while ($line = pg_fetch_array($result_data, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
	echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";*/
	
// Closing connection
//pg_close($dbconn);

?>

</body>
</html>
