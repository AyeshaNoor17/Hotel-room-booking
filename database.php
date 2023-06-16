<?php
class Database
{
    private $db;

    function __construct()
    {
        try {
            $this->db = new PDO(
                "mysql:host=localhost;dbname=hotel",
                "root",
                ""
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            ;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    function signup($u, $p, $ph, $em)
    {
        try {
            $sql = "INSERT INTO `users` (`uname`, `upass`, `uphone`, `uemail`) VALUES (?, ?, ?,?);";
            $st = $this->db->prepare($sql);
            $st->execute(array($u, $p, $ph, $em));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    function signin($u, $p)
    {
        $sql = "SELECT * FROM `users` WHERE `uname` = ? AND `upass` = ?;";
        $st = $this->db->prepare($sql);
        $st->execute(array($u, $p));

        if ($st->rowCount() == 1) {
            return true;
        } else {
            false;
        }
    }
    function admin($u, $p)
    {
        $sql = "SELECT * FROM `admin` WHERE `name` = ? AND `pass` = ?;";
        $st = $this->db->prepare($sql);
        $st->execute(array($u, $p));

        if ($st->rowCount() == 1) {
            return true;
        } else {
            false;
        }
    }
    function del($d)
    {
        $sql = "DELETE FROM `rooms` WHERE `rid` = ?;";
        $st = $this->db->prepare($sql);
        $st->execute(array($d));

    }
    function fetchrooms()
    {
        $sql = "SELECT * FROM rooms;";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function fetchcus()
    {
        $sql = "SELECT * FROM bookings";
        $st = $this->db->prepare($sql);
        $st->execute(array());
        return $st;
    }
    function fetchsepecic($id)
    {
        $sql = "SELECT `rid`, `rpeople`, `ppd` FROM `rooms` WHERE `rid`=?;";
        $st = $this->db->prepare($sql);
        $st->execute(array($id));
        return $st;
    }

    function addcus($cname, $cno, $di, $do, $pay, $rid)
    {
        try {
            $sql = "INSERT INTO `bookings` (`cusid`, `cusname`, `cusno`, `datein`, `dateout`, `payment`,   `roomid`) VALUES (NULL,?, ?, ?,?,?,?);";
            $st = $this->db->prepare($sql);
            $st->execute(array($cname, $cno, $di, $do, $pay, $rid));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    function update($rid)
    {
        try {
            $sql = "UPDATE `rooms` SET `booked`= ? WHERE `rid` = ? ;";
            $y = "Yes";
            $st = $this->db->prepare($sql);
            $st->execute(array($y, $rid));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
// function fetchAllUsers()
// {
//     $sql = "SELECT * FROM users";
//     $st = $this->db->prepare($sql);
//     $st->execute(array());
//     return $st;
// }

// function deleteUser($id){
//     $sql = "DELETE FROM users WHERE uid = ?";
//     $st = $this->db->prepare($sql);
//     $st->execute(array($id));
// }
}

?>