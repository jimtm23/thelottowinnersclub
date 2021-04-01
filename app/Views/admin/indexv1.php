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
            </tr>

        </thead>
        <tbody>
        </tbody>


    </table>

    <br />
    <h2>Users Management </h2>

    <br />
    <br />

</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

<script>
    var dTable;



    $('#gridMembers').DataTable({
        "ajax": {
            url: "<?php echo base_url(); ?>/admin/viewcustomers",
            type: 'GET'
        },
        columns: [{
                data: "user_id"
            },
            {
                data: "name"
            },
            {
                data: "address"
            },
            {
                data: "contact_no"
            },
            {
                data: "status"
            }
        ],
        "pageLength": 10,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf'
        ]
    });


    request.done((function(_this) {
        return function(data, textStatus, jqXHR) {
            return newWindow.location = data.Url;
        };
    })(this));

    $('#gridMembers').on('click', '.btn-primary', function() {
        //delete
        var RowIndex = $(this).closest('tr');
        var data = dTable.row(RowIndex).data();
        alert(data[0]);
        var url = "register.php?id=" + id;
        window.open(url, "_self")
        //window.location = "/registration.php?id="+Data[0];

    });


    $('#gridMembers').on('click', '.btn-danger', function() {
        //delete
        var RowIndex = $(this).closest('tr');
        var data = dTable.row(RowIndex).data();
        alert(data[1]);
        var url = "register.php?id=" + id;
        //window.open(url, "_self")
        //window.location = "/registration.php?id="+Data[0];

    });

    function callScript(id) {

        var url = "register.php?id=" + id;
        window.open(url, "_self")


    }
</script>