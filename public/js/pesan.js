document.getElementById('registrasiForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form default
    
    const formData = {
        email: document.getElementById('email').value,
        username: document.getElementById('username').value,
        password: document.getElementById('password').value
    };

    fetch('https://capstone-blendit.et.r.appspot.com/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            // tambahkan header lain yang diperlukan sesuai kebutuhan
        },
        body: JSON.stringify(formData)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json();
    })
    .then(data => {
        console.log('Success:', data);
        // Lakukan tindakan selanjutnya setelah berhasil, misalnya menampilkan alert
          // Lakukan tindakan selanjutnya setelah berhasil, misalnya menampilkan alert
          const successAlert = document.getElementById('successAlert');
          if (successAlert) {
              successAlert.classList.remove('d-none'); // Tampilkan alert sukses
          } else {
              console.error('Element with id "successAlert" not found.');
          }
          
          // Kosongkan nilai input setelah berhasil
          document.getElementById('email').value = '';
          document.getElementById('username').value = '';
          document.getElementById('password').value = '';
       
    })
    .catch(error => {
        console.error('There was a problem with your fetch operation:', error);
        // Handle error, misalnya menampilkan alert
        alert('There was a problem with your registration.');
    });
});
function closeAlert() {
    document.getElementById('successAlert').classList.add('d-none'); // Menyembunyikan pesan sukses
}