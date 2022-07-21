<!DOCTYPE html>
<html>
    <head>
        <title>Chander</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Exo+2:200i);
        :root {
        /* Base font size */
        font-size: 10px;   
        
        /* Set neon color */
        --neon-text-color: rgb(183, 0, 255);
        --neon-border-color: #08f;
        }

        body {
        font-family: 'Exo 2', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;  
        background: #000;
        min-height: 100vh;
        }

        h1 {
        font-size: 13rem;
        font-weight: 200;
        font-style: italic;
        color: #fff;
        padding: 4rem 6rem 5.5rem;
        border-radius: 2rem;
        text-transform: uppercase;
        animation: flicker 1.5s infinite alternate;     
        }

        h1::-moz-selection {
        background-color: var(--neon-border-color);
        color: var(--neon-text-color);
        }

        h1::selection {
        background-color: var(--neon-border-color);
        color: var(--neon-text-color);
        }

        h1:focus {
        outline: none;
        }

        /* Animate neon flicker */
        @keyframes flicker {
            
            0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {
            
                text-shadow:
                    -0.2rem -0.2rem 1rem #fff,
                    0.2rem 0.2rem 1rem #fff,
                    0 0 2rem var(--neon-text-color),
                    0 0 4rem var(--neon-text-color),
                    0 0 6rem var(--neon-text-color),
                    0 0 8rem var(--neon-text-color),
                    0 0 10rem var(--neon-text-color);        
            }
            
            20%, 24%, 55% {        
                text-shadow: none;
            }    
        }
    </style>
    </head>
    <body>
        <h1>Terima Kasih<br><a href="pesanan.php">Daftar Pesanan</a></h1>
    </body>
</html>
<?php
    $pickup = $_POST['pickup'];
    $return = $_POST['return'];
    $mobil = $_POST['mobil'];
    $nama = $_POST['nama'];
    $jk = $_POST['kelamin'];
    $alamat = $_POST['alamat'];

    echo "<head><title>Reservasi Online</head></title>";
    $fp = fopen("data.txt","a+");
    fputs($fp,"$mobil|$nama|$jk|$pickup|$return|$alamat\n");
    fclose($fp);
?>