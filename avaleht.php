<?php
include 'templates/header.php';
include 'settings.php';

try {
    $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
    $connection->exec("SET NAMES utf8");
    $sql = 'SELECT * FROM `ilm_ds18_out_east` ORDER By added DESC LIMIT 1
    ';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    //show($result); // Testiks
} catch (PDOException $error) {
    echo $error->getMessage();
}
try {
    $connection = new PDO($dsn, USERNAME, PASSWORD, $options);
    $connection->exec("SET NAMES utf8");
    $sql = 'SELECT * FROM `ilm_ds18_out_west` ORDER By added DESC LIMIT 1
    ';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result2 = $statement->fetch(PDO::FETCH_ASSOC);
    //show($result2); // Testiks
} catch (PDOException $error) {
    echo $error->getMessage();
}


?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            include 'templates/navbar.php'
            ?>
            <div class="row mt-2">
                <div class="col-2">
                </div>
                <div class="col-8 text-center">
                    <?php $result2['added'] = date('d.m.Y H:i:s', strtotime($result2["added"])); ?>
                    Viimati mõõdetud <?php echo $result2['added'] ?>

                    <div class="row mt-5">
                        <div class="col-6">
                            <p>IDAS: <?php echo round((($result['celsius'])), 1, PHP_ROUND_HALF_UP); ?>°C </p><br>
                            <i class="fa-solid fa-sun"></i><i class="fa-solid fa-arrow-up"></i><p class="text-success"><?php echo $sunrise ?></p>
                        </div>
                        <div class="col-6">
                            <p>LÄÄNES: <?php echo round((($result2['celsius'])), 1, PHP_ROUND_HALF_UP); ?> °C </p><br>
                            <i class="fa-solid fa-sun"></i><i class="fa-solid fa-arrow-down"></i><p class="text-danger"><?php echo $sunset ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
include 'templates/footer.php'
?>