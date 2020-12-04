<?php
    require 'assets/parts/header.php';
?>
    <div id="article" class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Zde jsou články</h2>
                <hr>
            </div>
            <div class="row articles">
                <div class="article-border col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/background-article.png"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="article-border col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/background-article.png"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
                    <a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
	            <div class="article-border col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/background-article.png" /></a>
	                <h3 class="name">Article Title</h3>
	                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
	                <a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
	            </div>
    		</div>
    	</div>
    </div>
    <div id="benefit" class="recruitment-conditions">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Výhody</h2>
                <hr>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">Průměrný plat přes 30,000CZK</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">Prémie na základě dobře odvedené práce</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">Možnost rychlého kariérního růstu</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">Kvalitní zázemí</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">Klauzová pracovní doba</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item">
                    <h3 class="name">Pracovní benefity</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="contact">
        <form name="form" method="post" onsubmit="return validateForm()">
            <h2 class="text-center">Máš zájem o práci ?<br> Kontaktuj nás</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="Phone" placeholder="Phone"></div>
            <div class="form-group"><input class="form-control" type="date" name="birthday" placeholder="Birthday"></div>
            <div class="form-group"><input class="form-control" type="text" name="permanent-residence" placeholder="Permanent residence"></div>
            <div class="form-group"><input class="form-control" type="text" name="place-of-birth" placeholder="Place of birth"></div>
            <div class="form-group"><input class="form-control" type="text" name="education" placeholder="Education"></div>
            <div class="form-group"><input class="form-control" type="text" name="practice" placeholder="Practice"></div>
            <div class="form-group">
                <select class="form-control">
                    <option value="" disabled selected>Position</option>
                    <option value="moderator">Moderátor</option>
                    <option value="redaktor">Redaktor</option>
                    <option value="technik">Technik</option>
                </select>
            </div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Something about me" rows="14"></textarea></div>
            <div class="form-group text-center"><button class=" btn btn-primary" type="submit">POSLAT </button></div>
        </form>
    </div>
<?php
    require 'assets/parts/footer.php';
?>