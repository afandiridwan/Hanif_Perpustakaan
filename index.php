<!doctype html>

<?php
include 'koneksi.php';
?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Perpustakaan</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand">Perpustakaan</a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <figure class="text-center mt-4">
      <blockquote class="blockquote">
        <p>DAFTAR BUKU PERPUTAKAAN MAJOE JAJA.</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        Look at the stars Look how the shine for you <cite title="Source Title"> -Coldplay</cite>
      </figcaption>
    </figure>
    
    <a href="olah.php" type="button" class="btn btn-outline-primary mb-4">Tambah</a>

    <table class="table table-hover table-bordered table-striped align-middle">
        <thead>
          <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Kategori</th>
            <th scope="col">Cover</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM tb_buku";
          $sql = mysqli_query($konek, $query);
          $no = 1;
          while ($data = mysqli_fetch_array($sql)) {
            ?>

            <tr>
              <th scope="row">
                <?php echo $no; ?>
              </th>
              <td>
                <?php echo $data['judul']; ?>
              </td>
              <td>
                <?php echo $data['pengarang']; ?>
              </td>
              <td>
                <?php echo $data['penerbit']; ?>
              </td>
              <td>
                <?php echo $data['kategori']; ?>
              </td>
              <td><img src="gambar/<?php echo $data['gambar'];
              ?>" alt="Gambar" style=width:100px;"></td>
              <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path
                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                  <path fill-rule="evenodd"
                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                  viewBox="0 0 16 16">
                  <path
                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                  <path
                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                </svg>

              </td>
            </tr>

            <?php
            $no++;
          } ?>

        </tbody>
      </table>


  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>