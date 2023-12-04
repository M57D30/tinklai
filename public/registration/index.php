<!DOCTYPE html>
<html>

<head>
    <title>Paciento registracija</title>
</head>


<body>
    <div>
        <form action="/registration" method="post" autocomplete="off">
            <h1>LOGINas</h1>
            <label>Vardas</label>
            <input type="text" name="name" placeholder="Vartotojo Vardas"><br>

            <label>Pavardė</label>
            <input type="text" name="lastname" placeholder="Vartotojo Pavardė"><br />

            <label>Slaptažodis</label>
            <input type="password" name="password" placeholder="Slaptažodis"><br />

            <label>Patvirtinti slaptažodį</label>
            <input type="password" name="confirm_password" placeholder="Slaptažodis"><br />

            <label>El. Paštas</label>
            <input type="email" name="email" placeholder="El. paštas"><br />

            <label>Tel. numeris</label>
            <input type="text" name="number" placeholder="Telefono numeris"><br />

            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>