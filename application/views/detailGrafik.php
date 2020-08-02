<!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Berikut adlah daftar pertanyaan dari Kuisioner <?php echo $judul->judul_kuisioner; ?></h5>
       <?php foreach ($listKuisioner as $row){?>
        <div class="card">
            <div class="card-body">
                 <h5 class="card-title"><?php echo $row->pertanyaan; ?></h5> 
                 <div class="row">
                 <div class="col-8">
                    <p>Jumlah Tanggapan</p>
                 </div>
                 <div class="col-4">
                <div class="row">
                    <span style="width:20px;height:20px;border-radius:50%;border:3px solid #ef4836; display:block;margin-right:5px"></span>
                    <p><?= $row->jawabanA?></p>  
                </div>
                <div class="row">
                    <span style="width:20px;height:20px;border-radius:50%;border:3px solid #00aeef; display:block;margin-right:5px"></span>
                    <p><?= $row->jawabanB?></p>  
                </div>
                <div class="row">
                    <span style="width:20px;height:20px;border-radius:50%;border:3px solid #ffff33; display:block;margin-right:5px"></span>
                    <p><?= $row->jawabanC?></p>  
                </div>
                <div class="row">
                    <span style="width:20px;height:20px;border-radius:50%;border:3px solid #66ff33; display:block;margin-right:5px"></span>
                    <p><?= $row->jawabanD?></p>  
                </div>
                
               
                    </div>
                 </div>
            </div>
        </div>   
    <?php } ?>                          
    </div>
</div>
                    


                            <!-- Akhir Isi -->