<form method="post">
    <p>
        User type
        <select name="user_type">
            <option value="0">Superadmin</option>
            <option value="1">Admin</option>
        </select>
    </p>
    <p>
        Profile image
        <input type="file" name="image">
    </p>
    <p>
        First name
        <input type="text" name="first_name">
    </p>
    <p>
        Second name
        <input type="text" name="second_name">
    </p>
    <p>
        Email
        <input type="email" name="email">
    </p>
    <p>
        Username
        <input type="text" name="username">
    </p>
    <p>
        Password
        <input type="password" name="password">
    </p>
    <p>
        Password (confirm)
        <input type="password" name="password_confirm">
    </p>
    <p>
        Address
        <input type="text" name="address">
    </p>
    <p>
        Gender
        <input type="radio" id="gender_male" name="gender" value="1"><label for="gender_male">Male</label>
        <input type="radio" id="gender_female" name="gender" value="0"><label for="gender_female">Female</label>
    </p>
    <p>
        Hobbies<br/>
        <input type="checkbox" id="hobby_1" name="hobbies[]" value="hobby_1">
        <label for="hobby_1">Hobby_1</label><br/>
        <input type="checkbox" id="hobby_2" name="hobbies[]" value="hobby_2">
        <label for="hobby_2">Hobby_2</label><br/>
        <input type="checkbox" id="hobby_3" name="hobbies[]" value="hobby_3">
        <label for="hobby_3">Hobby_3</label><br/>
        <input type="checkbox" id="hobby_4" name="hobbies[]" value="hobby_4">
        <label for="hobby_4">Hobby_4</label><br/>
        <input type="checkbox" id="hobby_5" name="hobbies[]" value="hobby_5">
        <label for="hobby_5">Hobby_5</label><br/>
        <input type="checkbox" id="hobby_6" name="hobbies[]" value="hobby_6">
        <label for="hobby_6">Hobby_6</label><br/>
    </p>
    <p>
        <input type="submit" name="register">
    </p>
</form>