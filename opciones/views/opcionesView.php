<?php

class opcionesView
{

    public function menuOpciones()
    {
        // echo 'menu de opciones vista';
        // $this->botonesOpciones();

        
    }

    public function botonesOpciones()
    {
        ?>
                <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Botones de Producto Estilo ETPOS</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
            <style>
                body {
                            font-family: Arial, sans-serif;
                            background-color: #d1d1d1; /* Fondo similar al área de productos de ETPOS */
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            min-height: 100vh;
                            margin: 0;
                            padding: 20px;
                        }

                        .product-grid-container {
                            width: 100%;
                            max-width: 900px; /* Ancho máximo para el área de productos */
                            padding: 15px;
                            background-color: #d1d1d1; /* Fondo del contenedor de productos */
                            border-radius: 8px;
                            /* Aquí puedes añadir una sombra si el contenedor de la cuadrícula también tiene efecto 3D */
                            /* box-shadow: inset 0 2px 5px rgba(0,0,0,0.2); */
                        }

                        /* Estilos para el botón individual de producto */
                        .etpos-product-button {
                            background: linear-gradient(to bottom, #d0b090, #b89070); /* Gradiente marrón/beige para el bisel */
                            border: none;
                            border-radius: 5px; /* Bordes ligeramente redondeados */
                            cursor: pointer;
                            outline: none;
                            position: relative; /* Importante para posicionar el precio */
                            padding: 10px; /* Relleno interno para el contenido */
                            height: 120px; /* Altura fija para cada botón */
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            justify-content: center;
                            text-align: center;
                            color: #333;
                            text-shadow: 1px 1px 0 rgba(255,255,255,0.6); /* Sombra de texto clara */
                            overflow: hidden; /* Para que la imagen no se desborde */

                            /* Efecto 3D / Biselado */
                            box-shadow: 
                                inset 0 1px 0 rgba(255,255,255,0.4), /* Brillo superior */
                                inset 0 -1px 0 rgba(0,0,0,0.2),    /* Sombra inferior */
                                0 2px 3px rgba(0,0,0,0.3),         /* Sombra exterior para profundidad */
                                0 0 5px rgba(255,255,255,0.1) inset; /* Brillo interior general */
                            
                            transition: all 0.08s ease-out; /* Transición suave */
                        }

                        .etpos-product-button:hover {
                            background: linear-gradient(to bottom, #d5b595, #c09575); /* Ligero cambio de gradiente al hover */
                            box-shadow: 
                                inset 0 1px 0 rgba(255,255,255,0.5), 
                                inset 0 -1px 0 rgba(0,0,0,0.3),    
                                0 3px 5px rgba(0,0,0,0.4),         
                                0 0 8px rgba(255,255,255,0.2) inset;
                        }

                        .etpos-product-button:active {
                            background: linear-gradient(to top, #d0b090, #b89070); /* Gradiente inverso al active */
                            box-shadow: 
                                inset 0 2px 5px rgba(0,0,0,0.4), 
                                inset 0 -1px 0 rgba(255,255,255,0.2), 
                                0 1px 2px rgba(0,0,0,0.2);
                            transform: translateY(1px); /* Desplazamiento hacia abajo al hacer clic */
                        }

                        .etpos-product-button img {
                            max-width: 60%; /* Tamaño de la imagen */
                            max-height: 60%;
                            object-fit: contain; /* Asegura que la imagen se ajuste sin distorsión */
                            margin-bottom: 5px; /* Espacio entre imagen y texto */
                        }

                        .product-name {
                            font-size: 0.9em;
                            font-weight: bold;
                            color: #333;
                            /* Si el texto es muy largo, puedes usar: */
                            white-space: nowrap; /* Evita que el texto se rompa en varias líneas */
                            overflow: hidden; /* Oculta el texto que se desborda */
                            text-overflow: ellipsis; /* Añade puntos suspensivos si el texto es demasiado largo */
                            width: 100%; /* Asegura que el ellipsis funcione */
                            padding: 0 5px; /* Relleno para que el texto no toque los bordes */
                        }

                        .product-price {
                            position: absolute; /* Posicionamiento absoluto para el precio */
                            top: 5px; /* Desde arriba */
                            right: 5px; /* Desde la derecha */
                            background-color: rgba(255, 255, 255, 0.7); /* Fondo semi-transparente para el precio */
                            padding: 2px 5px;
                            border-radius: 3px;
                            font-size: 0.8em;
                            font-weight: bold;
                            color: #555;
                            box-shadow: 0 1px 2px rgba(0,0,0,0.1); /* Sombra suave para el precio */
                        }

                    </style>
                </head>
                <body>

                    <div class="product-grid-container container">

                        <div class="row g-3"> <div class="col-4 col-sm-3 col-md-2"> <button class="etpos-product-button">
                                    <img src="https://via.placeholder.com/60x60/c8a2c8/ffffff?text=Bombon" alt="Bombón">
                                    <span class="product-name">Bombón</span>
                                    <span class="product-price">0,55</span>
                                </button>
                        </div>

                            <div class="col-4 col-sm-3 col-md-2">
                                <button class="etpos-product-button">
                                    <img src="https://via.placeholder.com/60x60/a0522d/ffffff?text=Cafe" alt="Café">
                                    <span class="product-name">Café</span>
                                    <span class="product-price">0,55</span>
                                </button>
                            </div>
                        
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
                </body>
                </html>
                <?php
    }

    public function traerListadoGrupos()
    {

    }
}



?>