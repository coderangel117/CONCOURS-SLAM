<?php
require_once __DIR__ . '/../bdd/Connexion.class.php';
/**
 * @param $sql // represents the SQL query
 * @param mixed $parameters // represents the parameters of the query if exist
 * @param string $type // represents the type of SQL query among the 4 propositions : select /update / insert / delete
 * @return bool|PDOStatement|void
 */
function Request($sql, $parameters, string $type = "select")
{
    if (isset($_SESSION) && !empty($_SESSION)) {
        if ($_SESSION['role'] == "administrateur") {
            $connexion_admin = new Connexion("root", "");
            $connexion = $connexion_admin->getConnexion();
        } else {
            if ($type !== "select") {
                if ($type == "update") {
                    $set = strpos($sql, "SET");
                    $pass = strpos($sql, "password", $set);
                    $testarray = strpos($sql, "test_stage.utilisateur");
                    if (is_bool($testarray) or is_bool($pass)) {
                        die("Vous n'avez pas les droits pour cette action ");
                    }
                }
            }
            $connexion_user = new Connexion("user", "user");
            $connexion = $connexion_user->getConnexion();
        }
        if ($type !== "select") {
            $requete = $connexion->prepare($sql);
            return $requete->execute($parameters);
        } else {
            if ($parameters == []) {

                return $connexion->query($sql);
            } else {
                try {
                    $requete = $connexion->prepare($sql);
                    $requete->execute($parameters);
                    return $requete;
                } catch (Exception $e) {
                    echo 'there is a problem with the select parameters' . $e->getMessage();
                }
            }
        }
    } else {
        die("pas de session pas de requete ...");
    }
}
