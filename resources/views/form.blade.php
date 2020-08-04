<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method="get">
            <div>
                <label for="firstName">First name:</label><br></br>
                <input type="text" name="firstName" id="firstName">
            </div>
            <br>
            <div>
                <label for="lastName">Last name:</label><br></br>
                <input type="text" name="lastName" id="lastName">
            </div>
            <br>
            <div>
                <label for="gender">Gender:</label><br></br>
                <input type="radio" name="gender" id="gender" value="1">Male<br>
                <input type="radio" name="gender" id="gender" value="2">Female<br>
                <input type="radio" name="gender" id="gender" value="0">Other<br>
            </div>
            <br>
            <div>
                <label for="nationality">Nationality:</label><br></br>
                <select name="nationality" id="nationality">
                    <option value="0">Indonesia</option>
                    <option value="1">British</option>
                    <option value="2">American</option>
                    <option value="3">Singaporean</option>
                    <option value="4">Other</option>
                </select>
            </div>
            <br>
            <div>
                <label for="languageSpoken">Language Spoken:</label><br></br>
                <input type="checkbox" name="languageSpoken" id="languageSpoken" value="1">Bahasa Indonesia<br>
                <input type="checkbox" name="languageSpoken" id="languageSpoken" value="2">English<br>
                <input type="checkbox" name="languageSpoken" id="languageSpoken" value="0">Other<br>
            </div>
            <br>
            <div>
                <label for="bio">Bio:</label><br></br>
                <textarea cols="30" rows="7" name="bio" id="bio"></textarea>
            </div>
            <div>
                <input type="Submit" value="Sign Up">
            </div>
        </form>
    </body>
</html>