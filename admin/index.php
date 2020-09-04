<?php
@session_start();
if (@$_SESSION['admin']) {
require_once('core/init.php');
require_once('../dist/sidebar.php');
$result = tampilData();
$result = search();

?>

    <title>Dasbor Admin - Tamu PT. Papyrus Sakti Paper Mill</title>
	<link rel="shortcut icon" type="image/x-icon" href="../vendor/papyrus.ico">

    <main>
      <div class="section right" style="margin-right: 10px;">
        <div class="col s12">
          <form action="" method="post">
            <input id="search-box" name="input_cari" size="40" type="text" placeholder="No Tamu"/>
            <input id="search-btn" name="cari_data" value="Cari Tamu" type="submit"/>
          </form>
        </div>
      </div>

      <div class="row">
        <form class="col s12">
          <table class="responsive-table">
            <thead>
              <tr>
                  <th>No. Tamu</th>
                  <th>Nama Tamu</th>
				  <th>Alamat</th>
				  <th>Instansi</th>
                  <th>Nopol Kendaraan</th>
                  <th>Sifat </th>
                  <th>Janji</th>
                  <th>Bertemu</th>
				  <th>bagian</th>
                  <th>Alasan</th>
                  <th>Masuk</th>
				  <th>Keluar</th>
              </tr>
            </thead>

            <?php
			  while($row = mysqli_fetch_assoc($result)):
            ?>
            
            <tbody>
              <tr>
			    <td><?= $row['nota']; ?></td>
                <td><?= $row['nm_tamu']; ?></td>
                <td><?= $row['alm_tamu']; ?></td>
                <td><?= $row['instansi']; ?></td>
                <td><?= $row['nopol']; ?></td>
                <td><?= $row['sifat']; ?></td>
                <td><?= $row['janji']; ?></td>
                <td><?= $row['nama']; ?></td>
				<td><?= $row['bagian']; ?></td>
                <td><?= $row['alasan']; ?></td>
                <td><?= $row['Jin']; ?></td>
                <td><?= $row['Jout']; ?></td>
				<td>
				<?php
				if(($row['Jout'] == null)){
					echo "<a href='cekout.php?id= $row[nota]' style='color:blue;' title='Cekout'><b>Check Out</b></a>";
                }
				?>
				</td>
				<td>
				<a href="edit.php?id=<?php echo $row['nota']?>" style='color:red;' title='edit'><i class='material-icons'>mode_edit</i></a>
				</td>
				<td>
				<?php
				if(($row['Jout'] !=  null)){
					echo "<a href='delete_bukutamu.php?id= $row[nota]' style='color:red;' title='Hapus'><i class='material-icons'>delete</i></a>";
                }
				?>
				</td>
              </tr>
            </tbody>
            <?php
          endwhile;
            ?>
          </table>
        </form>
      </div>
    </main>

<?php
}else {
  header("location:/tamu_papyrus/index.php");
}
require_once('../dist/footer.php');
?>
