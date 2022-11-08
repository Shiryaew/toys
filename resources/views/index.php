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
                box-shadow: 0 5px 5px gray;
            }
            
            .header__name {
                color: white;
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
            

        </div>
    </body>
</html>
