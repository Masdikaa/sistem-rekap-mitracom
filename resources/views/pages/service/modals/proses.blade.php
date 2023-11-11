 {{-- MODAL CEK TO FIX --}}
 <div class="modal fade" id="prosesModal" tabindex="-1" role="dialog" aria-labelledby="prosesModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">SERVICE BARANG</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>     
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form id="prosesForm" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col ">
                              <p><b>Barang :</b> <span id="proses-namaBarang"></span></p>
                          </div>
                          <div class="col ">
                              <p><b>Customer :</b> <span id="proses-namaCustomer"></span></p>
                          </div>
                        </div>
                        <div class="mb-3">
                            <p><b>Kerusakan :</b> <span id="proses-kerusakan"></span></p>
                        </div>
                          <div class="row">
                            <div class="col ">
                                <p><b>Biaya Estimasi :</b> <span id="proses-estimasiBiaya"></span></p>
                            </div>
                            <div class="col ">
                                <p><b>Tanggal Estimasi :</b> <span id="proses-tanggalEstimasi"></span></p>
                            </div>
                          </div>
                        <div class="mb-3">
                          <p>Barang yang sudah diproses tidak akan bisa dibatalkan, Lanjutkan Proses?</p>
                        </div>
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                  <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-success" onclick="document.getElementById('prosesForm').submit()">PROSES</button>
                </div>
            </div>
        </div>
    </div>
  </div>
  {{-- END MODAL CEK TO FIX --}}


  <script>
    $(document).on('click', '#prosesButton', function(e){
               e.preventDefault();
               var idBarang = $(this).data('id');
                 console.log(idBarang);
                 $('#prosesForm').attr('action', '/input-service/' + idBarang + '/proses');
   
               $.ajax({
                   type: "GET",
                   url: "/input-service/"+idBarang +"/detail",
                   success: function (data) {
                    //    $('#idBarang').html("");
                       $('#proses-namaBarang').text(data.barang.namaBarang);
                       $('#proses-kerusakan').text(data.barang.kerusakan);
                       $('#proses-estimasiBiaya').text(data.barang.estimasiBiaya);
                       $('#proses-tanggalEstimasi').text(data.barang.tanggalEstimasi);
                       $('#proses-namaCustomer').text(data.barang.customer.namaCustomer);                    
                       // Update other modal fields as needed
                   }
               });

           });
   </script>
  