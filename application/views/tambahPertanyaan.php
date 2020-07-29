<!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5 class="card-title">Tambah Pertanyaan | Soal Ke <?php echo $total+1; ?></h5> 
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-primary" style="float:right" onclick="window.open('http://[::1]/tabelpearson/kuisioner/preview/<?php echo $id; ?>')">Preview</button>
                                        </div>                                                       
                                    </div>
                                    <?= form_open('kuisioner/prosesPertanyaan');?>
                                 
                                        <div class="form-group">
                                            <!-- <label for="exampleFormControlInput1">Kode Kuisioner</label> -->
                                            <input type="hidden" class="form-control" name="idKuisioner" value="<?= $this->uri->segment(3); ?>">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Pertanyaan </label>
                                            <input type="text" class="form-control" name="pertanyaan" name="pertanyaan" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jawaban 1</label>
                                            <input type="text" class="form-control" name="jawaban1" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bobot Nilai Jawaban 1</label>
                                            <input type="number" class="form-control" name="bobotA" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jawaban 2</label>
                                            <input type="text" class="form-control" name="jawaban2" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bobot Nilai Jawaban 2</label>
                                            <input type="number" class="form-control" name="bobotB" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jawaban 3</label>
                                            <input type="text" class="form-control" name="jawaban3" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bobot Nilai Jawaban 3</label>
                                            <input type="number" class="form-control" name="bobotC" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jawaban 4</label>
                                            <input type="text" class="form-control" name="jawaban4" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bobot Nilai Jawaban 4</label>
                                            <input type="number" class="form-control" name="bobotD" id="exampleFormControlInput1" >
                                        </div>


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