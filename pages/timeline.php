<?php
$timelines = [
  "semester_1" => [
    "ospek" => "Mengikuti Ospek Universitas, Jurusan, dan Prodi",
    "rentetan_ospek" => "Mengikuti rentetan ospek prodi, seperti Pelatihan Coding",
    "ukm_jurusan" => "Mengikuti UKM jurusan",
    "seminar_ISCS" => "Mengikuti seminar ISCS",
    "seminar_GDGOC" => "Mengikuti seminar GDGOC",
    "projek_akhir" => "Membuat projek akhir praktikum"
  ],

  "semester_2" => [
    "pengurus_UKM" => "Menjadi pengurus UKM"
  ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Timeline Pengalaman Kuliah</title>

  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/timeline.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">
</head>

<body>
  <nav>
    <a href="../index.php" class="branding">profil interaktif mahasiswa</a>

    <ul>
      <li><a href="../index.php">Profile</a></li>
      <li><a href="timeline.php">Timeline</a></li>
      <li><a href="blog.php">Blog</a></li>
    </ul>
  </nav>

  <main>
    <section id="timeline">
      <h1 class="title">
        timeline
      </h1>

      <div class="timelines">
        <?php foreach ($timelines as $semester => $details): ?>
          <h2><?= str_replace("_", " ", $semester) ?></h2>

          <div class="sub-timeline">
            <?php foreach ($details as $detail => $description): ?>
              <div class="sub">
                <h3><?= str_replace("_", " ", $detail) ?></h3>
                <p><?= $description ?></p>
              </div>
            <?php endforeach ?>
          </div>
        <?php endforeach ?>
      </div>
    </section>

    <hr>

    <section id="buttons">
      <a href="../index.php" class="btn btn-default">Kembali ke Profil</a>
      <a href="blog.php" class="btn btn-outline">Menuju Blog</a>
    </section>
  </main>
</body>

</html>