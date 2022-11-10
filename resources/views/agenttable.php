<?php
	$query="SELECT ID, Title, (SELECT Title FROM agenttype WHERE agenttype.ID=agent.AgentTypeID) AS agenttype, Address, INN, KPP, DirectorName, Phone, Email, Priority, Logo FROM agent ORDER BY Priority desc";
    $res=mysqli_query($link,$query);
    while ($row=mysqli_fetch_array($res)) {
		echo "<tr>";
            echo "<td>";
				if (file_exists("../toys/resources/images".$row['Logo'])) {
					echo "<img class=\"logo\" src=\"../toys/resources/images".$row['Logo']."\"/>";
				} else {
					echo " ";
				}
			echo "</td>
            <td><div><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#".$row['ID']."\"><span class=\"agent_type\">".$row['agenttype']."</span> ".$row['Title']."</button></div>
                <div class=\"modal fade\" id=\"".$row['ID']."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
        					<div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
                                    if (file_exists("../toys/resources/images".$row['Logo'])) {
                                    echo "<img class=\"logo\" src=\"../toys/resources/images".$row['Logo']."\"/>";
                                    } else {
                                    echo " ";
                                    }
                                echo "<span class=\"agent_type\">".$row['agenttype']."</span> ".$row['Title']." Приоритет: ".$row['Priority']."</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
					                <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
						    <div class=\"modal-body\">
                                <table class=\"inmodal-table\">
						            <tr><td>ИНН ".$row['INN']." / КПП ".$row['KPP']."</td></tr>
						            <tr><td>Директор: ".$row['DirectorName']."</td></tr>
						            <tr><td>Телефон: ".$row['Phone']." E-mail: ".$row['Email']."</td></tr>
						            <tr><td> Адрес: ".$row['Address']."</td></tr>
                                </table>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td>".$row['Priority']."</td>";
        echo "</tr>";
        }        
?>