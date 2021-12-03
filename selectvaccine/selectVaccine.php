<!DOCTYPE html>
<html>
    <head>
        <title>People Care PVCS</title>
        <center><h2>People Care PVCS</h2></center>
        <center>
        <h3>Please Select Your Vaccine</h3>
        </center>
    </head>
    <nav>
    <body>
    <center>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>Please Entry Your Name</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Your Age</td><td> <input type="int" age="age"></td></tr>
                <tr><td>Vaccine Type</td><td>
                        <select name="Vaccine Type">
                            <option value="Sinovac">Sinovac</option>
                            <option value="AstraZeneca">AstraZeneca</option>
                            <option value="Moderna">Moderna</option>
                        </select>
                    </td></tr>
                <tr><td>Address</td><td><input type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">Save</button></td></tr>
            </table>
        </form>
    </center>
    </body>
</html>