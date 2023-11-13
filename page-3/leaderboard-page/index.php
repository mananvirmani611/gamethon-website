<!DOCTYPE html>
<html lang="en" dir="ltr" style="min-width:fit-content;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="./cssFiles/web.css">
</head>
<style media="screen">
  .col-sm-12.col-md-6 {
    width: 20% !important;
  }
</style>

<body style="width:100%;">
  <?php include "header.php"; ?>



  <div id="body-except-footer">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://www.naya11.com/admin/uploads/offers/LEADERBOARD.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.naya11.com/admin/uploads/offers/LEADERBOARD.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.naya11.com/admin/uploads/offers/LEADERBOARD.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="" style="text-align:center; background-color:; color:white; padding:2%;">
        <h2>Leaderboard Contest | World Cup | IPL</h2>
        <a href="#">
            <button type="button" name="button" style="padding:0.5%; border-radius:5px; background-color:#3c436b; color:white; border:white;">DOWNLOAD TO PLAY WITH REAL PEOPLE</button>
        </a>
    </div>
    <div class="table-div" style="margin-top:3%; border:1px solid; padding:1%;">
      <ul class="nav nav-tabs" id="mainTab" role="tablist" style="width:100%;">
        <li class="nav-item" role="presentation" style="width:50%;">
          <button class="nav-link active" id="home-tab" style="width:100%;" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Ongoing Leaderboard</button>
        </li>
        <li class="nav-item" role="presentation" style="width:50%;">
          <button class="nav-link" id="profile-tab" style="width:100%;" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Completed Leaderboard</button>
        </li>
      </ul>
      <div class="tab-content" id="mainTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

          <!-- ongoing leaderboard content -->


          <select class="div-toggle-1 dropdown-menu-ongoing" data-target=".my-info-1">
            <option data-show=".ongoing-one">Womens T20 2023</option>
            <option data-show=".ongoing-two">ABC Tournament</option>
          </select>

          <div class="my-info-1">
            <div class="ongoing-one hide">
              <table id="ongoing-table-1" class="table" style="width:100%">
                <thead>
                  <tr>

                    <th width="5%;!important">Rank</th>
                    <th width="15%;">Country</th>
                    <th width="15%;">Image</th>
                    <th width="30%;">Name</th>
                    <th width="20%;">Points</th>
                    <th width="15%;">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td style="width:15%;">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td style="width:15%;">
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td style="width:20%;">hardik pandya</td>
                    <td style="width:20%;">324,233</td>
                    <td>$2,342</td>
                  </tr>

                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr><tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">SL</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>hardik pandya</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="ongoing-two hide">
              <table id="ongoing-table-2" class="table" style="width:100%">
                <thead>
                  <tr>

                    <th width="5%;!important">Rank</th>
                    <th width="15%;">Country</th>
                    <th width="15%;">Image</th>
                    <th width="30%;">Name</th>
                    <th width="20%;">Points</th>
                    <th width="15%;">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td style="width:15%;">
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td style="width:15%;">
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td style="width:20%;">Virat Kohli</td>
                    <td style="width:20%;">103,600</td>
                    <td>$24,600</td>
                  </tr>

                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr><tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>



        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

          <select class="div-toggle-2 dropdown-menu-ongoing" data-target=".my-info-2">
            <option data-show=".completed-one">Womens T20 2023</option>
            <option data-show=".completed-two">ABC Tournament</option>
            <option data-show=".completed-three">IPL Tournament</option>

          </select>

          <div class="my-info-2">
            <div class="completed-one hide">
              <table id="completed-table-1" class="table" style="width:100%">
                <thead>
                  <tr>

                    <th width="5%;!important">Rank</th>
                    <th width="15%;">Country</th>
                    <th width="15%;">Image</th>
                    <th width="30%;">Name</th>
                    <th width="20%;">Points</th>
                    <th width="15%;">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td style="width:15%;">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td style="width:15%;">
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td style="width:20%;">rohit sharma</td>
                    <td style="width:20%;">324,233</td>
                    <td>$2,342</td>
                  </tr>

                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr><tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Flag_of_Sri_Lanka_%283-2%29.svg/2560px-Flag_of_Sri_Lanka_%283-2%29.svg.png" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">RSA</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>rohit sharma</td>
                    <td>324,233</td>
                    <td>$2,342</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="completed-two hide">
              <table id="completed-table-2" class="table" style="width:100%">
                <thead>
                  <tr>

                    <th width="5%;!important">Rank</th>
                    <th width="15%;">Country</th>
                    <th width="15%;">Image</th>
                    <th width="30%;">Name</th>
                    <th width="20%;">Points</th>
                    <th width="15%;">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td style="width:15%;">
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td style="width:15%;">
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td style="width:20%;">Virat Kohli</td>
                    <td style="width:20%;">103,600</td>
                    <td>$24,600</td>
                  </tr>

                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr><tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <div class="completed-three hide">
              <table id="completed-table-3" class="table" style="width:100%">
                <thead>
                  <tr>

                    <th width="5%;!important">Rank</th>
                    <th width="15%;">Country</th>
                    <th width="15%;">Image</th>
                    <th width="30%;">Name</th>
                    <th width="20%;">Points</th>
                    <th width="15%;">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td style="width:15%;">
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td style="width:15%;">
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td style="width:20%;">Virat Kohli</td>
                    <td style="width:20%;">103,600</td>
                    <td>$24,600</td>
                  </tr>

                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr><tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>
                  <tr>
                    <td style="width:5%;">1</td>
                    <td>
                          <img src="https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg" alt="" style="width:40px;">
                          <br>
                          <p class="country-name">IND</p>
                    </td>
                    <td>
                          <img src="https://img1.pnghut.com/1/15/9/DLRVX7WYLt/silhouette-art-user-profile-neck-cheek.jpg" alt="" style="width:40px; border-radius:20px;">
                    </td>
                    <td>Virat Kohli</td>
                    <td>103,600</td>
                    <td>$24,600</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>


        </div>
      </div>




    </div>
    <div class="seo-section" style="margin-top:3%; padding:2%;">
      <div class="row">
        <div class="col-lg-8">
          <h3><b>Naya11 IPL Leaderboard Contest</b></h3>
          <b>We don’t BOTs to fill the contest</b>
<br>
          IPL Leaderboard naya11. Leadeboard starts on 26th March 2022 and ends on 24th May midnight of 2022.
<br>
          <ul>
            <li>Leaderboard valid for all Non IPL matches and leagues also during the till 24Th May 2022
            </li>
            <li>
              Leaderboard valid for contest with entry fee Rs. 20/- and above.
            </li>
            <li>Leaderboard will run for 15 days. Please check the schedule of the leaderboard contest. So there will be 4 leaderboarsd during IPL with each leaderboard distributing rs. 51000/- to total 50 winners.
            </li>
            <li>
              First leaderboard 26th March to 9th April
              </li>
            <li>First leaderboard 10th April to 24th April
            </li>
            <li>
              First leaderboard 25th April to 9th May
              </li>
              <li>First leaderboard 10th May to 24th May
              </li>
              <li>The Leaderboard amount will be distributed every 15 days among the winners.
              </li>
              <li>If there is a tie for a rank, rank clash will be used
            </li>
            <li>
              Special 1st rank prize of Rs. 50000/- will be given to the person who has won the most amount in the 4 leaderboards. The winner will be declared at the end of the IPL.
              </li>
              <li>If there is a tie for most amount won from 4 leaderboards, then the amount of 50000/- will be divided equally between all of them.
              </li>
              <li>Points will be updated the next day
              </li>
              <li>This leaderboard is only for cricket matches
              Keep checking your rank and keep playing to better your rank
              Winning</li>
          </ul>
          Rank 1 --- Rs. 10000/-
          <br>
          Rank 2 --- Rs. 5000/-
          <br>

          Rank 3 to 10 --- Rs. 2000/-
          <br>
          Rank 11 to 20 --- Rs. 1000/-
          <br>
          Rank 21 to 50 --- Rs. 335/-
        </div>
        <div class="col-lg-4" style="text-align:center;">
            <img src="images/leaderboard-seo-1.png" style="width:70%;" alt="">
        </div>
      </div>
    </div>
  </div>


  <?php include "footer.php"; ?>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"> </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">

  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js">

  </script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script type="text/javascript">

      $(document).ready(function() {
        $('#ongoing-table-' + 1).DataTable();
        $('#ongoing-table-' + 2).DataTable();
        $('#completed-table-' + 1).DataTable();
        $('#completed-table-' + 2).DataTable();
        $('#completed-table-' + 3).DataTable();

      });

    $(document).on('change', '.div-toggle-1', function() {
      var target = $(this).data('target');
      var show = $("option:selected", this).data('show');
      $(target).children().addClass('hide');
      $(show).removeClass('hide');
    });
    $(document).ready(function() {
      $('.div-toggle-1').trigger('change');
    });

    $(document).on('change', '.div-toggle-2', function() {
      var target = $(this).data('target');
      var show = $("option:selected", this).data('show');
      $(target).children().addClass('hide');
      $(show).removeClass('hide');
    });
    $(document).ready(function() {
      $('.div-toggle-2').trigger('change');
    });
  </script>
</body>

</html>
