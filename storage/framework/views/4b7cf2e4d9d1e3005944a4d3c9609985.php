<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">       
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Document</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Tambah Data</h2>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama...">
                </div>
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" class="form-control" id="nim" placeholder="NIM...">
                </div>
                <button class="btn btn-primary" onclick="latihandom()">Tambah</button>
            </div>
        </div>
        <hr>
        <h2>Daftar Data</h2>
        <ul class="list-group" id="listdom"></ul>
    </div>

    <script>
        /*
        function getdata() {
            fetch('/showajax')
                .then(response => response.json())
                .then(data => {
                    console.log('sukses'data);
                    data.forEach(item => {
                        var listItem = document.createElement("li");
                        listItem.textContent = "nama: " + item.nama + ", NIM: " + item.nim;
                        document.getElementById("listdom").appendChild(listItem);
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
*/




        async function latihandom() {
            var nama = document.getElementById("nama").value;
            var nim = document.getElementById("nim").value;
            
            if (!nama || !nim) {
                alert('Nama dan NIM harus diisi!');
                return;
            }
            
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            
            try {
                const response = await fetch('/storeajax', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token
                    },
                    body: JSON.stringify({ nama: nama, nim: nim })
                });
                
                const data = await response.json();
                console.log(data);

                var listItem = document.createElement("li");
                listItem.classList.add("list-group-item");
                listItem.textContent = "nama: " + nama + ", NIM: " + nim;
                document.getElementById("listdom").appendChild(listItem);
                document.getElementById("nama").value = "";
                document.getElementById("nim").value = "";
            } catch (error) {
                console.error('Error:', error);
                alert('Gagal menambah data!');
            }
        }
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\PraktikumWeb\resources\views/welcome.blade.php ENDPATH**/ ?>