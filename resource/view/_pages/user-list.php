<?php



?>
<h1 class="mt-5">USERS</h1>
<div>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th class="<?= $orderBy == 'username' ? $orderClass : '' ?>" scope="col"><a href="<?=$page?>?orderBy=username&orderDir=<?=$orderDir?>&recordsPerPage=<?=$recordsPerPage?>">User Name </a></th>
            <th class="<?= $orderBy == 'age' ? $orderClass : '' ?>" scope="col"><a href="<?=$page?>?orderBy=age&orderDir=<?=$orderDir?>&recordsPerPage=<?=$recordsPerPage?>">Age</a></th>
            <th class="<?= $orderBy == 'email' ? $orderClass : '' ?>" scope="col"><a href="<?=$page?>?orderBy=email&orderDir=<?=$orderDir?>&recordsPerPage=<?=$recordsPerPage?>">Email</a></th>
            <th class="<?= $orderBy == 'codice_fiscale' ? $orderClass : '' ?>" scope="col"><a href="<?=$page?>?orderBy=codice_fiscale&orderDir=<?=$orderDir?>&recordsPerPage=<?=$recordsPerPage?>">Codice Fiscale</a></th>
        </tr>
        </thead>
        <tbody>
        <?php $index = 1;?>
        <?php foreach (getUsers($conn, $params) as $user ) { ?>
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
        <tfoot>
            <tr>
                <td colspan="5">
                    <?php require_once __DIR__ . "/pagination.php" ?>
                </td>
            </tr>
        </tfoot>
    </table>
</div>