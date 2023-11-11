 {{-- MODAL CEK TO FIX --}}
 <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">DETAIL SERVICE</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>     
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form id="detailForm" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <p><b>Nama Barang :</b> <span id="detail-namaBarang"></span></p>
                        </div>
                        <div class="row">
                          <div class="col ">
                              <p><b>Nama Customer :</b> <span id="detail-namaCustomer"></span></p>
                          </div>
                          <div class="col ">
                              <p><b>No Hp :</b> <span id="detail-noHP"></span></p>
                          </div>
                        </div>
                        <div class="mb-3">
                            <p><b>Alamat :</b> <span id="detail-alamat"></span></p>
                        </div>
                        
                        <div class="mb-3">
                            <p><b>Kerusakan Barang :</b> <span id="detail-kerusakan"></span></p>
                        </div>
                        <div class="mb-3">
                            <p><b>Kelengkapan Barang :</b> <span id="detail-kelengkapan"></span></p>
                        </div>
                          <div class="row">
                            <div class="col ">
                                <p><b>Tanggal Masuk :</b> <span id="detail-tanggalMasuk"></span></p>
                            </div>
                            <div class="col ">
                                <p><b>Tanggal Ambil :</b> <span id="detail-tanggalAmbil"></span></p>
                            </div>
                          </div>
                          <div class="mb-3">
                            <p><b>Biaya Perbaikan :</b> <span id="detail-biayaPerbaikan"></span></p>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                  <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-dismiss="modal">Close</button>
                    {{-- <button type="submit" class="btn btn-sm btn-success" onclick="document.getElementById('prosesForm').submit()">PROSES</button> --}}
                </div>
            </div>
        </div>
    </div>
  </div>
  {{-- END MODAL CEK TO FIX --}}


  <script>
    $(document).on('click', '#detailButton', function(e){
               e.preventDefault();
               var idBarang = $(this).data('id');
                 console.log(idBarang);
                //  $('#prosesForm').attr('action', '/input-service/' + idBarang + '/proses');
   
               $.ajax({
                   type: "GET",
                   url: "/input-service/"+idBarang +"/detail",
                   success: function (data) {
                    //    $('#idBarang').html("");
                       $('#detail-namaBarang').text(data.barang.namaBarang);
                       $('#detail-namaCustomer').text(data.barang.customer.namaCustomer);      
                       $('#detail-noHP').text(data.barang.customer.noHP);  
                       $('#detail-alamat').text(data.barang.customer.alamat);   
                       $('#detail-kerusakan').text(data.barang.kerusakan);   
                       $('#detail-kelengkapan').text(data.barang.kelengkapan);  
                       $('#detail-tanggalMasuk').text(data.barang.tanggalMasuk);  
                       $('#detail-tanggalAmbil').text(data.barang.tanggalAmbil);    
                       $('#detail-biayaPerbaikan').text(data.barang.biayaPerbaikan);  
                       // Update other modal fields as needed
                   }
               });

           });
   </script>
  