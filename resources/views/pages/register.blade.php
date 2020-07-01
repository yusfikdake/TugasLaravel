<!DOCTYPE html>
<html>
    <head>
        <title>Buat Akun Baru</title>
    </head>
    <body>
        <h1>Buat Akun Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/welcome" method="post">
        @csrf
            <table>
                <tr>
                    <td valign="top">First Name:<br/>
                    <input type="text" name="nama" placeholder="enter your first name"></td>
                </tr>
                <tr>
                    <td valign="top">Last Name:<br/>
                    <input type="text" name="username" placeholder="enter your last name">
                </td>
                </tr>
                <tr>
                    <td valign="top">Gender:
                    <br/>
                        <input type="radio" name="l">Male<br/>
                        <input type="radio" name="p">Female<br/>
                        <input type="radio" name="p">Other
                    </td>
                </tr>
                <tr>
                    <td valign="top">Nationality:<br/>
                        <select>
                            <option>Indonesia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td valign="top">Language Spoken:
                    <br/>
                        <input type="radio" name="l">Bahasa Indonesia<br/>
                        <input type="radio" name="p">English<br/>
                        <input type="radio" name="p">Other
                    </td>
                </tr>
                <tr>
                    <td valign="top">Bio:<br/>
                    <textarea placeholder="fill in your short biography" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>

                            <input type="submit" value="Sign Up" />
                    </td>
                </tr>
            </table>
            </form>
    </body>
</html>
