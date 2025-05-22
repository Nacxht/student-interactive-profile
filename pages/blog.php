<?php
$articles = [
  "blog_1" => [
    "title" => "Tahapan Refleksi Pembelajaran dan Manfaatnya",
    "date_post" => "30 Desember 2023",
    "reflection_paragraphs" => "Refleksi pembelajaran merupakan tahap akhir dalam proses belajar yang bertujuan untuk mengevaluasi dan memahami kembali materi yang telah disampaikan. Proses ini penting bagi guru untuk menilai efektivitas metode pengajaran dan respon siswa terhadap materi. Menurut buku Microteaching dalam PAUD oleh Dinda Rizki Tiara dan Ajeng Rizki Safira (2023:10), refleksi pembelajaran mencakup kegiatan yang membahas secara keseluruhan hasil praktik pembelajaran, memberikan gambaran tentang bagaimana proses belajar berlangsung.",
    "illustration" => "../assets/images/pendidikan.webp",
    "motivation" => [
      "Refleksi bukan sekadar menilai apa yang telah terjadi, tetapi juga merancang langkah-langkah untuk perbaikan di masa depan.",
      "Belajar dari pengalaman adalah guru terbaik - namun refleksi menjadikannya pelajaran yang bermakna.",
      "Setiap proses pembelajaran adalah cermin; semakin jujur kita merefleksikan, semakin jelas arah kita berikutnya."
    ],
    "reference" => "https://kumparan.com/ragam-info/tahapan-refleksi-pembelajaran-dan-manfaatnya-21rwv7dRX3O"
  ],

  "blog_2" => [
    "title" => "Refleksi Bekerja Sebagai Sebuah Panggilan Hidup",
    "date_post" => "30 Januari 2023",
    "reflection_paragraphs" => "Artikel ini menyoroti pentingnya memaknai pekerjaan sebagai panggilan hidup, bukan semata-mata sebagai sarana mencari nafkah. Pastor Surip menjelaskan bahwa manusia adalah makhluk pekerja; tanpa bekerja, manusia kehilangan jati dirinya. Namun, seiring perkembangan zaman, makna bekerja telah bergeser menjadi sekadar mengejar keuntungan materi, sering kali mengabaikan nilai moral. Melalui refleksi ini, diharapkan individu dapat kembali memahami bahwa bekerja adalah kontribusi nyata bagi sesama dan masyarakat, serta sebagai bentuk pengabdian yang memberikan makna sejati dalam kehidupan.",
    "illustration" => "../assets/images/kerja.jpg",
    "motivation" => [
      "Bekerja bukan hanya untuk hidup, tetapi untuk memberi hidup bagi sesama.",
      "Pekerjaan yang dijalani dengan hati adalah wujud panggilan hidup yang sejati.",
      "Ketika bekerja menjadi bentuk pelayanan, maka setiap tugas memiliki nilai abadi."
    ],
    "reference" => ""
  ],

  "blog_3" => [
    "title" => "Pendidikan Sebagai Investasi Jangka Panjang: Menyiapkan Generasi Masa Depan",
    "date_post" => "21 Mei 2025",
    "reflection_paragraphs" => "Pendidikan merupakan fondasi utama dalam membentuk karakter, memperluas wawasan, dan mengasah keterampilan generasi muda untuk menghadapi tantangan masa depan. Lebih dari sekadar memperoleh ijazah, pendidikan berperan dalam mengembangkan sikap, nilai-nilai, dan kemampuan berpikir kritis yang menjadikan individu kuat dan visioner. Dengan pendidikan, generasi muda dapat memahami peran serta tanggung jawabnya dalam masyarakat, memberikan kontribusi positif bagi kemajuan bangsa, dan beradaptasi dengan pesatnya perkembangan teknologi serta globalisasi. Oleh karena itu, pendidikan harus dipandang sebagai investasi jangka panjang yang krusial untuk memastikan kemajuan bangsa yang berkelanjutan.",
    "illustration" => "../assets/images/pendidikan-2.webp",
    "motivation" => [
      "Pendidikan adalah kunci menuju masa depan yang lebih cerah, bukan hanya untuk diri sendiri, tetapi juga untuk kemajuan bangsa dan dunia secara keseluruhan.",
      "Pendidikan bukan hanya sekadar alat untuk mendapatkan ijazah atau gelar akademik. Lebih dari itu, pendidikan merupakan dasar bagi peradaban, kekuatan dalam pembangunan, dan kunci penting untuk mempersiapkan generasi masa depan yang berkualitas.",
      "Negara-negara yang menjadikan pendidikan sebagai prioritas utama terbukti lebih mampu beradaptasi dengan perubahan zaman, termasuk menghadapi disrupsi teknologi dan tantangan global lainnya."
    ],
    "reference" => "https://www.kompasiana.com/mutiahusallyna3694/682de32b34777c30a47a0903/pendidikan-sebagai-investasi-jangka-panjang-menyiapkan-generasi-masa-depan"
  ],

  "blog_4" => [
    "title" => "Refleksi Diri: Kunci Sukses dalam Pengembangan Karier",
    "date_post" => "29 Mei 2024",
    "reflection_paragraphs" => "Artikel dari Mentorloop menyoroti pentingnya refleksi diri dalam meningkatkan kinerja profesional. Berdasarkan penelitian Harvard Business School, meluangkan waktu untuk merenungkan pengalaman kerja tidak hanya memperdalam pembelajaran, tetapi juga meningkatkan rasa percaya diri dan motivasi. Dengan secara aktif mengevaluasi pengalaman dan menetapkan tujuan berdasarkan refleksi tersebut, individu dapat memperkuat pemahaman mereka, mengidentifikasi area untuk perbaikan, dan mendorong pertumbuhan karier yang berkelanjutan.",
    "illustration" => "../assets/images/reflective-practice.jpg",
    "motivation" => [
      "Waktu yang dihabiskan untuk merenung adalah investasi terbaik untuk masa depan kariermu.",
      "Refleksi bukan berarti berhenti - tapi bersiap untuk melompat lebih jauh.",
      "Dengan memahami langkah yang telah ditempuh, kamu bisa memilih arah yang lebih bijak ke depan."
    ],
    "reference" => "https://mentorloop.com/blog/reflection-improves-career-performance/"
  ],
];

$blog_id = $_GET["blog_id"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Reflektif</title>

  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/blog.css">
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
    <section id="reflective-articles">
      <h1 class="title">
        blog reflektif
      </h1>

      <div class="articles-list">
        <?php foreach ($articles as $article => $data): ?>
          <a href="blog.php?blog_id=<?= $article ?>#article" class="article-card">
            <div class="illustration">
              <img src="<?= $data["illustration"] ?>" alt="<?= $data["illustration"] ?>">
            </div>

            <div class="title">
              <p><?= $data["title"] ?></p>
            </div>
          </a>
        <?php endforeach ?>
      </div>
    </section>

    <hr>

    <section id="article">
      <h1 class="title">
        konten artikel
      </h1>

      <div class="article-content">
        <?php if ($blog_id == ""): ?>
          <h2 class="empty-article">
            klik salah satu artikel untuk membaca
          </h2>
        <?php else: ?>
          <div class="article-image">
            <img src="<?= $articles[$blog_id]["illustration"] ?>" alt="<?= $articles[$blog_id]["title"] ?>">
          </div>

          <h3 class="article-title">
            <?= $articles[$blog_id]["title"] ?>
          </h3>

          <hr>

          <p class="post-date">
            Diposting pada: <?= $articles[$blog_id]["date_post"] ?>
          </p>

          <p class="paragraph">
            <?= $articles[$blog_id]["reflection_paragraphs"] ?>
          </p>

          <div class="motivation-word">
            &quot;
            <?= $articles[$blog_id]["motivation"][rand(0, count($articles[$blog_id]["motivation"]) - 1)] ?>
            &quot;
          </div>

          <?php if ($articles[$blog_id]["reference"]): ?>
            <hr>

            <div class="reference">
              <p>References:</p>
              <a href="<?= $articles[$blog_id]["reference"] ?>" class="link">
                <?= $articles[$blog_id]["reference"] ?>
              </a>
            </div>
          <?php endif; ?>
        <?php endif ?>
      </div>
    </section>
  </main>
</body>

</html>