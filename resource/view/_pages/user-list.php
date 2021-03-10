<?php
$page = $_SERVER['PHP_SELF'];
?>
<h1 class="mt-5">USERS</h1>
<div>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col"><a href="<?=$page?>?orderBy=username">User Name</a></th>
            <th scope="col"><a href="<?=$page?>?orderBy=age"">Age</a></th>
            <th scope="col">Email</th>
            <th scope="col">Codice Fiscale</th>
        </tr>
        </thead>
        <tbody>
        <?php $index = 1;?>
        <?php foreach (getUsers($conn, $params = []) as $user ) { ?>
            <tr>

                <th scope="row"><?= $index?></th>
                <td><?php echo $user['username']?></td>
                <td><?php echo $user['age']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['codice_fiscale']?></td>

            </tr>
            <?php $index++; ?>
        <?php }?>

        </tbody>
    </table>
</div>