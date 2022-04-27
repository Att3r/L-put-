<?php
include 'templates/header.php';
include 'settings.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            include 'templates/navbar.php'
            ?>
            <div class="row mt-2">
                <div class="col-4 text-center">
                    <div>
                        <span class="player">Raadio Elmar</span>
                        <audio play="" controls="" style="width:100%; height:50px; background-color:#b5bed1;" src="https://router.euddn.net/8103046e16b71d15d692b57c187875c7/elmar.aac" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div>
                        <span class="player">Retro FM</span>
                        <audio play="" controls="" style="width:100%; height:50px; background-color:#b5bed1;" src="https://skymedia-live.bitflip.ee/RETRO" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div>
                        <span class="player">Viker Raadio</span>
                        <audio play="" controls="" style="width:100%; height:50px; background-color:#b5bed1;" src="http://icecast.err.ee:80/vikerraadio.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php
include 'templates/footer.php'
?>