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
        <?php foreach ($results as $result):?>
            <tr>
                <td>Mar, 01, 2021 01:00</td>
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
            <?php endforeach;?>
            <tr>
                <td>Mar, 01, 2021 01:00</td>
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
            <tr>
                <td>Mar, 01, 2021 01:00</td>
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
                <td>Confirmed</td>
                <td>
                    <button class="btn btn-danger">Cancel</button>
                </td>
            </tr>
            <tr>
                <td>Mar, 01, 2021 01:00</td>
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
                <td>Confirmed</td>
                <td>
                    <button class="btn btn-danger">Cancel</button>
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
            <tr>
                <td>Mar, 10, 2021 01:00</td>
                <td>
                    Paypal Transfer
                </td>
                <td> $ 100.00</td>
            </tr>
            <tr>
                <td>Mar, 09, 2021 01:00</td>
                <td>
                    Bet Payment
                </td>
                <td> $ 10.00</td>
            </tr>
            <tr>
                <td>Mar, 08, 2021 01:00</td>
                <td>
                    Bet payment
                </td>
                <td> $ 50.00</td>
            </tr>


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