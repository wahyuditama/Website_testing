// Custom JavaScript for content

// Function to display selected content and hide others
function showContent(id) {
  var contents = document.getElementsByClassName('content');
  for (var i = 0; i < contents.length; i++) {
    if (contents[i].id === id) {
      contents[i].style.display = 'block';
    } else {
      contents[i].style.display = 'none';
    }
  }
}

// Add event listeners to navbar links
document.querySelectorAll('.navbar-nav a.nav-link ').forEach((link) => {
  link.addEventListener('click', function (event) {
    var targetId = this.getAttribute('href').substring(1);
    showContent(targetId);
  });
});

// modal

document.querySelectorAll('.btnDetail').forEach((item) => {
  item.addEventListener('click', (e) => {
    let parent = e.target.parentNode.parentNode;

    let gambar = parent.querySelector('.card-img-top').src;
    let harga = parent.querySelector('.harga').innerHTML;
    let judul = parent.querySelector('.card-text').innerHTML;
    let deskripsi = parent.querySelector('.deskripsi')
      ? parent.querySelector('.deskripsi').innerHTML
      : '<i>tidak ada informasi yang tersedia</i>';

    let tombolModal = document.querySelector('.btnModal');
    tombolModal.click();

    document.querySelector('.modalTitle').innerHTML = judul;
    let image = document.createElement('img');
    image.src = gambar;
    image.classList.add('w-80');
    document.querySelector('.modalImage').innerHTML = '';
    document.querySelector('.modalImage').appendChild(image);
    document.querySelector('.modalDeskripsi').innerHTML = deskripsi;
    document.querySelector('.modalHarga').innerHTML = harga;

    const nohp = '62857123123';
    let pesan = `https://api.whatsapp.com/send?phone=${nohp}&text=Halo Bang, Item Ini Masih Tersedia Kah ? ${gambar}`;

    document.querySelector('.btnBeli').href = pesan;
  });
});
