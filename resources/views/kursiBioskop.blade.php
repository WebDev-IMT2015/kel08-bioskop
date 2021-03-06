<!DOCTYPE html>
<html>
  <head>
    <title>Kursi Bioskop</title>
    <style>
      body {background-color: white;}
      h2 
      {
        color: black;
        text-align: center;
      }
      table
      {
          border-collapse: collapse;
          /*width: 100%;*/
          border: 10px solid white;
      }
      td
      {
          padding: 8px;
          text-align: left;
          border-bottom: 1px solid #ddd;
          background-color: #3e9ed6;
          border: 10px solid white;
      }
      th
      {
          padding: 8px;
          text-align: left;
          border-bottom: 1px solid #ddd;
          background-color: white;
          border: 10px solid white;
      }
      .center
      {
        margin: auto;
        width: 25%;
      }
      .modal
      {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content
      {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
      }

      /* The Close Button */
      .close
      {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus
      {
        color: #000;
        text-decoration: none;
        cursor: pointer;
      }
      td:hover{background-color:orange}

      .Selected {
        background-color: green;
      }

      .Ordered {
        background-color: red;
      }

    </style>
  </head>
  <body>

  <button href= '/pilihbioskop'> Back </button>

    <h2>Tampilan Kursi Bioskop</h2>

    <div class="center">
      <?php
        echo "<table id='tabelKursi'  onclick='ordt(this,event)'>";

          echo "<tr>
            <th> </th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
          </tr>";

          $alphabet = range('A', 'Z');

          for ($i=0; $i < 7; $i++) { 
            echo "<tr> <th>".$alphabet[$i]."</th>";

            for ($j=0; $j < 9; $j++) { 

              if($i>3 && $j>6){
                break;
              }

              $f = false;
              $col = $j+1;//dont want no trouble
              $id = $alphabet[$i].''.$col;
              if (isset($pesanan)) {
                foreach ($pesanan as $checks) {
                  if(strpos($id, $checks->id_kursi)){
                    $f=true;
                  }
                }

                if($f){
                  echo "<td id=".$id." class='Ordered'> </td>";
                }
                else{
                  echo "<td id=".$id."> </td>";
                }
              }
              else
                echo "<td id=".$id."> </td>";
            }
            echo "</tr>";
          }

        echo "</table>";
      ?>

        <!-- <table id="tabelKursi" onclick="ordt(event)">
        <tr>
            <th colspan="10"><p align="center">Layar</p></th>
          </tr>
          <tr>
            <th> </th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
          </tr>
          <tr>
            <th>A</th>
            <td id="A1"> </td>
            <td id="A2"> </td>
            <td id="A3"> </td>
            <td id="A4"> </td>
            <td id="A5"> </td>
            <td id="A6"> </td>
            <td id="A7"> </td>
            <td id="A8"> </td>
            <td id="A9"> </td>
          </tr>
          <tr>
            <th>B</th>
            <td id="B1"> </td>
            <td id="B2"> </td>
            <td id="B3"> </td>
            <td id="B4"> </td>
            <td id="B5"> </td>
            <td id="B6"> </td>
            <td id="B7"> </td>
            <td id="B8"> </td>
            <td id="B9"> </td>
          </tr>
          <tr>
            <th>C</th>
            <td id="C1"> </td>
            <td id="C2"> </td>
            <td id="C3"> </td>
            <td id="C4"> </td>
            <td id="C5"> </td>
            <td id="C6"> </td>
            <td id="C7"> </td>
            <td id="C8"> </td>
            <td id="C9"> </td>
          </tr>
          <tr>
            <th>D</th>
            <td id="D1"> </td>
            <td id="D2"> </td>
            <td id="D3"> </td>
            <td id="D4"> </td>
            <td id="D5"> </td>
            <td id="D6"> </td>
            <td id="D7"> </td>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th>E</th>
            <td id="E1"> </td>
            <td id="E2"> </td>
            <td id="E3"> </td>
            <td id="E4"> </td>
            <td id="E5"> </td>
            <td id="E6"> </td>
            <td id="E7"> </td>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th>F</th>
            <td id="F1"> </td>
            <td id="F2"> </td>
            <td id="F3"> </td>
            <td id="F4"> </td>
            <td id="F5"> </td>
            <td id="F6"> </td>
            <td id="F7"> </td>
            <th> </th>
            <th> </th>
          </tr>
          <tr>
            <th>G</th>
            <td id="G1"> </td>
            <td id="G2"> </td>
            <td id="G3"> </td>
            <td id="G4"> </td>
            <td id="G5"> </td>
            <td id="G6"> </td>
            <td id="G7"> </td>
            <th> </th>
            <th> </th>
          </tr>
        </table> -->
    </div>
    {{ csrf_field() }}
    <meta id="csrf" name="_token" content="{{ csrf_token() }}">
    <button onclick="addOrder()">Order</button>

    @if(isset($id_order))
      <form method="get" action="{{ route('printTicket') }}">
        <input type="hidden" name="id" value="{{ $id_order->id_order }}">
        <button type="submit">Print Ticket</button>
      </form>
    @endif

    <!-- The Modal -->
{{-- <div id="myModal" class="modal"> --}}

  <!-- Modal content -->
 {{--  <div class="modal-content">
    <span class="close">&times;</span>
    <p>asdasdsad</p>
  </div>

</div> --}}

<script>

var addClass = function(elem, className) {
    if (elem.className.indexOf(className) == -1) {
        elem.className += " " + className;
    } else {
        elem.className = elem.className.replace(" " + className, "");    
    }
}

function ordt(obj,e){ 
  if(obj.className != "Ordered"){
    addClass(e.target, "Selected");
  }else{
    window.alert("That seat is already taken");
  }
}

function addOrder(){
  var x = document.getElementsByClassName("Selected");
  var kursi = "";
  for (var i = 0; i < x.length; i++) {
    if(i==x.length-1){
      kursi += x[i].id;
    }
    else{
      kursi += x[i].id+":";
    }
  }


  if(x.length>0){
    if(window.confirm("Are you sure you want to \n order seat number(s) "+kursi+" ?")){
      
      var _token =  document.getElementById("csrf").getAttribute("content"); ;
      post('addOrder', {'_token' : _token ,'id_jtf': idjtf,
       'jumlah_tiket' : x.length , 'id_kursi': kursi});
      window.alert("Successfully ordered seat number(s) "+kursi);
    }else{
      //cancelled
    }
  }else{
    window.alert("No seats selected");
  }
}

  function post(path, params, method) {
  method = method || "post"; // Set method to post by default if not specified.

  // The rest of this code assumes you are not using a library.
  // It can be made less wordy if you use one.
  var form = document.createElement("form");
  form.setAttribute("method", method);
  form.setAttribute("action", path);

  for(var key in params) {
      if(params.hasOwnProperty(key)) {
          var hiddenField = document.createElement("input");
          hiddenField.setAttribute("type", "hidden");
          hiddenField.setAttribute("name", key);
          hiddenField.setAttribute("value", params[key]);

          form.appendChild(hiddenField);
       }
  }

  document.body.appendChild(form);
  form.submit();
}

/*//Get the modal
var modal = document.getElementById('myModal');
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");



// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//     modal.style.display = "block";
// }


</script>
  </body>
</html>