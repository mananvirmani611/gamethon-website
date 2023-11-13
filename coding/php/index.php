<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <!-- bootstrap 5.2v cdn for css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <!-- css file -->
  <link rel="stylesheet" href="cssFiles/web.css">

  <!-- dosis font cdn -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- font awesome fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- flickity slider cdn -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

</head>

<body>



<section id="body-except-footer">

    <?php include 'header.php'; ?>

    <!-- CELEBRIY + USP SECTION -->
    <section id="celebrity-usp-section">
      <div class="celebrity-usp">
        <div class="row">

          <div class="col-lg-6">
            <iframe width="100%;" height="300px" id="celebrity-video" src="https://youtube.com/embed/bNlRuc9mbso" title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="col-lg-2 col-md-3 col-6 usp-buttons-wrapper">
            <div class="usp-buttons" id="first-usp">
              <div class="usp-heading">
                Team Provider Exchange
              </div>
              <div class="additional-usp-div">

              </div>
              <div class="bottom-usp-div">
                <button type="button" class="btn btn-outline know-more-button" id="know-more-button-1" name="button"><a href="https://www.naya11.com/fantasy-team-provider" class="know-more-link">Know More</a>  </button>
                <a href="#" class="fa fa-youtube-play yt-specific-button" onClick="MyWindow=window.open('https://www.youtube.com/watch?v=HPytBIKUD-k&ab_channel=PeterMcKinnon','MyWindow','width=600,height=300'); return false;"></a>

              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 usp-buttons-wrapper">
            <div class="usp-buttons" id="second-usp">
              <div class="usp-heading">
                MVP Contest
              </div>
              <div class="additional-usp-div">

              </div>
              <div class="bottom-usp-div">
                <button type="button" class="btn btn-outline know-more-button" id="know-more-button-2" name="button"><a href="https://www.naya11.com/fantasy-team-provider" class="know-more-link">Know More</a> </button>
                <a href="#" class="fa fa-youtube-play yt-specific-button" onClick="MyWindow=window.open('https://www.youtube.com/watch?v=HPytBIKUD-k&ab_channel=PeterMcKinnon','MyWindow','width=600,height=300'); return false;"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 usp-buttons-wrapper">
            <div class="usp-buttons" id="third-usp">
              <div class="usp-heading">
                Leaderboard Schemes
              </div>
              <div class="additional-usp-div">

              </div>
              <div class="bottom-usp-div">
                <button type="button" class="btn btn-outline know-more-button" id="know-more-button-3" name="button"><a href="https://www.gamethon.live/" class="know-more-link">Know More</a> </button>
                <a href="#" class="fa fa-youtube-play yt-specific-button" onClick="MyWindow=window.open('https://www.youtube.com/watch?v=HPytBIKUD-k&ab_channel=PeterMcKinnon','MyWindow','width=600,height=300'); return false;"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 usp-buttons-wrapper">
            <div class="usp-buttons" id="fourth-usp">
              <div class="usp-heading">
                Fourth USP
              </div>
              <div class="additional-usp-div">

              </div>
              <div class="bottom-usp-div">
                <button type="button" class="btn btn-outline know-more-button" id="know-more-button-4" name="button">Know More</button>
                <a href="#" class="fa fa-youtube-play yt-specific-button" onClick="MyWindow=window.open('https://www.youtube.com/watch?v=HPytBIKUD-k&ab_channel=PeterMcKinnon','MyWindow','width=600,height=300'); return false;"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- OTHER USP SECTION -->
    <section id="other-usp-section">
      <div class="other-usp-section">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-6 other-usp-wrapper">
            <div class="other-usp-image">
              <img src="images/other-usp/0.webp" style="width:100%;" alt="" class="other-usp-images">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 other-usp-wrapper">
            <div class="other-usp-image">
              <img src="images/other-usp/1.webp" style="width:100%;" alt="" class="other-usp-images">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 other-usp-wrapper">
            <div class="other-usp-image">
              <img src="images/other-usp/2.webp" style="width:100%;" alt="" class="other-usp-images">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 other-usp-wrapper">
            <div class="other-usp-image">
              <img src="images/other-usp/3.webp" style="width:100%;" alt="" class="other-usp-images">
            </div>
          </div>


        </div>
      </div>

    </section>

    <!-- GAMES AND SCHEMES SECTION -->
    <section id="games-schemes-section">
      <div class="games-schemes-division">
        <div class="row">
          <div class="col-lg-6 games-schemes-wrapper">
            <div class="games-schemes game-wrapper">
              <div class="games-schemes-heading header-bg">
                Games
              </div>
              <?php include 'games.php'; ?>
            </div>
          </div>
          <div class="col-lg-6 games-schemes-wrapper">
            <div class="games-schemes schemes-wrapper">
              <div class="games-schemes-heading header-bg">
                Schemes
              </div>
              <div class="games-schemes-lower">
                <div id="schemes-carousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/schemes-carousel/0.webp" class="d-block w-100 scheme-images" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/schemes-carousel/1.webp" class="d-block w-100 scheme-images" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="images/schemes-carousel/2.webp" class="d-block w-100 scheme-images" alt="...">
                    </div>
                  </div>
                  <button class="carousel-control-prev control-buttons-schemes" type="button" data-bs-target="#schemes-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next control-buttons-schemes" type="button" data-bs-target="#schemes-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>

                  <div class="carousel-indicators schemes-carousel-indicators">
                    <button type="button" data-bs-target="#schemes-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#schemes-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#schemes-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FANTASY EXPERTS AND CLONE TEAM DIVISION -->
    <section id="fantasy-cloneteam-section">
      <div class="fantasy-cloneteam-division">
        <div class="row">
          <div class="col-lg-6 fantasy-cloneteam-wrapper">
            <div class="fantasy-cloneteams-heading header-bg">
              Fantasy Experts
            </div>
            <div class="fantasy-cloneteams-lower">
              <img src="images/fantasy-cloneteam/0.webp" alt="" class="fantasy-cloneteam-image">
            </div>
          </div>
          <div class="col-lg-6 fantasy-cloneteam-wrapper">
            <div class="fantasy-cloneteams-heading header-bg">
              Clone Teams
            </div>
            <div class="fantasy-cloneteams-lower">
              <img src="images/fantasy-cloneteam/1.webp" alt="" class="fantasy-cloneteam-image">
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- TESTIMONIALS SECTION -->
    <section id="testimonial-section">
      <div class="testimonial-division">
        <div class="testimonial-heading header-bg">
          Testimonials
        </div>
        <div class="lower-testimonial-div">
          <div class="testimonial-carousel" data-flickity='{ "freeScroll": true, "wrapAround": true }'>
            <div class="testimonial-carousel-cell">
              <div class="row">
                <div class="left-image-wrapper">
                  <img src="https://www.naya11.com/desktop_assets/img/shrikant%20londhe.webp" alt="" class="left-image">
                </div>
                <div class="right-name-wrapper" class="right-name">
                  <span class="testimonial-name">Shrikant</span><br>
                  <span class="testimonial-state">Maharashtra</span>
                </div>
              </div>
              <div class="row">
                <span class="testimonial-text">I have won over Rs. 80000/- playing on Gamethon since the last IPLs. I got 1st rank on the leaderboard contest. I play daily. I have been getting top rank most of the time in contests. There are no
                  Bots.</span>
              </div>
            </div>
            <div class="testimonial-carousel-cell">
              <div class="row">
                <div class="row">
                  <div class="left-image-wrapper">
                    <img src="https://www.naya11.com/desktop_assets/img/deepak%20maurya.webp" alt="" class="left-image">
                  </div>
                  <div class="right-name-wrapper" class="right-name">
                    <span class="testimonial-name">Deepak Maurya</span><br>
                    <span class="testimonial-state">Maharashtra</span>
                  </div>
                </div>
                <div class="row">
                  <span class="testimonial-text">I have played on Gamethon since last 2 IPLs. I have won over Rs. 40000/- in IPLs and also in the contests. I play Daily and withdraw weekly.</span>
                </div>
              </div>
            </div>
            <div class="testimonial-carousel-cell">
              <div class="row">
                <div class="left-image-wrapper">
                  <img src="https://www.naya11.com/desktop_assets/img/nagaraj.webp" alt="" class="left-image">
                </div>
                <div class="right-name-wrapper" class="right-name">
                  <span class="testimonial-name">Nagaraj</span><br>
                  <span class="testimonial-state">Karnataka</span>
                </div>
              </div>
              <div class="row">
                <span class="testimonial-text">I have won over Rs. 1,00,000/- playing at gamethon. I have won 1st rank in IPL leaderboard and also getting top rank in contest. No Bots only real people.</span>
              </div>
            </div>
            <div class="testimonial-carousel-cell">
              <div class="row">
                <div class="row">
                  <div class="left-image-wrapper">
                    <img src="https://www.naya11.com/desktop_assets/img/deepak%20maurya.webp" alt="" class="left-image">
                  </div>
                  <div class="right-name-wrapper" class="right-name">
                    <span class="testimonial-name">Deepak Maurya</span><br>
                    <span class="testimonial-state">Maharashtra</span>
                  </div>
                </div>
                <div class="row">
                  <span class="testimonial-text">I have played on Gamethon since last 2 IPLs. I have won over Rs. 40000/- in IPLs and also in the contests. I play Daily and withdraw weekly.</span>
                </div>
              </div>
            </div>
            <div class="testimonial-carousel-cell">
              <div class="row">
                <div class="left-image-wrapper">
                  <img src="https://www.naya11.com/desktop_assets/img/nagaraj.webp" alt="" class="left-image">
                </div>
                <div class="right-name-wrapper" class="right-name">
                  <span class="testimonial-name">Nagaraj</span><br>
                  <span class="testimonial-state">Karnataka</span>
                </div>
              </div>
              <div class="row">
                <span class="testimonial-text">I have won over Rs. 1,00,000/- playing at gamethon. I have won 1st rank in IPL leaderboard and also getting top rank in contest. No Bots only real people.</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- SEO SECTION -->
    <section id="seo-section">
      <div class="seo-division">
        <div class="seo-text">
          <h3>Play Online Games & Earn a Chance to Win Amazing Cash Prices Right Now!
          </h3>
          <div class="internal-seo-text">Gamethon is one of the best websites where you can not only play free online games but also win money by playing these games. Yes! You heard that right. Gamethon has a brilliant set of online games to play
            with
            friends and share the bounty between everyone. If you are looking for a way in which you can play games to earn money, then Gamethon is an authentic way of doing so. For anyone who has some off time during the day, they can sign up to
            the
            website and start earning money right away.

            Gamethon hosts widely popular games like Solitaire and 8 Ball Pool. That is why you might already be accustomed to playing them. But, who could have thought that you'll win real rewards and big cash from these games? You can play all
            the
            games online without any need to download them on your device. That's why you'll save a lot of space as well. They also host all kinds of tournaments and battles that help you gain some extra bonus regularly.
          </div>
          <div id="seo-description" style="text-align:center; margin-top:2%;">
            <div class="text-1 show-more-height-1" style="text-align:center;">
              <h3>Why Choose Naya11 Fantasy Cricket App and Fantasy Football App?
                </h1>
                <div class="internal-seo-text">
                  You might be thinking that there will be several other apps that offer the same services, right? But why should you choose the Naya11 Fantasy Cricket App and Fantasy Football App? Let's find that out.
                  Attractive Prize Pools - No Bots Playing. Most important Real People get top ranks.
                  Fixed Per Rank Prize Contest. Per Rank Prize Fixed ecen if less people join.
                  Leaderboards every league, every month
                  Daily Earning Schemes, Monthly Earnings Schemes and cash backs on Entry Fees
                  Group Contest - Combine with your friend as a team. Divide the entry fee and share the winnings
                  Fastest Redeem process - Redeem Winnings within minutes.
                  Redeem large amounts.
                  Most Trusted Fantasy Sports App because Real People get Top Ranks.
                  Naya11 Fantasy Cricket App and Fantasy Football App is the trusted app in India with high win percentage, fastest redeem, safe and secure and different categories for maximizing winnings.

                  So, what are you waiting for? Start playing on Naya11 Fantasy Cricket App, and you can win exciting rewards and cash prizes from now! You can opt for Naya11 apk download or visit their website and play and win all year round
                </div>
            </div>

            <div class="" style="text-align:right;">
              <div class="show-more-1" style="border-radius:2px;">Know More</div>
            </div>
          </div>
        </div>
      </div>
    </section>

</section>

<?php include 'footer.php'; ?>




  <!-- STICKY DOWNLOAD BUTTONS -->
  <button type="button" name="button" class="btn btn-outline download-button" id="sticky-download-button">Application for Android <a href="#" class="fa fa-download" id="sticky-download-icon"></a> </button>
  <a href="https://telegram.me/Gamethon_support_bot" class="fa fa-comment" id="sticky-chat-button"></a>

  <!-- js and jquery scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script src="jsFiles/index.js"></script>


  <!-- flickity slider cdn -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <!-- bootstrap 5.2v cdn for js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
