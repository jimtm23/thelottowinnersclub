<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DataTable-AltEditor - Example #4</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.css" />
</head>

<body>
  <p><br></p>
      <h1>DataTable-AltEditor - Example #4</h1>
This is the original example, not sure everything works yet.

      <table class="table table-striped" id="testTableData">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>        
        </tbody>
      </table>


<!--
- saveButton    - onClick, takes all the data from the datatable and sends it to the server
- cancelButton  - onClick, asks the user if the wants to undo unsaved changes and (if yes)
                  reloads the datatable with the data from the server.
- messages      - Displays the response from the server.                  
-->
  <div>
    <button type='button' class='btn btn-default' id='saveButton' value='Save'>Save</button>
    <button type='button' class='btn btn-default' id='cancelButton' value='Cancel' disabled='true'>Cancel</button>
    <span id='messages'>&nbsp;</span>
  </div>

<script src="https://code.jquery.com/jquery-3.0.0.js" ></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.0.js" ></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.js" ></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js" ></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.js" ></script>
<script src="../../src/dataTables.altEditor.free.js" ></script>

  <script>


$(document).ready(function() {

//////////////////////////////////////////
/*
IMPORTANT - COLUMNDEFS
Always add the DT_RowId row and always add it as the first column!
- Visibility state doesnt matter but searchable
  state should be set to the same value.
Always add a type!
Current supported type parameters:
text      - for editable textfields (including numbers, emails etc.)
select    - for select menues, if used then options should be specified aswell
readonly  - for fields with readonly attribute.
Other parameters:
MANDATORY:
id        - Should be set to same value as data-parameter.
data      - Identifier of value in data from AJAX call.
title     - Title of column.
OPTIONAL:
pattern   - For inputvalidation of the textfield. Specify a regex for the pattern to use.
errorMsg  - Message that is shown when mismatch with pattern is found.
hoverMsg  - Message that is shown on mouseover on text fields (hints).
unique    - Data that can only exist once in the datatable. Shows an error on input if found.
special   - Only working setting is "portRange". This is in relation to input validation.
            If used then validation will check for a portrange in format (startPort:endPort)
            and validate both with the supplied regex.
*/
//////////////////////////////////////////

//Example of column definitions.
var columnDefs = [{
    id: "DT_RowId",
    data: "DT_RowId",
    "visible": false,
    "searchable": false
  },{
      title: "Select example",
      id: "status",
      data: "status",
      type: "select",
      "options": [
      "on",
      "off"
      ]
    }, {
      title: "Text example",
      id: "ipAddress",
      data: "ipAddress",
      type: "text",
      pattern: "^((?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){0,1}$",
      errorMsg: "*Invalid address - Enter valid ip.",
      hoverMsg: "(Optional) - Ex: 82.84.86.88",
      unique: true
    }, {
      title: "Port example",
      id: "port",
      data: "port",
      type: "text",
      special: "portRange",
      pattern: "^([0-9]{1,4}|[1-5][0-9]{4}|6[0-4][0-9]{3}|65[0-4][0-9]{2}|655[0-2][0-9]|6553[0-5])$",
      errorMsg: "*Invalid port - Enter valid port or range.",
      hoverMsg: "Ex: 6112 (single)   or   6111:6333 (range)",
      unique: true
    }, {
      title: "Readonly example",
      id: "read",
      data: "read",
      type: "readonly"
    }]


var url_ws_mock_get = '<?php echo base_url(); ?>/admin/viewcustomers';
if (location.href.startsWith("file://")) {
        // local URL's are not allowed
        url_ws_mock_get = '<?php echo base_url(); ?>/admin/viewcustomers';
}
    
//Table creation
var myTable = $('#testTableData').dataTable({
  dom: 'Bfrltip',                   //Element order: Button container(B) is essential.
  ajax: url_ws_mock_get,   //Receiving data from this source. 
    columns: columnDefs,            //Columns defined above.
    select: 'single',               //Only single column selection is implemented.
    altEditor: true,                //Enable altEditor.
    responsive: true,               //Enable responsiveness.
    buttons: [{                     //All implemented buttons. Do not change name attribute.
            text: 'Create',          
            name: 'add'                   
          },{
            extend: 'selected', 
            text: 'Edit',
            name: 'edit'        
          },{
            extend: 'selected', 
            text: 'Delete',
            name: 'delete'      
          },{ 
            text: 'Refresh',
            name: 'refresh'        
          }]
        });
  } );

// If the user has unsaved changes when reloading/leaving the page, then
// an alert is displayed asking the user to confirm the action
$(window).bind('beforeunload',function(){
   if(!$('#cancelButton').is(':disabled')){
   return "";
    }
});


</script>
</body>
</html>