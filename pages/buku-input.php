<div id="label-page">
    <h3>Input Data Buku</h3>
</div>
<div id="content">
    <form action="proses/buku-input-proses.php" method="post">

        <table id="tabel-input">

            <tr>
                <td class="label-formulir">ID Buku</td>
                <td class="isian-formulir"><input type="text" name="id_buku" class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Judul Buku</td>
                <td class="isian-formulir"><input type="text" name="judul_buku" class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Kategori</td>
                <td class="isian-formulir">
                    <select name="kategori" id="kategori">
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Karya Sastra">Karya Sastra</option>
                        <option value="Ilmu Agama">Ilmu Agama</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label-formulir">Pengarang</td>
                <td class="isian-formulir"><input type="text" name="pengarang" class="isian-formulir isian-formulir-border"></td>
            </tr>
            <tr>
                <td class="label-formulir">Penerbit</td>
                <td class="isian-formulir"><input type="text" name="penerbit" class="isian-formulir isian-formulir-border"></td>
            </tr>

            <tr>
                <td class="label-formulir">Status</td>
                <td class="isian-formulir"><input type="radio" name="status" value="Dipinjam">Dipinjam</td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="radio" name="status" value="Tersedia">Tersedia</td>
            </tr>
            <tr>
                <td class="label-formulir"></td>
                <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
            </tr>
        </table>
    </form>
</div>