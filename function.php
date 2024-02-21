<?php
$conn = mysqli_connect("localhost", "root", "", "web");
if($conn->connect_error){
	die("Connection failed:". $conn->connect_error);
}
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) <= 0) {
        echo mysqli_error($conn);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// CREATE = INSERT
// UPDATE
// DELETE
function crud($query)
{
    global $conn;
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) <= 0) {
        echo mysqli_error($conn);
    }
}

function redirect($page)
{
    header("Location: $page");
    exit();
}

function tryLogin($username, $password)
{
    $data = query("SELECT * FROM user WHERE username = '$username'");

    $uname = $data[0]['user_id'];
    $pwd = $data[0]['pwd'];
    if ($username == $uname && password_verify($password, $pwd)) {
        $session_key = hash('MD5', $uname . $pwd);
        $query = "INSERT INTO login_session(sess, username) VALUES('$session_key','$uname')";
        crud($query);
        setcookie('session_key', $session_key, time() + 120);
        return true;
    } else {
        return false;
    }
}

function checkSession($session_key)
{

    $query = "SELECT * FROM login_session WHERE sess = '$session_key'";
    $result = query($query);

    if (count($result) > 0) {
        $current = new DateTime($result[0]['timestamp']);
        $time_diff = $current->diff(new DateTime('now'));
        if ($time_diff->s < 120) {
            return $result[0]['user_id'];
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function addUser($username,$nama,$alamat, $password)
{
    $query = "INSERT INTO user(username,nama,alamat, pasword) VALUES('$username','$nama','$alamat', '$password')";
    crud($query);
}
