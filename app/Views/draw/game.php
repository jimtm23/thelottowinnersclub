<div class="container top-margin">
    <h2><?=  $results[0]['gameName'] ?></h2>
    <table class="table">
        <thead>
            <tr>
                <th>Draw Date</th>
                <th>Winning Numbers</th>
                <th>Multiplier</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result):?>
            <tr>
                <td><?php  $date = new DateTime($result['drawDate']); echo $date->format('m/d/Y'); ?></td>
                    <td>
                        <ul class="balls">
                            <?php $numbers = explode("-",$result['winningNumbers']);?>
                            <?php foreach ($numbers as $number):?>
                                <li><?= $number;?></li>
                            <?php endforeach;?>
                            <li class="active"><?php echo $result['winningBall'];?></li>
                        </ul>
                    </td>
                <td><?=  $result['multiplier'] ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('.table').DataTable({
            "order": [[ 0, "asc" ]]
        });
    } );
</script>