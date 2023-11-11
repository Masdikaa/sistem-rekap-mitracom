 {{-- MODAL CEK TO FIX --}}
 <div class="modal fade" id="selesaiModal" tabindex="-1" role="dialog" aria-labelledby="selesaiModal" aria-hidden="true">
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
                    <form id="selesaiForm" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col ">
                              <p><b>Barang :</b> <span id="selesai-namaBarang"></span></p>
                          </div>
                          <div class="col ">
                              <p><b>Customer :</b> <span id="selesai-namaCustomer"></span></p>
                          </div>
                        </div>
                        <div class="mb-3">
                            <p><b>Kerusakan :</b> <span id="selesai-kerusakan"></span></p>
                        </div>
                        <div class="mb-3">
                            <p><b>Kelengkapan:</b> <span id="selesai-kelengkapan"></span></p>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                              <label class="form-label" for="biayaPerbaikan">Biaya Perbaikan :</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">Rp.</span>
                                  </div>
                                  <input type="text" class="form-control" id="biayaPerbaikan" name="biayaPerbaikan" placeholder="">
                              </div>
                            </div>
                            <div class="col mb-3">
                              <label class="form-label" for="tanggalAmbil">Estimasi Selesai :</label>
                              <input type="date" class="form-control" id="tanggalAmbil" name="tanggalAmbil" placeholder="DD-MM-YYYY">
                            </div>
                        </div>
  
                    </form>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                  <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-success" onclick="document.getElementById('selesaiForm').submit()">SELESAI</button>
                </div>
            </div>
        </div>
    </div>
  </div>
  {{-- END MODAL CEK TO FIX --}}


  <script>
    $(document).on('click', '#selesaiButton', function(e){
               e.preventDefault();
               var idBarang = $(this).data('id');
                 console.log(idBarang);
                 $('#selesaiForm').attr('action', '/input-service/' + idBarang + '/selesai');
   
               $.ajax({
                   type: "GET",
                   url: "/input-service/"+idBarang +"/detail",
                   success: function (data) {
                      //  $('#idBarang').html("");
                       $('#selesai-namaBarang').text(data.barang.namaBarang);
                       $('#selesai-namaCustomer').text(data.barang.customer.namaCustomer);   
                       $('#selesai-kerusakan').text(data.barang.kerusakan);  
                       $('#selesai-kelengkapan').text(data.barang.kelengkapan);               
                       // Update other modal fields as needed
                   }
               });

           });
   </script>
  