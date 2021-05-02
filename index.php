<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script type="text/javascript">

        var xhttp; 

        if (window.XMLHttpRequest){
            xhttp = new XMLHttpRequest(); 
            //újabb böngészőkhöz
        }
        else{
            xhttp = new ActiveXObject('Microsoft.XMLHTTP');
            //régebbi böngészőkhöz
        }

        console.log("1");

        xhttp.open("GET", "text.txt?ido=<? time() ?>", true); 
        //aszinkron metódust használunk a true-val, cache kiiktatásával
        
        xhttp.onreadystatechange = function() {
            //ha az állapota az objektumnak megváltozott
            if (this.readyState == 4) {
                //ha sikerül a beolvasás
                document.getElementById("textcontent").innerHTML=this.responseText;
                //válaszsszöveget megkapjuk
                console.log("3");
            }
        };

        console.log("2");

        xhttp.send(null); 
        //elindítjuk a kapcsolatot

    </script>

    <div id="textcontent">

    </div>
</body>

</html>