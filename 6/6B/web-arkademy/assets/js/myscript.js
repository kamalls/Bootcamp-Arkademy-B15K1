// Hapus Cashier
$('.tombol-hapuscashier').on('click', function (e){
e.preventDefault(); //aksi defaultnya itu dia ga akan menjalankan href
const href = $(this).attr('href'); 

Swal({
  title: 'Yakin ingin menghapus',
  text: "Data ini",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText:'Batal',
  confirmButtonText: 'Hapus Data!'
}).then((result) => {
  if (result.value) {
    document.location.href = href;
  }
})
});