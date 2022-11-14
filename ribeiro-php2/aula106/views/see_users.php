<div class="container">
    <div class="row">
        <div class="col-sm 6 ofsset-sm-3">

            <div class="row">
                <div class="col">
                    <h1>Users</h1>
                </div>
                <div class="col text-end">
                    <a href="logout.php">Logout</a>
                </div>
            </div>

            
            <hr>

            <?php if(count($users) == 0):?>
                <p>Não foram encontrados usuários.</p>
            <?php else: ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Full name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user):?>
                            <tr>
                                <td><?= $user['user']?></td>
                                <td><?= $user['full_name']?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            <?php endif;?>
        </div>
    </div>
</div>