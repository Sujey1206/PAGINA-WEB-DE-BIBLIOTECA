<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            margin: 40px;
        }
        .btn {
            cursor: pointer;
            margin: 10px;
            border-radius: 15px;
            text-decoration: none;
            padding: 10px;
            font-size: 25px;
            color: #2ecc71;
            border: 2px #2ecc71 solid;
            width: 200px;
        }
        .btn:hover {
            cursor: url(http://cur.cursors-4u.net/symbols/sym-1/sym46.cur), auto;
            color: #fff;
            background-color: #2ecc71;
        }
        td{
            font-size:20px;
        }
        table{
            margin-top:160px;
        }
    </style>
</head>
<body style="background-image:url(../img/fond.jpg)">
<form action="borrarfichero.php" method="post">

<table border="0" align="center" width="100%">
    <tr>
    <td width="50%">Nombre del archivo</td><td><input type="text" name="archivo"/></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><p><input type="submit" value="Borrar fichero" class="btn"/></p></td>
    </tr>
</table>
</form>
</body>