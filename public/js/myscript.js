let buttons = document.querySelectorAll('.btn-delete');
buttons.forEach(function(item) {
    item.addEventListener('click', konfirmasi);
})

function konfirmasi(event){
    let button = event.currentTarget;
    let alertTitle;
    let alertMessage;

    switch(button.getAttribute('data-table')){
        case 'kartu_keluarga':
            alertTitle = 'Hapus kartu keluarga '+button.getAttribute('data-name')+'?';
            alertMessage = 'Semua data <b>penduduk</b> yang ada pada kartu keluarga ini juga akan terhapus!';
        break;
        
        case 'penduduk':
            alertTitle = 'Hapus penduduk bernama '+button.getAttribute('data-name')+'?';
            alertMessage = 'Apakah anda yakin ingin menghapus data ini?';
        break;
    }

    event.preventDefault();
    Swal.fire({
        title: alertTitle,
        html: alertMessage,
        icon: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#6c757d',
        confirmButtonColor: '#dc3545',
        cancelButtonText: 'Tidak jadi',
        confirmButtonText: 'Ya, hapus!',
        reverseButtons: true,
    }).then((result) => {
        if(result.value){
            button.parentElement.submit();
        }
    })
}