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
        <a href="#" class="logo">Contreras y asociados</a>
        <div class="toggle"></div>
        <ul class="navigation">
            <li><a href="../index.html" style="--i:1;">Inicio</a></li>
            <li><a href="#" style="--i:2;">¿Quiénes somos?</a></li>
            <li><a href="#" style="--i:3;">Servicios</a></li>
            <li><a href="#" style="--i:4;">Contacto</a></li>
            <li><a href="php/cita.php" style="--i:5;" class="active">Agendar Cita</a></li>
        </ul>
    </header>

    <section>

        <div class="content">
            <div class="textbox">
                <h1>Agendar Cita</h1>
                <form id="formulario" action="agendarCita.php" method="post">
                    <input type="text" name="nombre" placeholder="Nombre" required><br>

                    <input type="text" name="apellidos" placeholder="Apellidos" required><br>

                    <input type="email" name="correo" placeholder="Correo" required><br>

                    <input type="number" name="celular" placeholder="Número de celular" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"><br>

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
            </div>
        </div>

        <div id="calendar">
            <table border="1" id="tabla">
                <thead>
                    <tr>
                        <th>
                            <button onclick="mesAnt()">
                                < </button>
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
    </section>
    <script src="../js/app.js" type="text/JavaScript"></script>
    <script>
        const menuToggle = document.querySelector('.toggle');
        const menuNavigation = document.querySelector('.navigation');
        menuToggle.onclick = function() {
            menuToggle.classList.toggle('active');
            menuNavigation.classList.toggle('active');
        }
    </script>
</body>

</html>