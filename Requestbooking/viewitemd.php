<!DOCTYPE html>
<html>
  <head>
    <title>Item page</title>
    <link rel="stylesheet" href="booking.css">
  </head>

  <body>
  <div class="header">
      <div class="title" id="title"> </div>
      <nav><?php include '../styles/sidebarstaff.php'?>FK Inventory System</nav>
    </div>
    <table>
    <h2>MAKE A BOOKING</h2>
       
        <form action="BookingController.php" method="post">
           <table>
               <tr>
                   <th>
                     <label>Staff ID:</label><br>
                     <input type="text" id="Staff_ID" name="Staff_ID"><br>
                   </th>
                   <th>
                        <label>Item:</label><br>
                        <input list="item" name="item">
                        <datalist id="item">
                          <option value="fk01">Printer</option>>
                          <option value="fk02">Printer ink</option>
                          <option value="fk03">A4 Paper</option>
                          <option value="fk04">Marker pen</option>
                          <option value="fk05">Stapler</option>
                          <option value="fk06">Paper Puncher</option>
                          <option value="fk07">Monitor</option>
                          <option value="fk08">Mouse</option>
                          <option value="fk09">Keyboard</option>
                        </datalist>
                    </th>
                    <th>
                        <label>Quantity:</label><br>
                        <input type="number" id="qty" name="qty"><br>  
                    </th> 
                    <th>
                        <label for="Collection_date">Collect Date:</label><br>
                        <input type="date" id="Collection_date" name="Collection_date">
                    </th>
                 </tr>
           </table>
        
         
       <br>
       <button type="submit" style=" border-radius: 8px;
        font-size: 16px; background-color: maroon;
        border: none; color: white; padding: 15px 32px;
        text-align: center; text-decoration: none; display: inline-block;
        margin: 4px 2px; cursor: pointer;">Submit</button></form>  

        <a href="viewitem.php" class="button" style="float:right;">Back</a>
        <a href="../ApproveBooking/ViewBookingInterfaceDummy.php" class="button" style="float:right;">View Booking History List</a>
    </table>
         <h2>Items</h2>
         

  <div class="gallery">
    <a target="_blank" href="printer.png">
      <img src="printer.png" alt="Printer" width="300" height="200">
    </a>
    <div class="desc"><b>Printer</b></div>
    <div class="desc">Size : 12cm*12cm*12cm</div>
    <div class="desc">Brand : Canon</div>
    <div class="desc">Price : RM 150.00</div>
    <div class="desc">Available Qty : 9</div>



    </div>


    <div class="gallery">
        <a target="_blank" href="printer ink.jpg">
        <img src="printer ink.jpg" alt="Printer ink" width="300" height="200">
        </a>
        <div class="desc">Printer ink (2 boxer, 1 black, 1 colour)</div>
        <div class="desc">Size : 4cm*4cm*4cm</div>
        <div class="desc">Brand : Canon</div>
        <div class="desc">Price : RM 40.00</div>
        <div class="desc">Available Qty : 50</div>

    </div>

    <div class="gallery">
        <a target="_blank" href="monitor.png">
        <img src="monitor.png" alt="Monitor" width="300" height="200">
        </a>
        <div class="desc">Monitor</div>
        <div class="desc">Size : 30cm*3cm*15cm</div>
        <div class="desc">Brand : Acer</div>
        <div class="desc">Price : RM 650.00</div>
        <div class="desc">Available Qty : 20</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="mouse.png">
        <img src="mouse.png" alt="Mouse" width="300" height="200">
        </a>
        <div class="desc"> Wireless mouse</div>
        <div class="desc">Size : 4cm*5cm*6cm</div>
        <div class="desc">Brand : ROG</div>
        <div class="desc">Price : RM 150.00</div>
        <div class="desc">Available Qty : 16</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="keyboard.jpg">
        <img src="keyboard.jpg" alt="Keyboard" width="300" height="200">
        </a>
        <div class="desc">Keyboard</div>
        <div class="desc">Size : 7cm*7cm*7cm</div>
        <div class="desc">Brand : ROG</div>
        <div class="desc">Price : RM 200.00</div>
        <div class="desc">Available Qty : 7</div>
    </div>
    
    <div class="gallery">
        <a target="_blank" href="A4 paper 1.jpg">
        <img src="A4 paper 1.jpg" alt="A4 Paper" width="300" height="200">
        </a>
        <div class="desc">A4 Paper ( 500 sheets, 80gsm)</div>
        <div class="desc">Size : A4 (70gsm)</div>
        <div class="desc">Brand : Double A</div>
        <div class="desc">Price : RM 30.00</div>
        <div class="desc">Available Qty : 34</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="marker pen.jpg">
        <img src="marker pen.jpg" alt="Marker pen" width="300" height="200">
        </a>
        <div class="desc">Marker pen come with 3 colour per packet</div>
        <div class="desc">Size : 7cm*2cm*2cm</div>
        <div class="desc">Brand : Artline 500A</div>
        <div class="desc">Price : RM 2.00</div>
        <div class="desc">Available Qty : 328</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="stapler.jpg">
        <img src="stapler.jpg" alt="Stapler" width="300" height="200">
        </a>
        <div class="desc">Stapler come with 2 boxes of bullet</div>
        <div class="desc">Size : 4cm*4cm*4cm</div>
        <div class="desc">Brand : Swans</div>
        <div class="desc">Price : RM 7.00</div>
        <div class="desc">Available Qty : 31</div>
    </div>
   
    <div class="gallery">
        <a target="_blank" href="paper puncher.png">
        <img src="paper puncher.png" alt="Paper puncher" width="300" height="200">
        </a>
        <div class="desc">Two holes paper puncher</div>
        <div class="desc">Size : 5cm*5cm*5cm</div>
        <div class="desc">Brand : Swans</div>
        <div class="desc">Price : RM 6.00</div>
        <div class="desc">Available Qty : 19</div>
    </div><br>
   
 </body>
</html>
