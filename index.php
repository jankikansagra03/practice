<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <!-- Enter name: <input type=" text" name="nm" id="">
        <br>
        Enter Email: <input type="email" name="em" id="">
        <br>
        Enter PAssword: <input type="password" name="pwd" id="">
        <br>
        select gender:
        <input type="radio" name="gender" id="" value="male">Male
        <input type="radio" name="gender" id="" value="female">Female
        <br>
        select Education:
        <input type="checkbox" name="edu[]" id="" value="SSC">SSC
        <input type="checkbox" name="edu[]" id="" value="HSC">HSC
        <input type="checkbox" name="edu[]" id="" value="Diploma">Diploma
        <input type="checkbox" name="edu[]" id="" value="Bachelors">Bachelors
        <input type="checkbox" name="edu[]" id="" value="Masters">Masters
        <input type="checkbox" name="edu[]" id="" value="PHD">PHD
        <br>
        select State:
        <select name="state[]" id="" multiple>
            <option value="guj">Gujarat</option>
            <option value="mh">Maharashtra</option>
            <option value="ap">Andhra Pradesh</option>
            <option value="tel">Telangana</option>
        </select>
        <br> -->
        Select a file:<input type="file" name="f1[]" id="" multiple>
        <br>
        <input type="submit" value="Register" name="btn">

    </form>
</body>

</html>

<?php
if (isset($_POST['btn'])) {
    // $nm = $_POST['nm'];
    // $email = $_POST['em'];
    // $password = $_POST['pwd'];
    // $gender = $_POST['gender'];
    // $edu = $_POST['edu'];
    // $st = $_POST['state'];
    // foreach ($edu as $e) {
    //     echo $e . "<br>";
    // }
    // $state = implode(',', $st);
    // $education = implode(",", $edu);
    // $edu_array = explode(",", $education);
    // print_r($edu_array);
    // echo "Education: " . $education . "<br>";
    // echo "Name: " . $nm . "<br>";
    // echo "Email: " . $email . "<br>";
    // echo "Password: " . $password . "<br>";
    // echo "Gender: " . $gender . "<br>";
    // echo "State: " . $state . "<br>";

    if ($_FILES['f1']['name'] == "") {
        echo "please select a file";
    } else {
        if ($_FILES['f1']['type'] == "image/png" || $_FILES['f1']['type'] == "image/jpeg") {
            if ($_FILES['f1']['size'] <= 102400) {
                echo "TEmporaray Name->" . $_FILES['f1']['tmp_name'] . "<br>";
                echo "original Name->" . $_FILES['f1']['name'] . "<br>";
                echo "Type->" . $_FILES['f1']['type'] . "<br>";
                echo "size->" . $_FILES['f1']['size'] . "<br>";
                if (!is_dir("uploads")) {
                    mkdir("uploads");
                }
                move_uploaded_file($_FILES['f1']['tmp_name'], "uploads/" . $_FILES['f1']['name']);
            } else {
                echo "select a file with size less than 100kb";
            }
        } else {
            echo "please select  a image file with extension jpg or png";
        }
    }
}
