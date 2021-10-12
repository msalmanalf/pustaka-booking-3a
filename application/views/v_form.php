<!DOCTYPE html>

<head>
    <title>Membuat Form Validation</title>
</head>

<body>
    <h1>Membuat Form Validation</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/aksi'); ?>
    <label for="">nama</label>
    <input type="text" name="nama" id=""> <br>
    <label for="">email</label>
    <input type="text" name="email" id=""> <br>
    <label for="">Konfirmasi Email</label>
    <input type="text" name="konfir_email" id=""> <br>
    <input type="submit" value="Simpan">
</body>