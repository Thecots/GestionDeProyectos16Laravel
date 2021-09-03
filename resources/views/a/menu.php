<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        width: 100%;
        height: 100vh;
        background-color: #00DBDE;
        background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);

        background-repeat: no-repeat;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;

        font-family: sans-serif;

    }

    .box{
        width: 450px;
        height: auto;
        padding: 10px;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0 0 5px #0000005e;
        display: flex;
        flex-direction: column;

        margin: 10% 0;
        
    }
        .box h2{
            text-align: center;
            padding: 10px 0;
        }
        .box a{
            width: 100%;
            margin: 5px 0;
            padding: 5px 0;
            box-sizing: border-box;
            text-decoration: none;
            color: black;
            border-radius: 5px;
            transition: all 0.1s ease-in;
        }
            .box a:hover{
                background: #00001114;
            }

</style>
<body>
    <div class="box">
    <h2>MENU</h2>
    <a href="projectes">Projectes</a>
    <a href="tasques">tasques</a>
    <a href="fases">fases</a>
    <a href="usuaris">usuaris</a>
    <a href="fases">fases</a>
    </div>
</body>
</html>