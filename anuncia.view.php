<?php
// Iniciar la sesion
session_start();
 
// Compruebe si el usuario ha iniciado sesión, si no, rediríjalo a la página de inicio de sesión
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

    <?php 
         include 'menu.html' ;
       ?>
<body>
<br><br><br>	<br><br><br><br><br><br>	
    <div class="page-header">
        <h1 style="color: black">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a nuestro sitio.</h1>       
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
        <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>

    </p>  
      <br>
<br><br><br><br><br>
<form action="anuncia.php" method="post" align="center">


<h1><b><u>   ANUNCIA TU COCHE</u></b></h1>
<br>
<h3><u><b>MARCA Y MODELO</b></u></h3>
    <select name="modelo" size=15 required>
        
            <optgroup label="*Abarth"> 
                    <option name="ab595">Abarth 595</option>
                    <option name="ab124">Abarth 124</option> 
            </optgroup> 

            <optgroup label="*Alfa Romeo"> 
                    <option name="afgiulicia">Alfa Romeo Giulia</option>
                    <option name="af4c">Alfa Romeo 4C</option> 
                    <option name="afgiulieta">Alfa Romeo Giulieta</option> 
                    <option name="afstelvio">Alfa Romeo Stelvio</option> 
                    <option name="afmito">Alfa Romeo Mito</option> 
            </optgroup> 
            <optgroup label="*Alpine"> 
                    <option name="ala110">A110</option>
            </optgroup> 
            <optgroup label="*Aston Martin"> 
                <option name="afgiulicia">Aston Martin DB9</option>
                <option name="afgiulicia">Aston Martin DBX</option>
                <option name="afgiulicia">Aston Martin DB11</option>
                <option name="afgiulicia">Aston Martin DBS Superleggera</option>
                <option name="af4c">Aston Martin Rapide</option> 
                <option name="afgiulicia">Aston Martin Valkyrie</option>
                <option name="afgiulieta">Aston Martin Vanquish</option> 
                <option name="afstelvio">Aston Martin Vantage</option> 
            </optgroup> 
            <optgroup label="*Audi"> 
                <option name="au1">Audi A1</option>
                <option name="au2">Audi A2</option>
                <option name="au3">Audi A3</option>
                <option name="au4">Audi A4</option>
                <option name="au5">Audi A5</option> 
                <option name="au6">Audi A6</option>
                <option name="au7">Audi A7</option> 
                <option name="au8">Audi A8</option> 
                <option name="auetron">Audi e-tron</option> 
                <option name="auetrongt">Audi e-tron Gt</option> 
                <option name="auq2">Audi Q2</option> 
                <option name="auq3">Audi Q3</option> 
                <option name="auq4">Audi Q4</option> 
                <option name="auq5">Audi Q5</option> 
                <option name="auq7">Audi Q7</option> 
                <option name="auq8">Audi Q8</option>
                <option name="autt">Audi TT</option> 
                <option name="auR8">Audi R8</option>  
            </optgroup> 
            <optgroup label="*Bentley"> 
                <option name="afgiulicia">Bentley ontinental GT Flying Spur </option>
                <option name="af4c">Bentley Flying Spur </option> 
                <option name="afgiulieta">Bentley Mulsanne</option> 
            </optgroup>
            <optgroup label="*BMW"> 
                <option name="au1">BMW Serie 1</option>
                <option name="au2">BMW Serie 2</option>
                <option name="au3">BMW Serie 3</option>
                <option name="au4">BMW Serie 4</option>
                <option name="au5">BMW Serie 5</option> 
                <option name="au6">BMW Serie 6</option>
                <option name="au7">BMW Serie 7</option> 
                <option name="au8">BMW Serie 8</option> 
                <option name="auetron">BMW X1</option> 
                <option name="auetrongt">BMW X2</option> 
                <option name="auq2">BMW X3</option> 
                <option name="auq3">BMW X4</option> 
                <option name="auq4">BMW X5</option> 
                <option name="auq5">BMW X6</option> 
                <option name="auq7">BMW X7</option> 
                <option name="auq8">BMW Z4</option>
                <option name="autt">BMW iX3</option> 
                <option name="autt">BMW i3</option> 
                <option name="autt">BMW i4</option> 
                <option name="auR8">BMW i8</option>  
            </optgroup>  
            <optgroup label="*Cadillac"> 
                <option name="afgiulicia">Cadillac ATS</option>
                <option name="afgiulicia">Cadillac CT6</option>
                <option name="afgiulicia">Cadillac CTS</option>
                <option name="afgiulicia">Cadillac Escalade</option>
                <option name="af4c">Cadillac SRX</option> 
                <option name="afgiulicia">Cadillac XT5</option>
            </optgroup> 
            <optgroup label="*Chevrolet"> 
                <option name="au1">Chevrolet Aveo</option>
                <option name="au2">Chevrolet Camaro</option>
                <option name="au3">Chevrolet Captiva</option>
                <option name="au4">Chevrolet Corvette</option>
                <option name="au5">Chevrolet Cruze</option> 
                <option name="au6">Chevrolet Malibu</option>
                <option name="au7">Chevrolet Orlando</option> 
                <option name="au8">Chevrolet Spark</option> 
                <option name="auetron">Chevrolet Trax</option> 
                <option name="auetrongt">Chevrolet Volt</option>   
            </optgroup> 
            <optgroup label="*Citroen"> 
                <option name="au1">Citroen Ami</option>
                <option name="au2">Citroen Berlingo</option>
                <option name="au3">Citroen C-Elysée</option>
                <option name="au4">Citroen C-Zero</option>
                <option name="au5">Citroen C1</option> 
                <option name="au6">Citroen C2</option>
                <option name="au7">Citroen C3</option> 
                <option name="au8">Citroen C3 Aircross</option> 
                <option name="auetron">Citroen C4</option> 
                <option name="auetrongt">Citroen C4 Aircross</option>
                <option name="au1">Citroen C4 Cactus</option>
                <option name="au2">Citroen C4 Picasso / C4 Spacetourer</option>
                <option name="au3">Citroen C5</option>
                <option name="au4">Citroen C5 Aircross</option>
                <option name="au5">Citroen C8</option> 
                <option name="au6">Citroen E-C4</option>
                <option name="au7">Citroen E-Jumpy</option> 
                <option name="au8">Citroen E-Mehari</option> 
                <option name="auetron">Citroen Jumper</option> 
                <option name="auetrongt">Citroen Jumpy</option>
                <option name="auetron">Citroen Nemo</option> 
                <option name="auetrongt">Citroen Spacetourer</option>      
            </optgroup>
            <optgroup label="*Cupra"> 
                <option name="au1">Cupra Ateca</option>
                <option name="au2">Cupra Born</option>
                <option name="au3">Cupra Formentor</option>
                <option name="au4">Cupra Ibiza</option>
                <option name="au5">Cupra Leon</option>  
            </optgroup> 
            <optgroup label="*Dacia"> 
                <option name="au1">Dacia Dokker</option>
                <option name="au2">Dacia Duster</option>
                <option name="au3">Dacia Lodgy</option>
                <option name="au4">Dacia Logan</option>
                <option name="au5">Dacia Sandero</option>  
                <option name="au5">Dacia Spring</option> 
            </optgroup> 
            <optgroup label="*Ds"> 
                <option name="au1">Ds 3</option>
                <option name="au2">Ds 4 Crossback</option>
                <option name="au3">Ds 5</option>
                <option name="au4">Ds 7 Crossback</option>
                <option name="au5">Ds 9</option>  
               
            </optgroup> 
            <optgroup label="*Ferrari"> 
                <option name="au1">Ferrari 458</option>
                <option name="au2">Ferrari 488 GTB</option>
                <option name="au3">Ferrari 812 GTS</option>
                <option name="au4">Ferrari 812 Superfast</option>
                <option name="au5">Ferrari California T</option> 
                <option name="au6">Ferrari F12 Berlinetta</option>
                <option name="au7">Ferrari F8 Spider</option> 
                <option name="au8">Ferrari FF</option> 
                <option name="auetron">Chevrolet LaFerrari</option> 
                <option name="auetrongt">Chevrolet Testarrosa</option>   
            </optgroup> 
            <optgroup label="*Fiat"> 
                <option name="au1">Fiat 500</option>
                <option name="au2">Fiat 500X</option>
                <option name="au3">Fiat Bravo</option>
                <option name="au4">Fiat Doblo</option>
                <option name="au5">Fiat Fullback</option> 
                <option name="au6">Fiat Panda</option>
                <option name="au7">Fiat Punto</option> 
                <option name="au8">Fiat Tipo</option>  
            </optgroup> 
            <optgroup label="*Ford"> 
                <option name="au1">Ford C-Max</option>
                <option name="au2">Ford EcoSport</option>
                <option name="au3">Ford Edge</option>
                <option name="au4">Ford Evos</option>
                <option name="au5">Ford Explorer</option> 
                <option name="au6">Ford Fiesta</option>
                <option name="au7">Ford Focus</option> 
                <option name="au8">Ford Galaxy</option> 
                <option name="au4">Ford GT</option>
                <option name="au5">Ford Ka+</option> 
                <option name="au6">Ford Kuga</option>
                <option name="au7">Ford Mondeo</option> 
                <option name="au8">Ford Mustang</option>  
                <option name="au8">Ford Kuga</option> 
                <option name="au4">Ford Ranger</option>
                <option name="au5">Ford S-Max</option> 
                <option name="au6">Ford Tourneo</option>
                <option name="au7">Ford Transit</option> 
            </optgroup> 
            <optgroup label="*Honda"> 
                <option name="au1">Honda Civic</option>
                <option name="au2">Honda CR-V</option>
                <option name="au3">Honda e</option>
                <option name="au4">Honda HR-V</option> 
            </optgroup> 
            <optgroup label="*INFINITI"> 
                <option name="Q30">Infiniti Q30</option>
                <option name="Q50">Infiniti Q50</option>
                <option name="Q60">Infiniti Q60</option>
                <option name="Q70">Ifiniti Q70</option>
                <option name="QX30">Infiniti QX30</option> 
                <option name="QX50">Infiniti QX50</option>
                <option name="QX70">Infiniti QX70</option> 
            </optgroup>
            <optgroup label="*INFINITI"> 
                <option name="Q30">Infiniti Q30</option>
                <option name="Q50">Infiniti Q50</option>
                <option name="Q60">Infiniti Q60</option>
                <option name="Q70">Ifiniti Q70</option>
                <option name="QX30">Infiniti QX30</option> 
                <option name="QX50">Infiniti QX50</option>
                <option name="QX70">Infiniti QX70</option> 
            </optgroup>
            <optgroup label="*Isuzu"> 
                <option name="D-Max">Isuzu D-Max</option>
            </optgroup>
            <optgroup label="*Jaguar"> 
                <option name="E-Pace">Jaguar E-Pace</option>
                <option name="F-Pace">Jaguar F-Pace</option>
                <option name="F-Type">Jaguar F-Type</option>
                <option name="I-Pace">Jaguar I-Pace</option>
                <option name="XE">Jaguar XE</option> 
                <option name="XF">Jaguar XF</option>
                <option name="XJ">Jaguar XJ</option> 
                <option name="XK">Jaguar XK</option> 
            </optgroup>
            <optgroup label="*JEEP"> 
                <option name="Cherokee">JEEP Cherokee</option>
                <option name="Compass">JEEP Compass</option>
                <option name="Gladiator">JEEP Gladiator</option>
                <option name="Grand Cherokee">JEEP Grand Cherokee</option>
                <option name="Renegade">JEEP Renegade</option> 
                <option name="Wrangler">JEEP Wrangler</option>
            </optgroup>
            <optgroup label="*JEEP"> 
                <option name="Cherokee">JEEP Cherokee</option>
                <option name="Compass">JEEP Compass</option>
                <option name="Gladiator">JEEP Gladiator</option>
                <option name="Grand Cherokee">JEEP Grand Cherokee</option>
                <option name="Renegade">JEEP Renegade</option> 
                <option name="Wrangler">JEEP Wrangler</option>
            </optgroup>
            <optgroup label="*KIA"> 
                <option name="Carens">KIA Carens</option>
                <option name="Ceed">KIA Ceed</option>
                <option name="EV6">KIA EV6</option>
                <option name="Niro">KIA Niro</option>
                <option name="Optima">KIA Optima</option> 
                <option name="Picanto">KIA Picanto</option>
                <option name="Rio">KIA Rio</option>
                <option name="Seltos">KIA Seltos</option>
                <option name="Sorento">KIA Sorento</option>
                <option name="Soul">KIA Soul</option>
                <option name="Sportage">KIA Sportage</option> 
                <option name="Stinger">KIA Stinger</option>
                <option name="Stonic">KIA Stonic</option>
                <option name="Telluride">KIA Telluride</option>
                <option name="Venga">KIA Venga</option> 
                <option name="XCeed">KIA XCeed</option>
            </optgroup>
            <optgroup label="*LADA"> 
                <option name="4X4">LADA 4X4</option>
                <option name="Priora">LADA Priora</option>
            </optgroup>
            <optgroup label="*LAMBORGHINI"> 
                <option name="Aventador">LAMBORGHINI Aventador</option>
                <option name="Gallardo">LAMBORGHINI Gallardo</option>
                <option name="Huracán">LAMBORGHINI Huracán</option>
                <option name="Sián">LAMBORGHINI Sián</option>
                <option name="Urus">LAMBORGHINI Urus</option> 
            </optgroup>
            <optgroup label="*LAND ROVER"> 
                <option name="Defender">LAND ROVER Defender</option>
                <option name="Discovery">LAND ROVER Discovery</option>
                <option name="Discovery Sport">LAND ROVER Discovery Sport</option>
                <option name="Freelander 2">LAND ROVER Freelander 2</option>
                <option name="Range Rover">LAND ROVER Range Rover</option> 
                <option name="Range Rover Evoque">LAND ROVER Range Rover Evoque</option>
                <option name="Range Rover Sport">LAND ROVER Range Rover Sport</option>
                <option name="Range Rover Velar">LAND ROVER Range Rover Velar</option>
            </optgroup>
            <optgroup label="*LEXUS"> 
                <option name="CT">LEXUS CT</option>
                <option name="ES">LEXUS ES</option>
                <option name="GS">LEXUS GS</option>
                <option name="IS">LEXUS IS</option>
                <option name="LC">LEXUS LC</option> 
                <option name="LS">LEXUS LS</option>
                <option name="NX">LEXUS NX</option>
                <option name="RC">LEXUS RC</option>
                <option name="RX">LEXUS RX</option>
                <option name="UX">LEXUS UX</option>
            </optgroup>
            <optgroup label="*LOTUS"> 
                <option name="Elise">LOTUS Elise</option>
                <option name="Evija">LOTUS Evija</option>
                <option name="Evora 400">LOTUS Evora 400</option>
                <option name="Exige">LOTUS Exige</option>
            </optgroup>
            <optgroup label="*MASERATI"> 
                <option name="Ghibli">MASERATI Ghibli</option>
                <option name="GranCabrio">MASERATI GranCabrio</option>
                <option name="GranTurismo">MASERATI GranTurismo</option>
                <option name="Grecale">MASERATI Grecale</option>
                <option name="Levante">MASERATI Levante</option> 
                <option name="MC20">MASERATI MC20</option>
                <option name="Quattroporte">MASERATI Quattroporte</option>
            </optgroup>
            <optgroup label="*MAZDA"> 
                <option name="2">MAZDA 2</option>
                <option name="3">MAZDA 3</option>
                <option name="5">MAZDA 5</option>
                <option name="6">MAZDA 6</option>
                <option name="CX-3">MAZDA CX-3</option> 
                <option name="CX-30">MAZDA CX-30</option>
                <option name="CX-4">MAZDA CX-4</option>
                <option name="CX-5">MAZDA CX-5</option>
                <option name="MX-30">MAZDA MX-30</option>
                <option name="MX-5">MAZDA MX-5</option>
            </optgroup>
            <optgroup label="*MERCEDES"> 
                <option name="AMG GT">MERCEDES AMG GT</option>
                <option name="Citan">MERCEDES Citan</option>
                <option name="CLA">MERCEDES CLA</option>
                <option name="Clase A">MERCEDES Clase A</option>
                <option name="Clase B">MERCEDES Clase B</option> 
                <option name="Clase C">MERCEDES Clase C</option>
                <option name="Clase E">MERCEDES Clase E</option>
                <option name="Clase G">MERCEDES Clase G</option>
                <option name="Clase M">MERCEDES Clase M</option>
                <option name="Clase S">MERCEDES Clase S</option>
                <option name="Clase T">MERCEDES Clase T</option>
                <option name="Clase V">MERCEDES Clase V</option>
                <option name="Clase X">MERCEDES Clase X</option>
                <option name="CLS">MERCEDES CLS</option>
                <option name="EQA">MERCEDES EQA</option> 
                <option name="EQB">MERCEDES EQB</option>
                <option name="EQC">MERCEDES EQC</option>
                <option name="EQS">MERCEDES EQS</option>
                <option name="EQV">MERCEDES EQV</option>
                <option name="GL">MERCEDES GL</option>
                <option name="GLA">MERCEDES GLA</option>
                <option name="GLB">MERCEDES GLB</option>
                <option name="GLC">MERCEDES GLC</option> 
                <option name="GLE">MERCEDES GLE</option>
                <option name="GLK">MERCEDES GLK</option>
                <option name="GLS">MERCEDES GLS</option>
                <option name="Marco Polo">MERCEDES Marco Polo</option>
                <option name="Maybach GLS">MERCEDES Maybach GLS</option>
                <option name="SL">MERCEDES SL</option>
                <option name="SLC">MERCEDES SLC</option>
                <option name="SLK">MERCEDES SLK</option>
            </optgroup>
            <optgroup label="*MINI"> 
                <option name="3 puertas">MINI 3 puertas</option>
                <option name="5 Puertas">MINI 5 Puertas</option>
                <option name="Cabrio">MINI Cabrio</option>
                <option name="Clubman">MINI Clubman</option>
                <option name="Countryman">MINI Countryman</option> 
                <option name="Coupé">MINI Coupé</option>
                <option name="Hatch">MINI Hatch</option>
                <option name="Paceman">MINI Paceman</option>
                <option name="Roadster">MINI Roadster</option>
            </optgroup>
            <optgroup label="*LEXUS"> 
                <option name="ASX">MITSUBISHI ASX</option>
                <option name="Eclipse Cross">MITSUBISHI Eclipse Cross</option>
                <option name="i-MIEV">MITSUBISHI i-MIEV</option>
                <option name="L200">MITSUBISHI L200</option>
                <option name="Montero">MITSUBISHI Montero</option> 
                <option name="Outlander">MITSUBISHI Outlander</option>
                <option name="Space Star">MITSUBISHI Space Star</option>
            </optgroup>
            <optgroup label="*NISSAN"> 
                <option name="370Z">NISSAN 370Z</option>
                <option name="Ariya">NISSAN Ariya</option>
                <option name="e-NV200">NISSAN e-NV200</option>
                <option name="Evalia">NISSAN Evalia</option>
                <option name="GT-R">NISSAN GT-R</option> 
                <option name="Juke">NISSAN Juke</option>
                <option name="Kicks">NISSAN Kicks</option>
                <option name="Leaf">NISSAN Leaf</option>
                <option name="Micra">NISSAN Micra</option>
                <option name="Murano">NISSAN Murano</option>
                <option name="Navara">NISSAN Navara</option>
                <option name="Note">NISSAN Note</option>
                <option name="NV200">NISSAN NV200</option>
                <option name="NV300">NISSAN NV300</option>
                <option name="Pathfinder">NISSAN Pathfinder</option> 
                <option name="Primastar">NISSAN Primastar</option>
                <option name="Pulsar">NISSAN Pulsar</option>
                <option name="Qashqai">NISSAN Qashqai</option>
                <option name="X-Trail">NISSAN X-Trail</option>
            </optgroup>
            <optgroup label="*OPEL"> 
                <option name="Adam">OPEL Adam</option>
                <option name="Ampera">OPEL Ampera</option>
                <option name="Astra">OPEL Astra</option>
                <option name="Cabrio">OPEL Cabrio</option>
                <option name="Combo">OPEL Combo</option> 
                <option name="Corsa">OPEL Corsa</option>
                <option name="Crossland">OPEL Crossland</option>
                <option name="Grandland X">OPEL Grandland X</option>
                <option name="Insignia">OPEL Insignia</option>
                <option name="Karl">OPEL Karl</option>
                <option name="Meriva">OPEL Meriva</option>
                <option name="Mokka">OPEL Mokka</option>
                <option name="Vivaro">OPEL Vivaro</option>
                <option name="Zafira">OPEL Zafira</option>
            </optgroup>
            <optgroup label="*PEUGEOT"> 
                <option name="108">PEUGEOT 108</option>
                <option name="2008">PEUGEOT 2008</option>
                <option name="207">PEUGEOT 207</option>
                <option name="208">PEUGEOT 208</option>
                <option name="3008">PEUGEOT 3008</option> 
                <option name="308">PEUGEOT 308</option>
                <option name="4008">PEUGEOT 4008</option>
                <option name="5008">PEUGEOT 5008</option>
                <option name="508">PEUGEOT 508</option>
                <option name="Bipper">PEUGEOT Bipper</option>
                <option name="iOn">PEUGEOT iOn</option>
                <option name="Partner">PEUGEOT Partner</option>
                <option name="RCZ">PEUGEOT RCZ</option>
                <option name="Rifter">PEUGEOT Rifter</option>
                <option name="Traveller">PEUGEOT Traveller</option> 
            </optgroup>
            <optgroup label="*PORSCHE"> 
                <option name="718 Boxster">PORSCHE 718 Boxster</option>
                <option name="718 Cayman">PORSCHE 718 Cayman</option>
                <option name="718 Spyder">PORSCHE 718 Spyder</option>
                <option name="911">PORSCHE 911</option>
                <option name="918 Spyder">PORSCHE 918 Spyder</option> 
                <option name="935">PORSCHE 935</option>
                <option name="Boxster">PORSCHE Boxster</option>
                <option name="Cayenne">PORSCHE Cayenne</option>
                <option name="Cayman">PORSCHE Cayman</option>
                <option name="Macan">PORSCHE Macan</option>
                <option name="Panamera">PORSCHE Panamera</option>
                <option name="Taycan">PORSCHE Taycan</option>
            </optgroup>
            <optgroup label="*RENAULT"> 
                <option name="CT">RENAULT CT</option>
                <option name="ES">RENAULT ES</option>
                <option name="GS">RENAULT GS</option>
                <option name="IS">RENAULT IS</option>
                <option name="LC">RENAULT LC</option> 
                <option name="LS">RENAULT LS</option>
                <option name="NX">RENAULT NX</option>
                <option name="RC">RENAULT RC</option>
                <option name="RX">RENAULT RX</option>
                <option name="UX">RENAULT UX</option>
                <option name="CT">RENAULT CT</option>
                <option name="ES">RENAULT ES</option>
                <option name="GS">RENAULT GS</option>
                <option name="IS">RENAULT IS</option>
                <option name="LC">RENAULT LC</option> 
                <option name="LS">RENAULT LS</option>
                <option name="NX">RENAULT NX</option>
                <option name="RC">RENAULT RC</option>
                <option name="RX">RENAULT RX</option>
                <option name="UX">RENAULT UX</option>
            </optgroup>
            <optgroup label="*LEXUS"> 
                <option name="CT">LEXUS CT</option>
                <option name="ES">LEXUS ES</option>
                <option name="GS">LEXUS GS</option>
                <option name="IS">LEXUS IS</option>
                <option name="LC">LEXUS LC</option> 
                <option name="LS">LEXUS LS</option>
                <option name="NX">LEXUS NX</option>
                <option name="RC">LEXUS RC</option>
                <option name="RX">LEXUS RX</option>
                <option name="UX">LEXUS UX</option>
            </optgroup>
          
           
    </select>
    
    <br><br>
    
    <h3><u><b>PRECIO DEL VEHÍCULO:</b></u></h3>
    
    <input type="text"  maxlength="7"  name="precio" required  autocomplete="off" pattern="[0-9]+"> 
  
    <br><br>
    <h3><u><b>CAMBIO:</b></u></h3>
    
    
        <input type="radio" name="cambio" value="manual" required> Manual<br>

        <input type="radio" name="cambio" value="automatico" required> Automático<br>
    

  


    <br><br>
    
    <h3><u><b>TIPO DE COMBUSTIBLE:</b></u></h3>
    <select name="combustible" required>
  
    
            
                    <option name="combustible">Diesel</option>
                    <option name="combustible">Gasolina</option> 
                    <option name="combustible">Hibrido</option>
                    <option name="combustible">Electrico</option>
            
    </select>

    <br><br>    

          
    <h3><u><b>AÑO DEL VEHÍCULO:</b></u></h3>
    
        <input type="text" maxlength="4" minlength="4" name ="año" required  autocomplete="off" pattern="[0-9]+"> 
      
        <br><br>

        <h3><u><b>KILOMETROS DEL VEHÍCULO:</b></u></h3>
    
    <input type="text" maxlength="7" name ="km" required  autocomplete="off" pattern="[0-9]+"> 
  
    <br><br>
        

        
    <br><br><br>

    <h3><u><b>IMAGENES DEL VEHÍCULO:</b></u></h3>
    <br>
    <p>Selecciona las fotos de su vehiculo</p>
    <input type=file required name="imagen">
   
    <p><input type="submit" value="Registrar coche" ></p>

        </form>




    <?php 
         include 'menu2.html' ;
    ?>


</body>

</html>


