<?php

//class Fruit
//{
//
//    private $conn;
//    private $db_table = "Fruit";
//
//    public $id;
//    public $name;
//    public $season;
//    public $state;
//    public $supply;
//    public $cost;
//
//    public function __construct($db) {
//        $this->conn = $db;
//    }
//
//    public function getFruitImports() {
//        $sqlQuery = "SELECT id, name, season, state, supply, cost FROM " . $this->db_table;
//        $stmt = $this->conn->prepare($sqlQuery);
//        $stmt->execute();
//        return $stmt;
//    }
//
//    public function createFruitImport() {
//        $sqlQuery = "INSERT INTO " . $this->db_table . "
//                    SET
//                        name = :name,
//                        season = :season,
//                        state = :state,
//                        supply = :supply,
//                        cost = :cost";
//
//        $stmt = $this->conn->prepare($sqlQuery);
//
//        $this->name = htmlspecialchars(strip_tags($this->name));
//        $this->season = htmlspecialchars(strip_tags($this->season));
//        $this->state = htmlspecialchars(strip_tags($this->state));
//        $this->supply = htmlspecialchars(strip_tags($this->supply));
//        $this->cost = htmlspecialchars(strip_tags($this->cost));
//
//        $stmt->bindParam(":name", $this->name);
//        $stmt->bindParam(":season", $this->season);
//        $stmt->bindParam(":state", $this->state);
//        $stmt->bindParam(":supply", $this->supply);
//        $stmt->bindParam(":cost", $this->cost);
//
//        if ($stmt->execute()) {
//            return true;
//        }
//        return false;
//    }
//
//    public function getSingleFruitImport() {
//        $sqlQuery = "SELECT id, name, season, state, supply, cost
//                    FROM " . $this->db_table . "
//                    WHERE id = ?
//                    LIMIT 0,1";
//
//        $stmt = $this->conn->prepare($sqlQuery);
//        $stmt->bindParam(1, $this->id);
//        $stmt->execute();
//
//        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
//
//        $this->name = $dataRow['name'];
//        $this->season = $dataRow['season'];
//        $this->state = $dataRow['state'];
//        $this->supply = $dataRow['supply'];
//        $this->cost = $dataRow['cost'];
//    }
//
//    public function updateFruitImport() {
//        $sqlQuery = "UPDATE " . $this->db_table . "
//                    SET
//                        name = :name,
//                        season = :season,
//                        state = :state,
//                        supply = :supply,
//                        cost = :cost
//                    WHERE
//                        id = :id";
//
//        $stmt = $this->conn->prepare($sqlQuery);
//
//        $this->name = htmlspecialchars(strip_tags($this->name));
//        $this->season = htmlspecialchars(strip_tags($this->season));
//        $this->state = htmlspecialchars(strip_tags($this->state));
//        $this->supply = htmlspecialchars(strip_tags($this->supply));
//        $this->cost= htmlspecialchars(strip_tags($this->cost));
//        $this->id = htmlspecialchars(strip_tags($this->id));
//
//        $stmt->bindParam(":name", $this->name);
//        $stmt->bindParam(":season", $this->season);
//        $stmt->bindParam(":state", $this->state);
//        $stmt->bindParam(":supply", $this->supply);
//        $stmt->bindParam(":cost", $this->cost);
//        $stmt->bindParam(":id", $this->id);
//
//        if ($stmt->execute()) {
//            return true;
//        }
//        return false;
//    }
//
//    public function deleteFruitImport() {
//        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
//        $stmt = $this->conn->prepare($sqlQuery);
//
//        $this->id = htmlspecialchars(strip_tags($this->id));
//
//        $stmt->bindParam(1, $this->id);
//
//        if ($stmt->execute()) {
//            return true;
//        }
//        return false;
//    }
//
//
//}

class Fruit{
    private $conn;
    private $db_table = "Fruit";

    public $id;
    public $name;
    public $season;
    public $state;
    public $supply;
    public $cost;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getFruitImports() {
        $sqlQuery = "SELECT id, name, season, state, supply, cost FROM " . $this->db_table;
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function createFruitImport() {
        $sqlQuery = "INSERT INTO " . $this->db_table . "
                    SET
                        name = :name,
                        season = :season,
                        state = :state,
                        supply = :supply,
                        cost = :cost";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->season = htmlspecialchars(strip_tags($this->season));
        $this->state = htmlspecialchars(strip_tags($this->state));
        $this->supply = htmlspecialchars(strip_tags($this->supply));
        $this->cost_per_unit = htmlspecialchars(strip_tags($this->cost_per_unit));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":season", $this->season);
        $stmt->bindParam(":state", $this->state);
        $stmt->bindParam(":supply", $this->supply);
        $stmt->bindParam(":cost", $this->cost);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function getSingleFruitImport() {
        $sqlQuery = "SELECT id, name, season, state, supply, cost
                    FROM " . $this->db_table . "
                    WHERE id = ?
                    LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $dataRow['name'];
        $this->season = $dataRow['season'];
        $this->state = $dataRow['state'];
        $this->supply = $dataRow['supply'];
        $this->cost = $dataRow['cost'];
    }

    public function updateFruitImport() {
        $sqlQuery = "UPDATE " . $this->db_table . "
                    SET
                        name = :name,
                        season = :season,
                        state = :state,
                        supply = :supply,
                        cost = :cost
                    WHERE
                        id = :id";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->season = htmlspecialchars(strip_tags($this->season));
        $this->state = htmlspecialchars(strip_tags($this->state));
        $this->supply = htmlspecialchars(strip_tags($this->supply));
        $this->cost = htmlspecialchars(strip_tags($this->cost));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":season", $this->season);
        $stmt->bindParam(":state", $this->state);
        $stmt->bindParam(":supply", $this->supply);
        $stmt->bindParam(":cost", $this->cost);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function deleteFruitImport() {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}


?>