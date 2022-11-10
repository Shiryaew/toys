<?php
	        require("ini.php");
	        $query="SELECT Title, (SELECT Title FROM agenttype WHERE agenttype.ID=agent.AgentTypeID) 
            AS agenttype, Address, INN, KPP, DirectorName, Phone, Email, Priority, Logo FROM agent 
            ORDER BY Priority desc";
            $res=mysqli_query($link,$query);
        	while ($row=mysqli_fetch_array($res)) {
			echo "<tr>";
                if (file_exists("../toys/resources/images".$row['Logo'])) {
        			echo "<td><img class=\"logo\" src=\"../toys/resources/images".$row['Logo']."\"/></td><td class=\"agent_type\">".$row['agenttype']."</td><td><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">".$row['Title']."</button></td><td>".$row['Priority']."</td>";
                } else {
                    echo "<td></td><td class=\"agent_type\">".$row['agenttype']."</td><td><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">".$row['Title']."</button></td><td>".$row['Priority']."</td>";            
                }                
                echo "</tr>";
			};
				?>