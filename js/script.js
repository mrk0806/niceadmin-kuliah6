const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

//hilangkan tombol cari
tombolCari.style.display = 'none';




keyword.addEventListener('keyup', function() {
    // console.log('ok! ')
    //ajax
    //xmlhttprequest
    // const xhr = new XMLHttpRequest();

    // xhr.onreadystatechange = function() {
    //     if (xhr.readyState == 4 && xhr.status == 200) {
    //         // console.log(xhr.responseText);
    //         // console.log('ok')
    //         container.innerHTML = xhr.responseText;
    //     }
    // };

    // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
    // xhr.send();


    //menggunakan fetch
    fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));

});


//tambahkan preview image untuk tambah dan ubah
function previewImage() {
    const gambar = document.querySelector('.gambar');
    const imgPreview = document.querySelector('.img-preview');
    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}