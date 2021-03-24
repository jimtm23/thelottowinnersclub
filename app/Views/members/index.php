<div class="container top-margin ">
    <div>
        <h2> Member's Name: John Doe </h2>
        <h2> Balance : $80.23</h2>

    </div>
    <br />
    <br />
    <h2> Bet Orders : </h2>


    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Ticket Lucky Numbers</th>
                <th>Game Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>

            <tr>
                <td>Mar 01, 2021</td>
                <td>
                    <ul class="balls">
                        <li>1</li>
                        <li>36</li>
                        <li>44</li>
                        <li>54</li>
                        <li>66</li>
                        <li class="active">10</li>
                    </ul>
                </td>
                <td> Power Ball Option 1</td>
                <td>Ordered</td>
                <td>
                    <button class="btn btn-primary">Confirm</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>


        </tbody>
    </table>
    <br />
    <br />

    <h2> Load\Transfers Transactions : </h2>
    <div class="form-group">
        <button class="btn btn-primary">Paypal or other vcrd payments</button>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Amount</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($results != null) {
                foreach ($results as $result) : ?>
                    <tr>
                        <td><?php $result['id'] ?></td>
                        <td><?php $result['description'] ?>
                        </td>
                        <td><?php $result['amount'] ?></td>
                    </tr>

            <?php endforeach;
            }; ?>

        </tbody>
    </table>
</div>



<script>
    $(document).ready(function() {
        $('.table').DataTable({
            sortable: false
        });
    });
</script>