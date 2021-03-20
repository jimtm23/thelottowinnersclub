

  <!-- Page Content -->
  <div class="container top-margin ">

    <h2>Member Name    :  Jim Peeples</h2>
    <h2>Account Balance:  $1,000.99</h2>
    <br/>
    <br/>
    
    <div class="container">

  <h2>Bet Orders</h2>
  <p>The .table-bordered class adds borders to a table:</p>   
  
  
  <div class="container">
  <h2>Working with jQuery DataTables server-side processing using PHP and MySQL</h2>
  <table id="dataTable-example">
    <thead>
      <tr>
          <th>Date</th>
        <th>Ticket Lucky Numbers</th>
        <th>Game Type</th>
        <th>Status</th>
        <th>Action</th>

      </tr>
    </thead>
  </table>
</div>

</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#dataTable-example').dataTable({
        "bProcessing": true,
        "sAjaxSource": "transaction.php",
        "aoColumns": [
              { mData: 'careate_date' } ,
              { mData: 'description' },
              { mData: 'type' },
              { mData: 'mode' },
              { mData: 'notes' },
              { mData: 'seq' }

            ]
      });  
  });
</script>

  
  
  <table class="table-responsive table table-bordered">
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
        <td>Mar, 01, 2021 01:00</td>
        <td>01 02 03 04 05 06</td>
        <td> Power Ball Option 1</td>
        <td>Confirmed</td>
        <td></td>
        
      </tr>
      <tr>
        <td>Mar, 01, 2021 02:10</td>
        <td>01 02 03 04 05 06</td>
        <td> Power Ball Option 1</td>
        <td>Confirmed</td>
        <td></td>
      </tr>
      <tr>
        <td>Mar, 01, 2021 01:15</td>
        <td>08 09 03 04 05 66</td>
        <td> Power Ball Option 1</td>
        <td>Ordered</td>
        <td></td>
      </tr>
      <tr>
        <td>Mar, 03, 2021 01:00</td>
        <td>01 55 43 04 05 32</td>
        <td> Power Ball Option 1</td>
        <td>Ordered</td>
        <td></td>
      </tr>
      <tr>
        <td>Mar, 04, 2021 02:10</td>
        <td>01 02 11 04 56 06</td>
        <td> Power Ball Option 1</td>
      </tr>
      <tr>
        <td>Mar, 05, 2021 01:15</td>
        <td>08 09 03 04 05 66</td>
        <td> Power Ball Option 1</td>
      </tr>
    </tbody>
  </table>
</div>


    
    
    
    <h2>Account Transactions</h2>
    
    
    </div>
    <!-- /.row -->

  </div>
  
 