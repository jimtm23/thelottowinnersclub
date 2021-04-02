<div class="container top-margin ">

    <br />
    <h2>Members Management </h2>

    <table class="table table-striped" id="gridMembers">
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
                            <!--
                            <a href="/members/maintain?" .<?php $rowKey ?>>
                                <button class="btn btn-primary">Update</button>
                            </a>
                            -->
                            <button id="updateBtn" class="btn btn-primary">Update</button>
                            <button id="deleteBtn" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
            <?php };
            }; ?>

        </tbody>
    </table>

    <br />
    <h2>Users Management </h2>
    <table class="table table-striped" id="gridUsers">
        <thead>
            <tr>
                <th>User ID/Email Address</th>
                <th>Status</th>
            </tr>

        </thead>
        <tbody>
            <?php if ($users != null) {
                foreach ($users  as $row) {
            ?>
                    <tr>
                        <?php
                        foreach ($row as $rowKey => $rowValue) {
                        ?>
                            <td><?= $rowValue ?></td>
                        <?php };
                        ?>
                        <td>
                            <button id="updateUserBtn" class="btn btn-primary">Update</button>
                            <button id="deleteUserBtn" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
            <?php };
            }; ?>

        </tbody>
    </table>

    <br />
    <br />

</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
    var dTable;
    $(document).ready(function() {
        dTable = $('#gridMembers').DataTable({
            sortable: true,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "pageLength": 10

        });
    });

    $('#gridMembers').on('click', '.btn-primary', function() {
        //update
        var RowIndex = $(this).closest('tr');
        var data = dTable.row(RowIndex).data();
        window.location.replace("/members/maintain?userID=" + data[0]);

    });

    $('#gridMembers').on('click', '.btn-danger', function() {
        //delete
        var RowIndex = $(this).closest('tr');
        var data = dTable.row(RowIndex).data();

        //window.location.replace("/members/deleteCustomer?userID=" + data[0]);

        var url = '<?php base_url() ?>/members/deleteCustomer';
        var params = "userID=" + data[0];
        var xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);

        //Send the proper header information along with the request
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(params);
        window.location.replace("/admin")

    });
    //********************************************** */
    var dUserTable;
    $(document).ready(function() {
        dTable = $('#gridUsers').DataTable({
            sortable: true,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "pageLength": 10

        });
    });
</script>