<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
    <div class="col-xs-3">  
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
        <i><?php echo form_error('nama');?></i>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">NIM</label>
    <div class="col-sm-10">
    <div class="col-xs-2">
        <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukan NIM">
        <i><?php echo form_error('nim');?></i>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">
    <div class="col-xs-3">  
        <label class="radio-inline">
    <input type="radio" name="jekel" id="jekel" value="Laki-laki"> Laki-laki
  </label>
<label class="radio-inline">
    <input type="radio" name="jekel" id="jekel" value="Perempuan"> Perempuan
    </label>
    <i><?php echo form_error('jekel');?></i>
      </div>
    </div>
  </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Agama</label>
    <div class="col-sm-10">
    <div class="col-xs-2">  
        <select class="form-control">
            <option>--Pilih--</option>
            <option>Islam</option>
            <option>Kristen</option>
            <option>Hindu</option>
            <option>Budha</option>
            <option>Katolik</option>
        </select>
      </div>
    </div>
  </div>
<div class="form-group">
    <label class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
    <div class="col-xs-3">  
       <textarea name="alamat" class="form-control" rows="6"></textarea>
        <i><?php echo form_error('alamat');?></i>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Hobi</label>
    <div class="col-sm-15">
    <div class="col-xs-4">  
          &nbsp;&nbsp;&nbsp;&nbsp; <label class="checkbox-inline">
              <input type="checkbox" id="futsal" value="futsal"> Futsal
          </label>
          <label class="checkbox-inline">
              <input type="checkbox" id="membaca" value="membaca"> Membaca
          </label>
          <label class="checkbox-inline">
              <input type="checkbox" id="berenang" value="berenang"> Berenang
          </label>
          <label class="checkbox-inline">
              <input type="checkbox" id="basket" value="basket"> Basket
          </label>
        </div>
      </div>
  </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-primary" name="simpan" value="simpan">
    </div>
  </div>
</form>