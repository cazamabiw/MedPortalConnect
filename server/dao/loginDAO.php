<?php
/**
 * Description of loginDAO
 *
 * @author Pawinee Mahantamak
 */
session_start();

if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true) {
    header("Location: ../../pages/index.html");
    exit();
}

require_once('abstractDAO.php');

class loginDAO extends abstractDAO
{

    public function loginUser($username, $password)
    {
        try {
            $stmt = $this->mysqli->prepare("SELECT id, username, password FROM users WHERE username = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($password == $row["password"]) {
                    session_start();
                    $_SESSION["user_id"] = $row["id"];
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["authenticated"] = true;
                    header("Location: ../../pages/index.html");
                    exit();
                } else {
                    echo "Invalid password";
                }
            } else {
                echo "User not found";
            }

            $stmt->close();
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $loginDAO = new LoginDAO();
    $loginDAO->loginUser($username, $password);
}
?>