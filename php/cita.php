<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Despacho Contable</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>

    <header>
        <a href="#" class="logo">Despacho Contable</a>
        <div class="toggle"></div>
        <ul class="navigation">
            <li><a href="../index.html" style="--i:1;" class="active">Inicio</a></li>
            <li><a href="#" style="--i:2;">¿Quiénes somos?</a></li>
            <li><a href="#" style="--i:3;">Servicios</a></li>
            <li><a href="#" style="--i:4;">Contacto</a></li>
            <li><a href="php/cita.php" style="--i:5;">Agendar Cita</a></li>
        </ul>
    </header>

    <h1>Agendar Cita</h1>
    <form id="formulario" action="php/agendarCita.php" method="post">
        <label for="nombres">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="celular">Número de celular:</label>
        <input type="number" name="celular" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"><br>

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
                        <button onclick="mesAnt()">
                            << /button>
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

    <script src="../js/app.js" type="text/JavaScript"></script>
    <script>
        const menuToggle = document.querySelector('.toggle');
        const menuNavigation = document.querySelector('.navigation');
        menuToggle.onclick = function () {
            menuToggle.classList.toggle('active');
            menuNavigation.classList.toggle('active');
        }
    </script>
</body>

</html>