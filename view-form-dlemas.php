<html>
    <head>
        <title>Form Input Data</title>
    </head>

    <style>
        fieldset{
            width: 40%;
            margin: 20px auto;
            border-radius: 5px;
        }
        
        select{
            width: 100%;
        }
    </style>

    <body>
        <fieldset>
            <legend><b>INPUT DATA</b></legend>
        
            <form action="<?= base_url('Form_Dlemas/hasil'); ?>" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                    <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="tgl_lahir" id="tgl_lahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="tempat_lahir" id="tempat_lahir">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                    <input type="radio" name="jk" id="L" value="Laki-Laki">Laki-Laki<br>
                    <input type="radio" name="jk" id="P" value="Perempuan">Perempuan<br>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option>-- Pilih Agama --</option>
                            <?php foreach ($agama as $a) :?>
                                <option value="<?= $a; ?>"><?= $a; ?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
        </fieldset>
</body>
</html>