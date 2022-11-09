<!DOCTYPE html>
<html>
    <head>
        <title>Toys</title>
        <style>
            html {
                height: 100%;
                width: 100%;
            }
            body {
                margin: 0;
                height: 200%;
                width: 100%;
                background-color: lightgray;
            }
            .header {
                position: sticky;
                top: 0;
                width: 100%;
                height: 80px;
                background-color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 5px 5px gray;
            }
            
            .header__name {
                color: black;
                font-size: 36px;

            }
            .btn {
                margin: 10px;
                margin-bottom: 0;
            }
            .btn__container {
                height: 100%;
                border: 1px solid;
                display: flex;
                width: 200px;
                flex-direction: column;
                background-color: white;
            }

            .central_container {
                display: flex;
                flex-direction: column;
                margin: 220px;
                width: 800px;
            }

            .agent table td {
                padding: 5px;
            }

            .agent_type {
                text-transform: uppercase;
            }

            .logo {
                height: 25px;
                width: 25px;
            }
            

        </style>
    </head>
    <body>
        <div class="header">
            <div class="header__name">
                Производство детских игрушек
            </div>

        </div>
        <div class="btn__container">
            <button class="btn btn__first">
                <div>
                    Первая кнопка
                </div>
            </button>
            <button class="btn btn__second">
                <div>
                    Вторая кнопка
                </div>
            </button>

        </div>
    <div class="central_container">
        <div class="agent table">
            <table>
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
				</table>
				</div>
            </div>
    </body>
</html>
