<?php
$id_buku = $_GET['id'];
$q_tampil_buku = mysqli_query($db, "SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
$r_tampil_buku = mysqli_fetch_array($q_tampil_buku);
?>

<div id="label-page">
    <h3>Input Data Buku</h3>
</div>
<div id="content">
    <form action="proses/buku-edit-proses.php" method="post">

        <table id="tabel-input">

            <tr>
                <td class="label-formulir">ID Buku</td>
                <td class="isian-formulir"><input type="text" name="id_buku" value="<?= $r_tampil_buku['idbuku'] ?>;" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
            </tr>
            <tr>
                <td class="label-formulir">Judul Buku</td>
                <td class="isian-formulir"><input type="text" name="judul_buku" value="<?= $r_tampil_buku['judulbuku'] ?>" class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Kategori</td>
                <td class="isian-formulir">
                    <select name="kategori" id="kategori">
                        <option <?php if ($r_tampil_buku['kategori'] == 'Ilmu Komputer') {
                                    echo 'selected';
                                } ?> value="Ilmu Komputer">Ilmu Komputer</option>

                        <option <?php if ($r_tampil_buku['kategori'] == 'Karya Sastra') {
                                    echo 'selected';
                                } ?> value="Karya Sastra">Karya Sastra</option>

                        <option <?php if ($r_tampil_buku['kategori'] == 'Ilmu Agama') {
                                    echo 'selected';
                                } ?> value="Ilmu Agama">Ilmu Agama</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td class="label-formulir">Pengarang</td>
                <td class="isian-formulir"><input type="text" name="pengarang" value="<?= $r_tampil_buku['pengarang'] ?>" class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Penerbit</td>
                <td class="isian-formulir"><input type="text" name="penerbit" value="<?= $r_tampil_buku['penerbit'] ?>" class="isian-formulir isian-formulir-border"></td>
            </tr>

            <!-- awal -->
            <tr>
                <td class="label-formulir">Status</td>
                <?php
                if ($r_tampil_buku['status'] == "Dipinjam") {
                    echo "<td class='isian-formulir'><input type='radio' name='kategori' value='Dipinjam' checked>Dipinjam</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='kategori' value='Tersedia'>Tersedia</td>";
                } elseif ($r_tampil_buku['status'] == "Tersedia") {
                    echo "<td class='isian-formulir'><input type='radio' name='kategori' value='Dipinjam'>Dipinjam</label></td>
					</tr>
		<tr>
			<td class='label-formulir'></td>
			<td class='isian-formulir'><input type='radio' name='kategori' value='Tersedia' checked>Tersedia</td>";
                }
                ?>
                <input type="text" name="kategori" value="<?php echo $r_tampil_buku['kategori']; ?>" class="isian-formulir isian-formulir-border"></td>
            </tr>

            <!-- akhir -->

            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
            </tr>
        </table>
    </form>
</div>