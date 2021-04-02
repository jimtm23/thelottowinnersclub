<header class="top-margin">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="/images/banner1.png" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3>First Slide</h3>
          <p>This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080/7B1000/ECAB28?text=The+Lotto+Winners+Club+Banner2')">
        <div class="carousel-caption d-none d-md-block">
          <h3>Second Slide</h3>
          <p>This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080/7B1000/ECAB28?text=The+Lotto+Winners+Club+Banner3')">
        <div class="carousel-caption d-none d-md-block">
          <h3>Third Slide</h3>
          <p>This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!-- Page Content -->
<div class="container">

  <!-- Portfolio Section -->
  <div class="row lotto-result justify-content-md-center">
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="/draw/game/powerball"><img class="card-img-top" src="images/powerball.png" alt=""></a>
        <div class="card-body text-center">
          <div class="winning_numbers">
            <ul class="balls">
              <?php foreach ($results['pbWinArr'] as $row => $rowValue) { ?>
                <li><?= $rowValue ?></li>
              <?php } ?>

              <li class="active"><?= $results['pbWinningBall'] ?></li>
            </ul>
            <span class="winner-num-title"><?= $results['pbDrawDate'] ?> Winning numbers</span>
          </div>
          <p class="next-draw">Next draw on <?= $results['pbStrNextDrawDate'] ?> in <br><span id="remainTime1"></span></p>
          <h2 class="jackpot-prize">
            <span>Estimated Jackpot</span>
            <span>$<?= $results['pbNextJackpotAmount'] ?></span>
          </h2>
        </div>
        <div class="card-footer text-center">
          <a href="#" class="btn lwc-btn">Play Power Ball</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="/draw/game/megamillions"><img class="card-img-top" src="images/Megamillions.png" alt=""></a>
        <div class="card-body text-center">
          <div class="winning_numbers">
            <ul class="balls">
              <?php foreach ($results['mmWinArr'] as $row => $rowValue) { ?>
                <li><?= $rowValue ?></li>
              <?php } ?>

              <li class="active"><?= $results['mmWinningBall'] ?></li>
            </ul>
            <span class="winner-num-title"><?= $results['mmDrawDate'] ?> Winning numbers</span>
          </div>
          <p class="next-draw">Next draw on <?= $results['mmStrNextDrawDate'] ?> in <br><span id="remainTime1"></span></p>
          <h2 class="jackpot-prize">
            <span>Estimated Jackpot</span>
            <span>$<?= $results['mmNextJackpotAmount'] ?></span>
          </h2>
        </div>
        <div class="card-footer text-center">
          <a href="#" class="btn lwc-btn">Play Mega Million</a>
        </div>
      </div>
    </div>

  </div>


</div>