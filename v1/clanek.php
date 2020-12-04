<?php
require 'assets/parts/header.php';
?>
    <div class="article-container">
        <div class="article-wrap container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">Most Carly Bridgesové opět v rekonstrukci</h1>
                        <hr>
                        <img alt="background" class="img-fluid" src="assets/img/background-article.png">
                    </div>
                    <div class="text">
                        <p>Jedna z architektonických perel Palomino Creek, most Carly Bridgesové, se již podruhé během posledních pěti let dočkal tolik zasloužené rekonstrukce. Stavba, která svůj původ datuje k roku 1921 ke starostovi Steven Bridgesovi jako náhrada za již vysloužilou dřevěnou lávku, v posledních letech neúspěšně bojovala se stále zvyšujícím se dopravním tokem vlivem růstu Palomino Creek, se tak dočkala rekonstrukce, tentokrát prováděné firmou Harrierovy rekonstrukce a renovace. Tato firma již dřívě prováděla rekonstrukci dálničních sjezdů z Interstate 36 směrem do Palomino Creek a ačkoliv se tato stavba pyšní do dnešních dnů značnou kontroverzí (zvýšení hluku v okolí obce a taktéž poněkud diskutabilní pozice sjezdu), byla dostavěná dokonce před stanoveným termínem. V tuto chvíli je na mostě Carly Bridgesové snížena maximální povolená rychlost na třicet kilometrů v hodině s předností v jízdě pro směr do Palomino Creek. Očekáváné dokončení rekonstrukce je koncem listopadu tohoto roku.</p>
                    </div>
                    <p class="text-center">
                        <span class="by">by</span>
                        <a href="#">Joey Barnett</a>
                        <span class="date">29.10.2020 01:06</span>
                    </p>
                    <h3 class="evaluation text-center">Hodnocení článku</h3>
                    <hr>
                    <div class="rating-row border rounded">
                        <div class="rating-stars stars float-right d-inline">
                            <i class="fa fa-star star-checked"></i>
                            <i class="fa fa-star star-checked"></i>
                            <i class="fa fa-star star-checked"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="rating-stars-left">
                            <div class="d-inline rating-name">Michael Halberstadt</div>
                            <div class="d-inline rating-date">24.11.2020 21:02</div>
                        </div>
                        <p class="rating-text">
                            <span style="color:green" class="fa fa-plus-circle"><span class="font-ssp-ss"> Perfektní článek</span></span>
                            <br>
                            <span style="color:red" class="fa fa-minus-circle"><span class="font-ssp-ss"> Psal to toust</span></span>
                        </p>
                    </div>
                    <div class="rating-row border rounded">
                        <div class="rating-stars stars float-right d-inline">
                            <i class="fa fa-star star-checked"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="rating-stars-left">
                            <div class="d-inline rating-name">Ryan Sherwood</div>
                            <div class="d-inline rating-date">24.11.2020 22:02</div>
                        </div>
                        <p class="rating-text">
                            <span style="color:green" class="fa fa-plus-circle"><span class="font-ssp-ss"> NOTHING</span></span>
                            <br>
                            <span style="color:red" class="fa fa-minus-circle"><span class="font-ssp-ss"> Neudělám ti BACK-END frajere</span></span>
                        </p>
                    </div>
                    <div class="rating-row border rounded">
                        <div class="rating-stars stars float-right d-inline">
                            <i class="fa fa-star star-checked"></i>
                            <i class="fa fa-star star-checked"></i>
                            <i class="fa fa-star star-checked"></i>
                            <i class="fa fa-star star-checked"></i>
                            <i class="fa fa-star star-checked"></i>
                        </div>
                        <div class="rating-stars-left">
                            <div class="d-inline rating-name">Michael Halberstadt</div>
                            <div class="d-inline rating-date">24.11.2020 21:02</div>
                        </div>
                        <p class="rating-text">
                            <span style="color:green" class="fa fa-plus-circle"><span class="font-ssp-ss"> To teda uděláš ty sráči !</span></span>
                            <br>
                            <span style="color:red" class="fa fa-minus-circle"><span class="font-ssp-ss"> Prostě nic ty sráči !</span></span>
                            <br>
                            <span class="rating-message">Web jako takový se mi moc nelíbí, jelikož ho dělal pročko a ho moc nemám rád, protože metuje a má špatnou osobnost, jak by řekl lofanek. Takže članek se mi líbí, ale web ne.</span>
                        </p>
                    </div>
                    <form class="stars-form" style="text-align: center;" method="get">
                        <h3 class="text-center">Hodnocení</h3><hr>
                        <div class="rating-stars stars text-center">
                            <input type="radio" id="five" name="rate" value="5">
                            <label for="five"></label>
                            <input type="radio" id="four" name="rate" value="4">
                            <label for="four"></label>
                            <input type="radio" id="three" name="rate" value="3">
                            <label for="three"></label>
                            <input type="radio" id="two" name="rate" value="2">
                            <label for="two"></label>
                            <input type="radio" id="one" name="rate" value="1">
                            <label for="one"></label>
                            <span class="result"></span>
                        </div>
                        <div id="float-cons" class="col-sm-6 form-group"><textarea class="form-control" name="pros" placeholder="Pros" rows="5" ></textarea></div>
                        <div class="col-sm-6 form-group"><textarea class="form-control" name="cons" placeholder="Cons" rows="5" ></textarea></div>
                        <div class="col-sm-12 form-group"><textarea class="form-control" name="message" placeholder="Evalution" rows="5"></textarea></div>
                        <div class="form-group"><button class=" btn btn-primary" type="submit">SEND </button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require 'assets/parts/footer.php';
?>
