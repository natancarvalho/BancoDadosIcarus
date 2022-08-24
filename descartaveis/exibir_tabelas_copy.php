<?php
require "conectar.php";

//Function to generate a HTML table from a SQL query
$sql = "SELECT * FROM tb_Fornecedores";

function myTable($strcon2,$sql)
{
    $rsResult = mysqli_query($strcon2, $sql) or die(mysqli_error($strcon2));
    if(mysqli_num_rows($rsResult)>0)
    {
        //We start with header. >>>Here we retrieve the field names<<<
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"0\"><tr align=\"center\" bgcolor=\"#CCCCCC\">";
        $i = 0;
        while ($i < mysqli_num_fields($rsResult)){
           $field = mysqli_fetch_field_direct($rsResult, $i);
           $fieldName=$field->name;
           echo "<td><strong>$fieldName</strong></td>";
           $i = $i + 1;
        }
        echo "</tr>"; 
        //>>>Field names retrieved<<<

        //We dump info
        $bolWhite=true;
        while ($row = mysqli_fetch_assoc($rsResult)) {
            echo $bolWhite ? "<tr bgcolor=\"#CCCCCC\">" : "<tr bgcolor=\"#FFF\">";
            $bolWhite=!$bolWhite;
            foreach($row as $data) {
                echo "<td>$data</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

return myTable($strcon2,$sql);