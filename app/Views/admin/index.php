<div class="container top-margin ">

    <br />
    <h2>Members Management </h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Member Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Status</th>
                <th>Operation</th>
            </tr>

        </thead>
        <tbody>
            <?php if ($results != null) {
                foreach ($results as $result) : ?>
                    <tr>
                        <td><?= $result['name'] ?></td>
                        <td><?= $result['address'] ?></td>
                        <td><?= $result['contact'] ?></td>
                        <td><?= $result['status'] ?></td>
                        <td>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
            <?php endforeach;
            }; ?>

        </tbody>
    </table>
    <br />
    <br />

</div>



<script>
    $(document).ready(function() {
        $('.table').DataTable({
            sortable: false
        });
    });
</script>