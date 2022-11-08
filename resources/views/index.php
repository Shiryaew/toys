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
            }
            .root {
                background-color: lightgray;
                height: 100%;
                width: 100%;
                overflow-y: auto;
                overflow-x: hidden;

            }
            .header {
                position: sticky;
                top: 0;
                width: 100%;
                height: 100px;
                background-color: gray;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .header__name {
                color: white;
                font-size: 36px;

            }

        </style>

        
    </head>
    <body>
        <div class="header">
            <div class="header__name">
                Производство детских игрушек
            </div>

        </div>
        <div class="root">
            

        </div>
    </body>
</html>
