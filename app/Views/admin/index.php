<div class="container top-margin ">

    <br />
    <h2>Members Management </h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>User ID/Email Address</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Status</th>
                <th>Operation</th>
            </tr>

        </thead>
        <tbody>
            <?php if ($results != null) {
                foreach ($results  as $row) {
            ?>
                    <tr>
                        <?php
                        foreach ($row as $rowKey => $rowValue) {
                        ?>
                            <td><?= $rowValue ?></td>
                        <?php };
                        ?>
                        <td>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
            <?php };
            }; ?>

        </tbody>
    </table>
    <br />
    <br />

</div>


<script>
    $(document).ready(function() {
        $('.table').DataTable({
            sortable: true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "pageLength": 20
        });
    });
</script>