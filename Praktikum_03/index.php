<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container mt-5">
        <h2>Selamat Datang di perpustakaan STT-NF</h2>
        <p>Silahkan Isi Buku Tamu dibawah ini</p>
        <hr>
    <form action="kunjungan.php" method="post">
    <div class="form-group row">
    <label for="full name" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
        <input id="full name" name="fullname" type="text" class="form-control" aria-describedby="full nameHelpBlock" required="required"> 
        <span id="full nameHelpBlock" class="form-text text-muted">Nama Lengkap Kamu</span>
    </div>
    </div>
    <div class="form-group row">
    <label for="email" class="col-4 col-form-label">email</label> 
    <div class="col-8">
        <input id="email" name="email" type="text" class="form-control" required="required" aria-describedby="messageHelpBlock"> 
        <span id="messageHelpBlock" class="form-text text-muted">alamat email kamu</span>
    </div>
    </div>
    <div class="form-group row">
    <label for="Message" class="col-4 col-form-label">keperluan</label> 
    <div class="col-8">
        <textarea id="Message" name="message" cols="40" rows="5" class="form-control" aria-describedby="MessageHelpBlock" required="required"></textarea> 
        <span id="MessageHelpBlock" class="form-text text-muted">isi keperluan kamu</span>
    </div>
    </div> 
    <div class="form-group row">
    <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </form>
    </div>
</body>
</html>