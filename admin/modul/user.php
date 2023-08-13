<div class="container">
<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
        <th scope="col">Jabatan</th>
        </tr>
    </thead>
    <?php
            $sql=mysqli_query($con,"SELECT * FROM tb_admin");
            ;

            while ($row=mysqli_fetch_assoc($sql)) {
            ?>
            <tbody>
            <tr>
                <td><?=$row['nama']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['jabatan']?></td>
            </tr>
        </tbody>
        <?php
            }
        ?>
</table>
</div>