<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Responden</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>

    input {
      background-color: #fcfcfc;
      border: 0;
      border-bottom: 1px solid lightgrey;
      padding: 10px;
      
    }
    input:focus {
      background-color: #fcfcfc;
      border: 0;
      border-bottom: 2px solid lightgrey;
      padding: 10px;
      outline: none
    }
    .no-outline:focus {
  outline: none;
}
  </style>
</head>
<body style="background-color: #DCDCDC">
<div class="container" style="margin-top:30px;">
<div style="margin:auto;width:80%;background-color:#ffff;border-radius:5px;">
<div style="background-color:#4b0082;width:100%;padding-bottom:15px;border-top-left-radius:5px;border-top-right-radius:5px;"></div>
<div style="padding-left:20px;padding-top:20px;padding-bottom:10px;padding-right:20px;">

<?= form_open('user/prosesJawab') ?>
<h1><?= $judul->judul_kuisioner ?></h1>
<p><?= $judul->deskripsi ?></p>
</div>
</div>
<br>
<div style="margin:auto;width:80%;background-color:#ffff;border-radius:5px;">
<div style="padding-left:20px;padding-top:20px;padding-bottom:10px;padding-right:20px;">
<p>Nama Lengkap</p>
<input type="text" id="input" name="namaLengkap" placeholder="Jawaban Anda">
</div>
</div>
<br>
<div style="margin:auto;width:80%;background-color:#ffff;border-radius:5px;">
<div style="padding-left:20px;padding-top:20px;padding-bottom:10px;padding-right:20px;">
<p>Email</p>
<input type="text" id="input" name="email"  placeholder="Jawaban Anda">
</div>
</div>
<br>
<?php foreach ($pertanyaan as $row) { ?>

                                <div class="form-group">
                                            <input type="hidden" name="pertanyaan<?=$row->id?>" value="<?=$row->pertanyaan?>">
                                            <input type="hidden" name="idPertanyaan" value="<?= $this->uri->segment(3)?>">
                                            <input type="hidden" name="idUser" value="<?= $row->iduser ?>">
                                            <input type="hidden" name="bobotA<?= $row->id ?>" value="<?= $row->bobotA ?>">
                                            <input type="hidden" name="bobotB<?= $row->id ?>" value="<?= $row->bobotB ?>">
                                            <input type="hidden" name="bobotC<?= $row->id ?>" value="<?= $row->bobotC ?>">
                                            <input type="hidden" name="bobotD<?= $row->id ?>" value="<?= $row->bobotD ?>">
                                </div>


<div style="margin:auto;width:80%;background-color:#ffff;border-radius:5px;">
<div style="padding-left:20px;padding-top:20px;padding-bottom:10px;padding-right:20px;">
<p><?= $row->pertanyaan?></p>
<div class="form-check" style="margin-bottom: 10px">
  <input class="form-check-input" type="radio"  name="jawaban<?= $row->id ?>" value="<?= $row->jawabanA ?>">
  <label class="form-check-label" >
    <?= $row->jawabanA?>
  </label>
</div>
<div class="form-check" style="margin-bottom: 10px">
  <input class="form-check-input" type="radio" name="jawaban<?= $row->id ?>" value="<?= $row->jawabanB ?>">
  <label class="form-check-label" >
  <?= $row->jawabanB?>
  </label>
</div>
<div class="form-check" style="margin-bottom: 10px">
  <input class="form-check-input" type="radio" name="jawaban<?= $row->id ?>" value="<?= $row->jawabanC ?>">
  <label class="form-check-label">
  <?= $row->jawabanC?>
  </label>
</div>
<div class="form-check" style="margin-bottom: 10px">
  <input class="form-check-input" type="radio" name="jawaban<?= $row->id ?>" value="<?= $row->jawabanD ?>">
  <label class="form-check-label" >
  <?= $row->jawabanD?>
  </label>
</div>
</div>
</div>
<br>
<?php } ?>
<div style="margin:auto;width:80%;">
<!-- <button class="btn" style="background-color: #4b0082;color:#ffff">Kirim</button> -->

<button type="submit" class="btn" style="background-color: #4b0082;color:#ffff">Kirim</button>
</div>

<?= form_close(); ?>
</div>
</body>
</html>