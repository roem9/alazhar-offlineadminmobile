        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="msg-peserta"></div>
                </div>
            </div>
            <div class="row" id="dataPeserta">
                
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<!-- modal add peserta -->
    <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKonfirmasiTitle">Konfirmasi Peserta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body cus-font" id="modal-add">
                <div class="msg-add-data"></div>
                <form id="formAdd">
                    <input type="hidden" name="id_peserta" id="id_peserta_add">
                    <div class="form-group">
                        <label for="tgl_daftar">Tgl Daftar</label>
                        <input type="date" name="tgl_daftar" id="tgl_daftar_add" class="form-control form-control-sm"required>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" id="nik_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_indo">Nama Lengkap (Indonesia)</label>
                        <input type="text" name="nama_indo" id="nama_indo_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_arab">Nama Lengkap (Arab)</label>
                        <input type="text" name="nama_arab" id="nama_arab_add" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="t4_lahir_indo">Tempat Lahir (Indonesia)</label>
                        <input type="text" name="t4_lahir_indo" id="t4_lahir_indo_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="t4_lahir_arab">Tempat Lahir (Arab)</label>
                        <input type="text" name="t4_lahir_arab" id="t4_lahir_arab_add" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tgl Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk_add" class="form-control form-control-sm" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desa_kel_indo">Desa / Kelurahan (Indonesia)</label>
                        <input type="text" name="desa_kel_indo" id="desa_kel_indo_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="desa_kel_arab">Desa / Kelurahan (Arab)</label>
                        <input type="text" name="desa_kel_arab" id="desa_kel_arab_add" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="kec_indo">Kecamatan (Indonesia)</label>
                        <input type="text" name="kec_indo" id="kec_indo_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="kec_arab">Kecamatan (Arab)</label>
                        <input type="text" name="kec_arab" id="kec_arab_add" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="kota_kab_indo">Kota / Kabupaten (Indonesia)</label>
                        <input type="text" name="kota_kab_indo" id="kota_kab_indo_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="kota_kab_arab">Kota / Kabupaten (Arab)</label>
                        <input type="text" name="kota_kab_arab" id="kota_kab_arab_add" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="no_wa">No Whatsapp</label>
                        <input type="text" name="no_wa" id="no_wa_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email_add" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label for="pembayaran">Pembayaran</label>
                        <input type="text" name="pembayaran" id="pembayaran_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="form-group">
                        <label for="detail_pembayaran">Detail Pembayaran</label>
                        <textarea name="detail_pembayaran" id="detail_pembayaran_add" class="form-control form-control-sm" required>pendaftaran, keamanan, kaos, asrama</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Pilih Program</label>
                        <select name="program" id="program_add" class="form-control form-control-sm" required>
                            <option value="">Pilih Program</option>
                            <?php foreach ($program as $data) :?>
                                <option value="<?= $data['program']?>"><?= $data['program']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="perioe">Periode Belajar</label>
                        <input type="date" name="periode" id="periode_add" class="form-control form-control-sm" required>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <button type="button" class="btn btn-sm btn-danger mr-1" id="btnmodalHapus">Hapus</button>
                        <input type="submit" value="Konfirmasi Peserta" class="btn btn-sm btn-primary" id="btnmodalAdd">
                    </div>
                </form>
            </div>
          </div>
      </div>
    </div>
<!-- modal add peserta -->

<script>
    reload_data();

    function reload_data(){
        $.ajax({
            type : "GET",
            url : "<?= base_url()?>peserta/get_peserta_konfirm",
            dataType : "JSON",
            success : function(data){
                html = "";
                if(data.length != 0){
                    data.forEach(peserta => {
                        html += `
                        <div class="col-12 mb-1">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>
                                        <i class="fa fa-user"></i> `+peserta.nama_indo+`
                                    </span>
                                    <span>
                                        <a href="#modalKonfirmasi" data-toggle="modal" id="btnModalKonfirm" data-id="`+peserta.id_peserta+`" class="btn btn-sm btn-success mr-1"><i class="fa fa-user-check"></i></a>
                                    </span>
                                </li>
                            </ul>
                        </div>`;
                    });
                } else {
                    html = `<div class="col-12">
                                <div class="alert alert-warning"><i class="fa fa-exclamation-circle text-warning mr-2"></i>List Konfirmasi Peserta Kosong</div>
                            </div>`;
                }

                $("#dataPeserta").html(html);
            }
        })
    }

    // when click btn modal konfirm 
    $("#dataPeserta").on("click", "#btnModalKonfirm", function(){
        let id_peserta = $(this).data("id");

        $.ajax({
            url: "<?= base_url()?>peserta/get_peserta",
            method: "POST",
            dataType: "JSON",
            data: {id_peserta: id_peserta},
            success: function(result){
                // $("modalKonfirmasiTitle").html(result.nama_indo)
                $('#no_peserta_add').val(result.no_peserta)
                $('#tgl_daftar_add').val(result.tgl_daftar)
                $('#nik_add').val(result.nik)
                $('#nama_indo_add').val(result.nama_indo)
                $('#nama_arab_add').val(result.nama_arab)
                $('#t4_lahir_indo_add').val(result.t4_lahir_indo)
                $('#t4_lahir_arab_add').val(result.t4_lahir_arab)
                $('#tgl_lahir_add').val(result.tgl_lahir)
                $('#jk_add').val(result.jk)
                $('#desa_kel_indo_add').val(result.desa_kel_indo)
                $('#desa_kel_arab_add').val(result.desa_kel_arab)
                $('#kec_indo_add').val(result.kec_indo)
                $('#kec_arab_add').val(result.kec_arab)
                $('#kota_kab_indo_add').val(result.kota_kab_indo)
                $('#kota_kab_arab_add').val(result.kota_kab_arab)
                $('#no_wa_add').val(result.no_wa)
                $('#pembayaran_add').val(formatRupiah(result.pembayaran, "Rp"))
                $('#detail_pembayaran_add').val(result.detail_pembayaran)
                $('#email_add').val(result.email)
                $("input[name='id_peserta']").val(result.id_peserta)
            }
        })
    })

    // when delete peserta 
    $("#btnmodalHapus").click(function(){
        let id_peserta = $('#id_peserta_add').val()
        if(confirm("Yakin akan menghapus peserta ini?")){
            $.ajax({
                url: "<?= base_url()?>peserta/delete_peserta",
                type: "POST",
                data: {id_peserta: id_peserta},
                dataType: "JSON",
                success: function(result){
                    reload_data();
                    $(".msg-peserta").html(`
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check-circle text-success mr-1"></i> berhasil menghapus peserta atas nama `+result.nama_indo+`
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>`)
                    $("#modalKonfirmasi").modal('hide');
                },
                error: function(xhr, ajaxOptions, thrownError){
                    alert(ajaxOptions);
                }
            })
        }
    })

    // when konfirm peserta 
    $("#formAdd").submit(function(){
        if(confirm("Yakin akan mengkonfirmasi peserta ini?")){
            let id_peserta = $('#id_peserta_add').val()
            let tgl_daftar = $('#tgl_daftar_add').val()
            let nik = $('#nik_add').val()
            let nama_indo = $('#nama_indo_add').val()
            let nama_arab = $('#nama_arab_add').val()
            let t4_lahir_indo = $('#t4_lahir_indo_add').val()
            let t4_lahir_arab = $('#t4_lahir_arab_add').val()
            let tgl_lahir = $('#tgl_lahir_add').val()
            let jk = $('#jk_add').val()
            let desa_kel_indo = $('#desa_kel_indo_add').val()
            let desa_kel_arab = $('#desa_kel_arab_add').val()
            let kec_indo = $('#kec_indo_add').val()
            let kec_arab = $('#kec_arab_add').val()
            let kota_kab_indo = $('#kota_kab_indo_add').val()
            let kota_kab_arab = $('#kota_kab_arab_add').val()
            let no_wa = $('#no_wa_add').val()
            let pembayaran = $('#pembayaran_add').val()
            let detail_pembayaran = $('#detail_pembayaran_add').val()
            let email = $('#email_add').val()
            let program = $('#program_add').val()
            let periode = $('#periode_add').val()

            $.ajax({
                type : "POST",
                url : "<?= base_url()?>peserta/konfirm_peserta",
                dataType : "JSON",
                data : {id_peserta: id_peserta, tgl_daftar: tgl_daftar,nik: nik,nama_indo: nama_indo,nama_arab: nama_arab,t4_lahir_indo: t4_lahir_indo,t4_lahir_arab: t4_lahir_arab,tgl_lahir: tgl_lahir,jk:jk,desa_kel_indo: desa_kel_indo,desa_kel_arab: desa_kel_arab,kec_indo: kec_indo,kec_arab: kec_arab,kota_kab_indo: kota_kab_indo,kota_kab_arab: kota_kab_arab,no_wa: no_wa,pembayaran: pembayaran,detail_pembayaran: detail_pembayaran,email: email, program: program, periode:periode},
                success : function(result){
                    reload_data()
                    $("#modalKonfirmasi").modal('hide');
                    var msg = `
                            <div class="alert alert-success alert-dismissible fade show" role="alert"><i class="fa fa-check-circle text-success mr-1"></i> Berhasil mengkonfirmasi peserta atas nama `+result.nama_indo+`<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>`;
                    $('.msg-peserta').html(msg);
                },
            })
        }
        return false;
    })

    $("input[name=pembayaran]").keyup(function(){
        $(this).val(formatRupiah(this.value, 'Rp. '))
    })
</script>