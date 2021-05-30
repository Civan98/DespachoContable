<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Despacho Contable</title>
    <link rel="stylesheet" type="text/css" href="css/fullcalendar.css" />
</head>

<body>
    <h1>Agendar Cita</h1>
    <form id="formulario" action="php/agendarCita.php" method="post">
        <label for="nombres">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="celular">Número de celular:</label>
        <input type="number" name="celular" required  maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"><br>

        <select name="hora" id="hora" disabled>
            <option value="9">9:00 AM</option>
            <option value="10">10:00 AM</option>
            <option value="11">11:00 AM</option>
            <option value="12">12:00 PM</option>
            <option value="01">01:00 PM</option>
            <option value="02">02:00 PM</option>
            <option value="03">03:00 PM</option>
            <option value="04">04:00 PM</option>
            <option value="05">05:00 PM</option>
            <option value="06">06:00 PM</option>
        </select><br>

        <button id="aceptar" type="submit" disabled='true'>Agendar</button>
    </form>

    
    <div id="calendar">
        <table border="1" id="tabla">
            <thead>
                <tr>
                    <th>
                        <button onclick="mesAnt()"><</button>
                    </th>
                    <th id="mes" colspan="5"></th>
                    <th>
                        <button onclick="mesPost()">></button>
                    </th>
                </tr>
            </thead>
            <tbody id="tablaBody">
                <tr id="dias"></tr>
            </tbody>
        </table>
    </div>
    <h2 id="fechaCita"></h2>

    <script src="js/app.js" type="text/JavaScript"></script>
</body>

</html>