<script>
    var newId = 1;
    function addRow() {
        newId++;
        var markup = "<div class='row' id='row"+newId+"'><div class='form-group col-md-4'><label for='kriteria' class='col-sm-4 control-label'>Kriteria</label><div class='col-sm-8'><input type='text' class='form-control' id='kriteria' name='kriteria[]' placeholder='Isikan...'/></div></div><div class='form-group col-md-2'><label for='bobot' class='col-sm-4 control-label'>Bobot</label><div class='col-sm-8'><input type='text' class='form-control' id='bobot' name='bobot[]' placeholder='Isikan...'/></div></div><div class='form-group col-md-4'><label for='tahap' class='col-sm-4 control-label'>Tahap</label><div class='col-sm-8'><select name='tahap[]' id='tahap' class='form-control'><option value='0'>Wawancara</option><option value='1'>Uji Kemampuan</option></select></div></div><div class='form-group col-md-2'><button class='btn btn-danger' type='button' onclick='removeRow("+newId+")'><i class='fa fa-minus'></i></button></div></div>";
        $("#daftarKriteria").append(markup);
    }

    function removeRow(id) {
        var rowId = '#row' + id;
        // TODO Hapus di Database
        $(rowId).remove();
    }
</script>