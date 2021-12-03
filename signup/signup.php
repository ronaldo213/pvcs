<!DOCTYPE html>
<html>
    <head>
        <title>People Care PVCS</title>
        <center><h2>People Care PVCS</h2></center>
    </head>
    <nav>
    <body>
    <center>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>No KTP</td><td><input type="text" onkeyup="isi_otomatis()" name="no KTP"></td></tr>
                <tr><td>Full name</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Nick name</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Gender</td><td>
                        <input type="radio" name="gender" value="L">MALE
                        <input type="radio" name="gender" value="P">FEMALE
                    </td></tr>
                <tr><td>Address</td><td><input type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">Save</button></td></tr>
            </table>
        </form>
    </center>
    </body>
</html>