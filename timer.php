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
                <div class="col-2">
                </div>
                <div class="col-8 text-center">
                    SIIA TULEB TIMER
                    <div class="row mt-2">
                        <div class="col-4">
                        </div>
                        <div class="col-4">
                            <label class="fw-bold">Aeg</label>
                            <select name="time" class="form-select" required>
                                <option value="00:05">00:05</option>
                                <option value="00:10">00:10</option>
                                <option value="00:15">00:15</option>
                                <option value="00:20">00:20</option>
                                <option value="00:25">00:25</option>
                                <option value="00:30">00:30</option>
                                <option value="00:35">00:35</option>
                                <option value="00:40">00:40</option>
                                <option value="00:45">00:45</option>
                                <option value="00:50">00:50</option>
                                <option value="00:55">00:55</option>
                                <option value="00:60">00:60</option>
                            </select>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                        </div>
                        <div class="col-4">
                            <a href="" class="btn btn-danger" role="button" aria-pressed="true">Käivita timer</a>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                        </div>
                        <div class="col-8 text-center">
                            <audio controls="true" preload="none">
                                <source src="">
                            </audio>
                        </div>
                        <div class="col-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                        </div>
                        <div class="col-6">                         
                            <label><input type="radio" name="contact_email" value="email"> Heli1 </label><br>
                            <label><input type="radio" name="contact_email" value="email"> Heli2 </label><br>
                            <label><input type="radio" name="contact_email" value="email"> Heli3 </label><br>
                            <label><input type="radio" name="contact_email" value="email"> Heli4 </label><br>
                        </div>
                        <div class="col-3">
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