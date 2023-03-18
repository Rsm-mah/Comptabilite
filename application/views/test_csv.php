<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo form_open_multipart('upload/uploadFile');?>
    <div class="num">
        <label for="nif">NIF</label>
        <input type="file" name="nif" size="20000" />

    </div>
        
    </form>

    <form method="post" action="<?php echo site_url('upload/uploadFile'); ?>">
        <input type="file" name="nif" onchange="updatePathNif(this);">
        <input type="hidden" name="filePathNif" id="filePathNif">

        <input type="file" name="ns" onchange="updatePathNs(this);">
        <input type="hidden" name="filePathNs" id="filePathNs">

        <input type="submit" value="Envoyer">
    </form>

    <script>
        function updatePathNif(input) {
            document.getElementById('filePathNif').value = input.value;
        }

        function updatePathNs(input) {
            document.getElementById('filePathNs').value = input.value;
        }
    </script>


    <form action="<?php echo site_url('accueil/generateZero'); ?>" method="get">
        <input type="number" name="nb">
        <input type="submit" value="valider">
    </form>
    
    <p><?php echo $val ?></p>
</body>
</html>