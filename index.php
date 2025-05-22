<?php
$programming_languages = $_POST["programming-languages"] ?? [];
$personal_project = $_POST["personal-project"] ?? "";
$freq_used_software = $_POST["freq-used-software"] ?? [];
$used_os = $_POST["used-os"] ?? "";
$php_level = $_POST["php-level"] ?? "";


function isCheckboxChecked($arr, $software_name)
{
  if (in_array($software_name, $arr)) {
    return true;
  }

  return false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Interaktif Mahasiswa</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/profile.css">
  <link rel="stylesheet" href="assets/css/navbar.css">
</head>

<body>
  <nav>
    <a href="index.php" class="branding">profil interaktif mahasiswa</a>

    <ul>
      <li><a href="index.php">Profile</a></li>
      <li><a href="pages/timeline.php">Timeline</a></li>
      <li><a href="pages/blog.php">Blog</a></li>
    </ul>
  </nav>

  <main>
    <section id="profile">
      <h1 class="title">
        profil interaktif mahasiswa
      </h1>

      <table>
        <tr>
          <th>Nama</th>
          <td>Heema Kama Empi Baijani</td>
        </tr>

        <tr>
          <th>NIM</th>
          <td>240411000000</td>
        </tr>

        <tr>
          <th>Tempat, Tanggal Lahir</th>
          <td>31 Februari 2006</td>
        </tr>

        <tr>
          <th>Email</th>
          <td>sebuahemail@gmail.com</td>
        </tr>

        <tr>
          <th>Nomor HP</th>
          <td>+62 800-0000-0000</td>
        </tr>
      </table>
    </section>

    <hr>

    <section id="skill-form">
      <form action="index.php" method="post">
        <div class="programming-language">
          <span class="error"><?= !$programming_languages && isset($_POST) ? "* Wajib diisi" : ""; ?></span>

          <p class=" input-label">
            Bahasa pemrograman yang dikuasai
          </p>

          <div class=" programming-language-input">
            <!-- inputs -->
            <?php if ($programming_languages): ?>
              <?php foreach ($programming_languages as $value): ?>
                <input type="text" name="programming-languages[]" id="programming-languages" value=<?= $value; ?>>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

          <button type="button" onclick="addProgrammingLanguage()" class="btn btn-default">Tambah Bahasa</button>
        </div>

        <div class="personal-project">
          <span class="error"><?= !$personal_project && isset($_POST) ? "* Wajib diisi" : ""; ?></span>

          <label for=" personal-project">
            Deskripsi pengalaman membuat proyek pribadi
          </label>

          <textarea name="personal-project" id="personal-project"><?= $personal_project ?? ""; ?></textarea>
        </div>

        <div class="freq-used-software">
          <span class="error"><?= !$freq_used_software && isset($_POST) ? "* Wajib diisi" : ""; ?></span>

          <p class="input-label">Software yang sering digunakan</p>

          <div class="checkboxes">
            <div class="">
              <input type="checkbox" name="freq-used-software[]" id="vscode" value="vscode" <?= isCheckboxChecked($freq_used_software, "vscode") ? "checked" : ""; ?>>
              <label for="vscode">VSCode</label>
            </div>

            <div class="">
              <input type="checkbox" name="freq-used-software[]" id="xampp" value="xampp" <?= isCheckboxChecked($freq_used_software, "xampp") ? "checked" : ""; ?>>
              <label for="xampp">XAMPP</label>
            </div>

            <div class="">
              <input type="checkbox" name="freq-used-software[]" id="git" value="git" <?= isCheckboxChecked($freq_used_software, "git") ? "checked" : ""; ?>>
              <label for="git">GIT</label>
            </div>

            <div class="">
              <input type="checkbox" name="freq-used-software[]" id="laragon" value="laragon" <?= isCheckboxChecked($freq_used_software, "laragon") ? "checked" : ""; ?>>
              <label for="laragon">Laragon</label>
            </div>

            <div class="">
              <input type="checkbox" name="freq-used-software[]" id="netbeans" value="netbeans" <?= isCheckboxChecked($freq_used_software, "netbeans") ? "checked" : ""; ?>>
              <label for="netbeans">NetBeans IDE</label>
            </div>

            <div class="">
              <input type="checkbox" name="freq-used-software[]" id="figma" value="figma" <?= isCheckboxChecked($freq_used_software, "figma") ? "checked" : ""; ?>>
              <label for="figma">Figma</label>
            </div>
          </div>
        </div>

        <div class="used-os">
          <span class="error"><?= !$used_os && isset($_POST) ? "* Wajib diisi" : ""; ?></span>

          <p class="input-label">Sistem operasi yang digunakan</p>

          <div class="os-radio">
            <div class="windows">
              <label for="windows">Windows</label>
              <input type="radio" name="used-os" id="windows" value="windows" <?= $used_os == "windows" ? "checked" : "" ?>>
            </div>

            <div class="windows">
              <label for="linux">Linux</label>
              <input type="radio" name="used-os" id="linux" value="linux" <?= $used_os == "linux" ? "checked" : "" ?>>
            </div>

            <div class="windows">
              <label for="macos">Mac</label>
              <input type="radio" name="used-os" id="macos" value="macos" <?= $used_os == "macos" ? "checked" : "" ?>>
            </div>
          </div>
        </div>

        <div class="php-level">
          <span class="error"><?= !$php_level && isset($_POST) ? "* Wajib diisi" : ""; ?></span>

          <label for="php-level">Tingkat penugasan PHP</label>

          <select name="php-level" id="php-level">
            <option value="" disabled <?= !$php_level ? "selected" : "" ?>>Pilih Tingkat</option>
            <option value="pemula" <?= $php_level == "pemula" ? "selected" : "" ?>>Pemula</option>
            <option value="menengah" <?= $php_level == "menengah" ? "selected" : "" ?>>Menengah</option>
            <option value="mahir" <?= $php_level == "mahir" ? "selected" : "" ?>>Mahir</option>
          </select>
        </div>

        <div class="buttons-container">
          <button type="submit" class="btn btn-default">Submit Form</button>
          <button type="reset" class="btn btn-danger">Reset Form</button>
        </div>
      </form>
    </section>

    <?php if (
      $programming_languages &&
      $personal_project &&
      $freq_used_software &&
      $used_os &&
      $php_level
    ): ?>
      <hr>

      <section id="after-submit">
        <h1 class="title">hasil</h1>

        <div class="">
          <h4>Deskripsi Projek Pribadi:</h4>
          <p class="description"><?= $personal_project ?></p>
        </div>

        <table>
          <tr>
            <th>Bahasa pemrograman yang dikuasai</th>
            <td class="capitalize"><?= implode(", ", $programming_languages) ?></td>
          </tr>
          <tr>
            <th>Software yang sering digunakan</th>
            <td class="capitalize"><?= implode(", ", $freq_used_software) ?></td>
          </tr>
          <tr>
            <th>Sistem operasi yang digunakan</th>
            <td><?= $used_os ?></td>
          </tr>
          <tr>
            <th>Tingkat penugasan PHP</th>
            <td><?= $php_level ?></td>
          </tr>

          <?php if (count($programming_languages) > 2): ?>
            <tr>
              <td colspan="2" class="message">
                Anda cukup berpengalaman dalam pemrograman!
              </td>
            </tr>
          <?php endif ?>
        </table>
      </section>
    <?php endif; ?>
  </main>

  <script src="assets/js/add-programming-language.js"></script>
</body>

</html>