
        document.getElementById('registrasiForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var form = event.target;
            var formData = new FormData(form);
            fetch(form.action, {
                method: form.method,
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('successAlert').classList.remove('d-none');
                    form.reset();
                } else {
                    alert('Registration failed');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Registration failed');
            });
        });
