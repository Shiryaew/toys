        <div>
          <table class="agent table">
            <?php
	        require("ini.php");
	        $query="SELECT Title, (SELECT Title FROM agenttype WHERE agenttype.ID=agent.AgentTypeID) AS agenttype, Address, INN, KPP, DirectorName, Phone, Email, Priority, Logo FROM agent";
            $res=mysqli_query($link,$query);
        	while ($row=mysqli_fetch_array($res)) {
			echo "<tr>";
			echo "<td>".$row['Title']."</td><td>".$row["agenttype"]."</td><td>".$row["Address"]."</td><td>".$row["INN"]."</td><td>".$row["KPP"]."</td><td>".$row["DirectorName"]."</td><td>".$row["Phone"]."</td><td>".$row["Email"]."</td><td>".$row["Priority"]."</td><td><img src=\"".$row["Logo"]."\"></td>";
				echo "</tr>";
				};
				?>
				</table>
				</div>