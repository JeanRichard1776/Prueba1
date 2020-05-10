<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>APARTURE SCIENCE SPA</title>
        
        <style>
            *{
                box-sizing: border-box;
            }
            h1{
                text-align: center;
                text-shadow:2px 4px red;
                font-family: algerian;
                font-size: 100px;
            }
            p{
                font-size: 20px;
                font-family: arial;
            }
            .header,footer{
                color: white;
                padding: 10px;
            }
            .footer{
                text-align: right;
                background-color: lightskyblue;
                float: bottom;
            }
            .footer img{
                width: 50px;
                height: 30px;
            }
            .column{
                float: left;
                padding: 15px;
            }
            .section{
                width: 45%;
                overflow: scroll;
            }
            .aside{
                width: 45%;
                overflow: scroll;
                float: right;
            }
            .clearfix::after{
                content: "";
                clear:both;
                display: table;
            }
            .nav{
                background-color: lightskyblue;
                padding: 15px;
                margin: 5px;
                height: 10%;
                width: 100%;
                font-size: 40px;
                text-align: center;
            }
            .nav:hover{
                background-color: #0099cc;
                color: whitesmoke
            }
            img{
                width: 20%;
                height: 20%;
            }
            .header{
                text-align: center;
                background-image:url(Image/santiago-de-chile-portada-.jpg) ;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        
        <div class="header">
            <h1>APARTURE SCIENCE SPA</h1>
        </div>
        
        <div class="nav">
            <a href="#">Inicio</a>
            <a href="#">Productos</a>
            <a href="#">Contactos</a>
            <a href="#">Informaciones</a>
        </div>
        
        <div class="clearfix">
            
            <div class="column section">
                <h2>Nos servicios</h2>
                <p>Somos líderes de Fullcommerce en Latinoamérica, con más de 8 años de experiencia en el área,
                    premiados a nivel internacional.</p>
                <p>Hoy nos posicionamos como la mejor alternativa para operar
                    un Ecommerce a gran escala. Actualmte más de 70 clientes han confiado en nosotros en Chile,
                    México, Colombia, Perú, Argentina y Brasil.</p>
                
            </div>
            
             <div class="column aside">
                <h2>Catalogos</h2>
                <p>Somos líderes de Fullcommerce en Latinoamérica, con más de 8 años de experiencia en el área,
                    premiados a nivel internacional.</p>
                <p>Hoy nos posicionamos como la mejor alternativa para operar
                    un Ecommerce a gran escala. Actualmte más de 70 clientes han confiado en nosotros en Chile,
                    México, Colombia, Perú, Argentina y Brasil.</p> 
            </div>
        </div>
        
        <div class="clearfix">
            
            <div class="column section">
                <h2>Noticias</h2>
                <p>Somos líderes de Fullcommerce en Latinoamérica, con más de 8 años de experiencia en el área,
                    premiados a nivel internacional.</p>
                <p>Hoy nos posicionamos como la mejor alternativa para operar
                    un Ecommerce a gran escala. Actualmte más de 70 clientes han confiado en nosotros en Chile,
                    México, Colombia, Perú, Argentina y Brasil.</p>
                
            </div>
            
             <div class="column aside">
                <h2>Ultimos Productos</h2>
                <p>Somos líderes de Fullcommerce en Latinoamérica, con más de 8 años de experiencia en el área,
                    premiados a nivel internacional.</p>
                <p>Hoy nos posicionamos como la mejor alternativa para operar
                    un Ecommerce a gran escala. Actualmte más de 70 clientes han confiado en nosotros en Chile,
                    México, Colombia, Perú, Argentina y Brasil.</p> 
            </div>
        </div>
        
        <div class="footer">
            <p>Contactenos :</p>
            <img src="Image/facerbook lite.jpg" alt=""/>
        </div>
    </body>
</html>
