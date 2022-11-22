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
                height: 100px;
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

            .agent table {
                margin: 220px;
                width: 800px;
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
        <div class="agent table">
            <table>
            <?php
	        require("ini.php");
	        $query="SELECT Title, (SELECT Title FROM agenttype WHERE agenttype.ID=agent.AgentTypeID) AS agenttype, Address, INN, KPP, DirectorName, Phone, Email, Priority, Logo FROM agent";
            $res=mysqli_query($link,$query);
        	while ($row=mysqli_fetch_array($res)) {
			echo "<tr>";
			echo "<td><img src=\"".$row["Logo"]."\"></td><td>".$row['Title']."</td><td>".$row["agenttype"]."</td><td>".$row["Address"]."</td><td>".$row["INN"]."</td><td>".$row["KPP"]."</td><td>".$row["DirectorName"]."</td><td>".$row["Phone"]."</td><td>".$row["Email"]."</td><td>".$row["Priority"]."</td>";
				echo "</tr>";
				};
				?>
				</table>
				</div>    
    </body>
</html>
