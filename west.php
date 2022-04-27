<?php
include 'templates/header.php';
include 'settings.php';

if (isset($_POST['date'])) {
    //show($_POST['date']);
    $date4 = date('d.m.Y', strtotime($_POST['date']));
    $date1 = date('d', strtotime($_POST['date']));
    $date2 = date('m', strtotime($_POST['date']));
    $date3 = date('Y', strtotime($_POST['date']));

    //show($date1);
    //show($date2);
    //show($date3);
    //show($date4);

    try {
        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
        $connection->exec("SET NAMES utf8");
        $sql2 = 'SELECT id, celsius, SECOND(added), MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE IF(4 < MINUTE(added) >= 0,5 ,0) AND DAY(added) = ' . $date1 . ' AND Month(added) = ' . $date2;
        $statement = $connection->prepare($sql2);
        $statement->execute();
        $result3 = $statement->fetchAll();
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
//show($result3);


?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <?php
            include 'templates/navbar.php';

            if (isset($_POST['date'])) {
                echo "Valitud päeva: " . date('d.m.Y', strtotime($_POST['date'])) . " temperatuurid";
            } else {
                echo "Päeva pole valitud";
            }
            ?>

            <div class="row mt-2">
                <div class="col-4 ">
                    <form action="" method="post">
                        Vali päev
                        <input type="text" name="date" value="" class="form-control" required id="date" />
                        <input type="submit" value="Kinnita kuupäev" class="form-control btn-primary mt-2" />
                    </form>
                </div>

                <div class="col-8 text-center ">
                    <Table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>KELL</th>
                                <th>2017</th>
                                <th>2018</th>
                                <th>2019</th>
                                <th>2020</th>
                                <th>2021</th>
                                <th>2022</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            ?>
                            <tr>
                                <th>06:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 6 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 6 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])){
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 6 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }
                                }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 6 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 6 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 6 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>07:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 7 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 7 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 7 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 7 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 7 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 7 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>08:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 8 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 8 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 8 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 8 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 8 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 8 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>09:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 9 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 9 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 9 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 9 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 9 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 9 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>12:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 12 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 12 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 12 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 12 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 12 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 12 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>13:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 13 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 13 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 13 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 13 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 13 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 13 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>14:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 14 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 14 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) =14 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 14 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 14 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 14 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>15:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 15 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 15 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 15 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 15 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 15 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 15 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>19:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 19 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 19 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 19 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 19 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 19 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 19 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>20:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 20 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 20 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 20 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 20 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 20 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 20 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>21:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 21 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 21 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 21 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 21 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 21 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 21 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>22:00</th>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 22 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2017';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 22 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2018';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 22 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2019';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 22 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2020';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 22 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2021';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (isset($_POST['date'])) {
                                    try {
                                        $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
                                        $connection->exec("SET NAMES utf8");
                                        $sql4 = 'SELECT id, celsius, MINUTE(added), HOUR(added), YEAR(added), Month(added), DAY(added) FROM ilm_ds18_out_west WHERE MONTH(added) = ' . $date2 . ' AND DAY(added) = ' . $date1 . ' AND HOUR(added) = 22 AND MINUTE(added) BETWEEN 0 AND 4 AND YEAR(added) = 2022';
                                        $statement = $connection->prepare($sql4);
                                        $statement->execute();
                                        $result4 = $statement->fetchAll();
                                        if ($result4) {
                                            echo ($result4[0]['celsius']);
                                        } else {
                                            echo " ";
                                        }
                                    } catch (PDOException $error) {
                                        echo $error->getMessage();
                                    }}
                                    ?>
                                </td>
                            </tr>
                            <?php

                            ?>
                        </tbody>
                    </Table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    $(function() {
        $("#date").datepicker({
            dateFormat: "yy-mm-dd", // Kuupäeva vorming
            maxDate: 0, /* Tuleviku kuupäevi ei saa lisada */
            minDate: "2016-05-29",
            
        }).datepicker("setDate", new Date());

    });
</script>
<?php
include 'templates/footer.php';
?>