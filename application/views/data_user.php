<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <h1>Daftar User</h1>
    <table border="1">
        <thead>
        <tr>
            <th>Id User</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
            <?php
            if ($r = $data_user){
                foreach($data_user as $user){
                    ?>
                        <tr>
                        <td><?php echo $user->id_user; ?></td>
                        <td><?php echo $user->nama; ?></td>
                        <td><?php echo $user->username; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->alamat; ?></td>
                        <td><?php echo '<a href= "'.base_url().'index.php/user_controller/delete_user/'.$user->id_user.'" onclick="return confirm(\'Anda yakin akan menghapus '.$user->username.'?\')"> Delete </a>'?></td>
                        <td><?php echo '<a href= "'.base_url().'index.php/user_controller/edit_user/'.$user->id_user.'"> Edit </a>'?></td>
                    </tr>
                    <?php
                }
            }else{
                echo "empty Data";
            } ?>
    </tbody>
    </table>
</body>
</html>