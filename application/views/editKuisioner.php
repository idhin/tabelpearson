<!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">

                                    <h5 class="card-title">Edit Pertanyaan | Soal Ke <?php echo $nomor; ?> Dari Kuisioner <?php echo $judul->judul_kuisioner; ?></h5> 
                                    <?= form_open('kuisioner/prosesEditKuisioner');?>
                                        <?php foreach ($editKuisioner as $s) { ?>
                                        <!-- <div class="form-group">
                                            <label for="exampleFormControlInput1">Kode Kuisioner</label>
                                            <input type="text" class="form-control" value="<?= $s->kodeKuisioner?>" name="kodeKuisioner" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Judul</label>
                                            <input type="hidden" name="iniID" value="<?= $this->uri->segment(3); ?>">
                                            <input type="text" class="form-control" value="<?= $s->judul?>"  name="judul" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi Judul (Opsional)</label>
                                            <input type="text" class="form-control" value="<?= $s->deskripsi?>"  name="deskripsi" rows="10" id="exampleFormControlInput1" >
                                         
                                        </div> -->
                                   
                                            <input type="hidden" name="idPertanyaan" value="<?= $this->uri->segment(3); ?>">
                                            

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"> </label>
                                            <input type="text" class="form-control" value="<?= $s->pertanyaan?>"  name="pertanyaan" name="pertanyaan" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="text" class="form-control" value="<?= $s->jawabanA?>"  name="jawaban1" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="number" class="form-control" value="<?= $s->bobotA?>"  name="bobotA" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="text" class="form-control" value="<?= $s->jawabanB?>"  name="jawaban2" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="number" class="form-control" value="<?= $s->bobotB?>"  name="bobotB" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="text" class="form-control" value="<?= $s->jawabanC?>"  name="jawaban3" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="number" class="form-control" value="<?= $s->bobotC?>"  name="bobotC" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="text" class="form-control" value="<?= $s->jawabanD?>"  name="jawaban4" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1"></label>
                                            <input type="number" class="form-control" value="<?= $s->bobotD?>"   name="bobotD" id="exampleFormControlInput1" >
                                        </div>

                                    <?php        } ?>

                                    
                                        <button type="submit" class="btn btn-primary rounded-pill waves-effect waves-light">Submit</button>
<?= form_close(); ?>

                                        
<!-- 
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="display: none;">Example select</label>
                                            <select class="form-control custom-select" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2" style="display: none;">Example multiple select</label>
                                            <select multiple="" class="form-control custom-select" id="exampleFormControlSelect2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div> -->
                                        
                                    </form>
                                </div>
                            </div>


                            <!-- Akhir Isi -->
</div>

</div>