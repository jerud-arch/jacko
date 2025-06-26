<!DOCTYPE html>
<html lang="es-LA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Escolares | SIE UPQROO</title>
    <link rel="stylesheet" href="2index.css">
    <link rel="icon" href="logo.ico">
</head>

<?php include("head.html"); ?>

<body>
    <!-- Botón de regreso en esquina -->
    <div class="item-left">
        <a href="menu.php"><img src="assets/svg/back.svg" alt="Regresar" height="40"></a>            
    </div>

    <!-- Barra de título -->
    <div class="bar">
        <h1>Sistema de Integración Escolar</h1>		
        <h3>Universidad Politécnica de Quintana Roo</h3>
    </div>

    <!-- Contenedor general -->
    <div class="container">

        <!-- Tabla de datos escolares -->
        <table>
            <tr>
                <th colspan="2">DATOS ESCOLARES</th>
            </tr>
            <tr>
                <th>FOTO</th>
                <th>IDENTIFICACIÓN</th>
            </tr>
            <tr>
                <td height="100"></td>
                <td height="100"></td>
            </tr>
        </table>

        <table> 
            <tr>
                <th>Matrícula:</th>
                <td></td>
                <th>Tutor:</th>
                <td></td>
            </tr>
            <tr>
                <th>Carrera:</th>
                <td></td>
                <th>Plan de estudios:</th>
                <td></td>
            </tr>
        </table>

        <!-- Tabla de datos del alumno -->
        <table>
            <tr>
                <th colspan="2">DATOS ALUMNO</th>
            </tr>
            <tr>
                <th>Apellido Paterno:</th>
                <td></td>
            </tr>
            <tr>                
                <th>Apellido Materno:</th>
                <td></td>
            </tr>    
            <tr>                
                <th>Nombre(s):</th>
                <td></td>
            </tr>  
            <tr>                
                <th>CURP:</th>
                <td></td>
            </tr>  
        </table>

        <!-- Tabla de domicilio -->
        <table>
            <tr>                
                <th colspan="3">DOMICILIO</th>
            </tr>  
            <tr>                
                <th>Calle:</th>
                <th>Número Exterior:</th>
                <th>Número Interior:</th>
            </tr>  
            <tr>                
                <td></td>                    
                <td></td>                
                <td></td>
            </tr>  
            <tr>                
                <th>Colonia:</th>               
                <th>Estado:</th>
                <th>Nacionalidad:</th>
            </tr>  
            <tr> 
                <td></td>
                <td></td>
                <td></td>
            </tr>  
        </table>
    </div>
</body>
</html>
