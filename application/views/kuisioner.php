<!-- Left Sidebar -->
<div class="page-content">

<div class="container-fluid">

<!-- Awal Isi -->
<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tambah Kuisioner </h5>
                                    <!--  -->
                                    <form id="myForm" method="POST" action="<?=  base_url();?>kuisioner/prosesKuisioner">
                                        <!-- <div class="form-group">
                                            <label for="exampleFormControlInput1">Kode Kuisioner</label>
                                            <input type="text" class="form-control" name="kodeKuisioner" value="" id="exampleFormControlInput1" >
                                        </div> -->

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Judul</label>
                                            <input type="text" class="form-control" name="judul" id="judul" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi Judul (Opsional)</label>
                                            <input type="text" class="form-control" name="deskripsi" rows="10" id="deskripsi" >
                                            <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
                                        </div>
                                        
                                        <!-- <div class="form-group">
                                            <label for="exampleFormControlInput1">Pertanyaan </label>
                                            <input type="text" class="form-control" name="pertanyaan" name="pertanyaan" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jawaban 1</label>
                                            <input type="text" class="form-control" name="jawaban1" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bobot Nilai Jawaban 1</label>
                                            <input type="text" class="form-control" name="bobotA" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jawaban 2</label>
                                            <input type="text" class="form-control" name="jawaban2" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bobot Nilai Jawaban 2</label>
                                            <input type="text" class="form-control" name="bobotB" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jawaban 3</label>
                                            <input type="text" class="form-control" name="jawaban3" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bobot Nilai Jawaban 3</label>
                                            <input type="text" class="form-control" name="bobotC" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jawaban 4</label>
                                            <input type="text" class="form-control" name="jawaban4" id="exampleFormControlInput1" >
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Bobot Nilai Jawaban 4</label>
                                            <input type="text" class="form-control" name="bobotD" id="exampleFormControlInput1" >
                                        </div>

 -->
                                    </form>
                                        <button class="btn btn-primary rounded-pill waves-effect waves-light" onclick="Submits()">Submit</button>
                                        
<script >
    function Submits(){
        var judul = document.getElementById('judul').value;
        var deskripsi = document.getElementById('deskripsi').value;
        var form = document.getElementById('myForm');
        if(judul ==  '' || deskripsi == ''){
            alert("Judul atau Deskripsi tidak boleh kosong");
        }else{
            form.submit();
        }
        
    }
</script>

                                        
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