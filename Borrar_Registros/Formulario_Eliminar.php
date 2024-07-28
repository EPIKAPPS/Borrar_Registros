<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>INSERTAR DATOS</title>
        <style type="text/css" >
            h1 {
                text-align: center;
                color: #00F;
                border-bottom: dotted #0000ff;
                width: 50%;
                margin: auto;
            }
            table {
                border: 1px solid #f00;
                padding: 20px 50px;
                margin: auto;
            }
            body {
                background-color: #ffc;
            }
        </style>
        
    </head>
    <body>
        <h1>Eliminación de Artículos</h1>
        <form name="form1" method="get" action="Eliminar_Registro.php">
            <br><br>
            <table border="0" align="center">
                <tr>
                    <td>Codigo Artículo</td>
                    <td><label for="c_art"></label>
                        <input type="text" name="c_art" id="c_art"></td>
                </tr>
                <tr>
                    <td>Sección</td>
                    <td><label  for="seccion" ></label>
                <input type="text" name="seccion" id="seccion"></td>
                </tr>
                <tr>
                    <td>Nombre artículo</td>
                    <td><label for="n_art" ></label>
                <input type="text" name="n_art" id="n_art"></td>
                </tr>
                 <tr>
                    <td>Precio</td>
                    <td><label for="precio"></label>
                        <input type="text" name="precio" id="precio"></td>
                </tr>
                <tr>
                    <td>Fecha</td>
                    <td><label for="fecha" ></label>
                <input type="text" name="fecha" id="fecha"></td>
                </tr>
                <tr>
                    <td>Importado</td>
                    <td><label for="importado" ></label>
                <input type="text" name="importado" id="importado"></td>
                </tr>
                 <tr>
                    <td>País de Origen</td>
                    <td><label for="p_orig"></label>
                        <input type="text" name="p_orig" id="p_orig"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" name="eliminar" id="eliminar" value="Eliminar"></td>
                    <td align="center"><input type="reset" name="borrar" id="borrar" value="Borrar"></td>
                </tr>
            </table>
        </form>

    </body>
</html>
