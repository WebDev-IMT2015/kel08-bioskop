<!DOCTYPE html>
<html>
  <head>
    <style>
      body {background-color: white;}
      h2   {color: black;}

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
        width: 30%;
      }


      .modal {
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
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
      td:hover{background-color:red}
    </style>
  </head>
  <body>

    <h2>Tampilan Kursi Bioskop</h2>
    <div class="center">
        <table id="tabelKursi" onclick="javascript::ordt(event)" border="1">
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
            <td id="myBtnA1"> </td>
            <td id="myBtnA2"> </td>
            <td id="myBtnA3"> </td>
            <td id="myBtnA4"> </td>
            <td id="myBtnA5"> </td>
            <td id="myBtnA6"> </td>
            <td id="myBtnA7"> </td>
            <td id="myBtnA8"> </td>
            <td id="myBtnA9"> </td>
          </tr>
          <tr>
            <th>B</th>
            <td id="myBtnB1"> </td>
            <td id="myBtnB2"> </td>
            <td id="myBtnB3"> </td>
            <td id="myBtnB4"> </td>
            <td id="myBtnB5"> </td>
            <td id="myBtnB6"> </td>
            <td id="myBtnB7"> </td>
            <td id="myBtnB8"> </td>
            <td id="myBtnB9"> </td>
          </tr>
          <tr>
            <th>C</th>
            <td id="myBtnC1"> </td>
            <td id="myBtnC2"> </td>
            <td id="myBtnC3"> </td>
            <td id="myBtnC4"> </td>
            <td id="myBtnC5"> </td>
            <td id="myBtnC6"> </td>
            <td id="myBtnC7"> </td>
            <td id="myBtnC8"> </td>
            <td id="myBtnC9"> </td>
          </tr>
          <tr>
            <th>D</th>
            <td id="myBtnD1"> </td>
            <td id="myBtnD2"> </td>
            <td id="myBtnD3"> </td>
            <td id="myBtnD4"> </td>
            <td id="myBtnD5"> </td>
            <td id="myBtnD6"> </td>
            <td id="myBtnD7"> </td>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th>E</th>
            <td id="myBtnE1"> </td>
            <td id="myBtnE2"> </td>
            <td id="myBtnE3"> </td>
            <td id="myBtnE4"> </td>
            <td id="myBtnE5"> </td>
            <td id="myBtnE6"> </td>
            <td id="myBtnE7"> </td>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <th>F</th>
            <td id="myBtnF1"> </td>
            <td id="myBtnF2"> </td>
            <td id="myBtnF3"> </td>
            <td id="myBtnF4"> </td>
            <td id="myBtnF5"> </td>
            <td id="myBtnF6"> </td>
            <td id="myBtnF7"> </td>
            <th> </th>
            <th> </th>
          </tr>
          <tr>
            <th>G</th>
            <td id="myBtnG1"> </td>
            <td id="myBtnG2"> </td>
            <td id="myBtnG3"> </td>
            <td id="myBtnG4"> </td>
            <td id="myBtnG5"> </td>
            <td id="myBtnG6"> </td>
            <td id="myBtnG7"> </td>
            <th> </th>
            <th> </th>
          </tr>
        </table>
    </div>

    <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

<script>

function ordt(e){ 
    alert(e.target.id); //current cell
    //alert(e.target.parentNode.innerText); //Current row.
}​

// Get the modal
// var modal = document.getElementById('myModal');

// // Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//     modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
</script>
  </body>
</html>