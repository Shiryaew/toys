<!DOCTYPE html>
<html>
    <head>
        <title>Toys</title>
        <link href="../toys/resources/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
        <script src="../toys/resources/js/bootstrap.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
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
	                    require("agenttable.php");
				    ?>
		        </table>
		    </div>
        </div>
    </body>
</html>
