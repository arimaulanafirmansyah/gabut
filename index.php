<?php
$url = file_get_contents('https://www.instagram.com/arimaulanafrmnsyh_/?__a=1');
$data = json_decode($url, true);

$nama = $data['graphql']['user']['full_name'];
$user = $data['graphql']['user']['username'];
$bio = $data['graphql']['user']['biography'];
$bio2 = $data['graphql']['user']['external_url'];
$followers = $data['graphql']['user']['edge_followed_by']['count'];
$following = $data['graphql']['user']['edge_follow']['count'];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Instagram</title>
  </head>
  <body>
<nav class="navbar navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    <img alt="Instagram" class="" src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" srcset="/static/images/web/mobile_nav_type_logo-2x.png/1b47f9d0e595.png 2x">
     <input class="search search2 text-center" type="text" autocapitalize="none" placeholder="Cari" value="">
    <form class="d-flex">
      <button class="btn btn-primary fw-bold" type="submit">Masuk</button>
      <button class="btn btn fw-bold" type="submit">Daftar</button>
    </form>
  </div>
</nav>


<div class="jumbotron jumbotron">
  <div class="container">
    <img src="https://instagram.fbdo9-1.fna.fbcdn.net/v/t51.2885-19/s320x320/156939117_149898003648497_5004245462453423881_n.jpg?tp=1&_nc_ht=instagram.fbdo9-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=7Q2n6I3357QAX_oLujx&edm=ABfd0MgAAAAA&ccb=7-4&oh=f3bd0af6541b32d1872a51a3e6067cc6&oe=608E1615&_nc_sid=7bff83" width="150" class="img rounded-circle">
<section id="username">
  <div class="username">
    <p><?php echo $user ?></p>
  </div>
  <div class="ikuti">
 <a href="https://arimaulanafirmansyah.github.io"><button class="btn btn-primary fw-bold btn-sm" type="submit">Ikuti</button></a>
  </div>

</section>
<section id="followers">
<ul class="k9GMp">
  <li class="Y8-fY">
    <a class="-nal3" href="" tabindex="0">
      <span class="g47SY ">2</span> kiriman</a>
    </li>
    <li class="Y8-fY ">
      <a class="-nal3 " href="" tabindex="0">
        <span class="g47SY " title="664"><?php echo $followers?></span> pengikut</a>
      </li>
      <li class="Y8-fY ">
        <a class="-nal3 " href="" tabindex="0">
          <span class="g47SY "><?php echo $following?></span> diikuti</a
          ></li>
        </ul>
        </section>
    <section id="bio">
    <div class="-vDIg">
      <h1 class="rhpdm"><?php echo $nama ?></h1><br>
      <span><?php echo $bio ?></span>
      <a class="yLUwa" href="https://arimaulanafirmansyah.github.io"><?php echo $bio2 ?></a>
    </div>
    </section>
    </div>
</div><hr>
<section id="pst">
<ul class="k9GMp">
  <li class="Y8-fY">
    <a class="-nal3" href="" tabindex="0"><i class="fa fa-bars" aria-hidden="true"><span class="poste"> POSTINGAN</span></i></a>
    </li>
    <li class="Y8-fY ">
      <a class="-nal3 " href="" tabindex="0"><i class="fa fa-user-o" aria-hidden="true"><span class="poste2"> DITANDAI</span></i></a>
      </li>
        </ul>
        </section>
        <div class="jumbotron1">
  <div class="container">
    <img src="https://instagram.fbdo9-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/157653822_3911431865546043_8104208728988620781_n.jpg?tp=1&_nc_ht=instagram.fbdo9-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=5cPVTqxsty8AX9Nf1hO&edm=ABfd0MgAAAAA&ccb=7-4&oh=ac6058166bef2d3c224c44237b31c2fe&oe=608E7174&_nc_sid=7bff83" width="300">
    <img src="https://instagram.fbdo9-1.fna.fbcdn.net/v/t51.2885-15/e35/105971685_652258722169294_5336293808842345764_n.jpg?tp=1&_nc_ht=instagram.fbdo9-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=32eLLOwexwwAX9KVOGu&edm=ABfd0MgAAAAA&ccb=7-4&oh=a1bae032c0f0b8912c5a8d6236fac7e3&oe=606B475C&_nc_sid=7bff83" width="300">
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>