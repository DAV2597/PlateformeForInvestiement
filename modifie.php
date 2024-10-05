
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
            background-color: aliceblue;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100%;
        }
        .mon-container{
            background-color: gray;
            border-radius: 8px;
            padding: 20px;
        }
        .mon-profil{
            background-color: aliceblue;
            height: 200px;
            width: 200px;
            border-radius: 50%;
            text-align: center;
        }
        .mon-profil img{
            height: 100%;
            width: 100%;
            border-radius: 50%;
            object-fit: cover;
        }
        input[type="file"]{
            display: none;
        }
        .btn{
            background-color: rgb(8, 8, 73);
            padding: 10px;
            justify-content: center;
            color: white;
            border: none;
            border-radius: 4px;
            margin-left: 18px;
        }

    </style>
</head>
<body>
    <h2>VOUS DEVEZ LE MODIFIER A TOUT MOMENT</h2>
    <div class="mon-container">
        <h2>Changer votre profil</h2>
        <div class="mon-profil">
            <img src=""  alt="photo de profil" id="image">
        </div>

        <label for="IDE" class="btn">Changer votre profil</label>
        <input type="file" id="IDE">

        <script>
            const image=document.getElementById("image");
            const input=document.getElementById("IDE");

            input.addEventListener('change',(event)=>{
                const file=event.target.files[0];
                const execution=new FileReader();

                execution.onload =(e)=>{
                    image.src=e.target.result;
                }
                execution.readAsDataURL(file)
            })
        </script>
    </div>
</body>
</html>