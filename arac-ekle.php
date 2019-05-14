<?php
$title = "Arac Ekle";
require ("header.php");
?>
            
            <div class="col-md-10 bg-info text-white rounded-right">
                <div class="page-header text-center">
                    <h1>Arac Ekle</h1>
                </div>
                <hr>

                <form action="arac-ekle.php" method="post">

                    <div class="form-group row justify-content-md-center">
                        <label for="inputPlaka" class="col-md-2 col-form-label text-center">Plaka:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputPlaka" name="plaka" placeholder="Plaka giriniz.">
                        </div>
                    </div>

                    <div class="form-group row justify-content-md-center">
                        <label for="inputAracTuru" class="col-md-2 col-form-label text-center">Arac Turu Seciniz:</label>
                        <div class="col-md-8">
                            <select name="aracTuru" id="inputAracTuru" class="form-control">
                                <option value="Otomobil">Otomobil</option>
                                <option value="Motorsiklet">Motorsikler</option>
                                <option value="Kamyonet">Kamyonet</option>
                                <option value="Kamyon">Kamyon</option>
                                <option value="Otobus">Otobus</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row justify-content-md-center">
                        <label for="inputGirisZaman" class="col-md-2 col-form-label text-center">Giriş Saati</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="inputGirisZaman" name="girisZamani" value="<?php echo date('d.m.Y H:i:s'); ?>">
                        </div>
                    </div>
                    <div class="row justify-content-center">

                        <input type="submit" class="btn btn-success col-md-2" value="Aracı Kaydet">
                    </div>
                </form>
            </div>

<?php

require ("footer.php");

?>