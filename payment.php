<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="A simple enquire page">
  <meta name="keywords" content="HTML, simple, webpage">
  <meta name="author" content="Nguyen Gia Binh">
  <!-- responsive setup -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- logo link -->
  <link rel="apple-touch-icon" sizes="180x180" href="images/favico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favico/favicon-16x16.png">
  <link rel="manifest" href="images/favico/site.webmanifest">


  <!-- css style link -->
  <link rel="stylesheet" href="styles/enhancements.css">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Enquire</title>
</head>

<body>
  <?php include 'includes/header.inc'; ?>
  <main id="enquire">
    <article class="form">
      <h2>Give us your money!!!</h2>
      <form method="post" action="process_order.php" novalidate>
        <fieldset class="part">
          <!-- first row for contact: Name (crucial) -->
          <div class="row_01">

            <div class="column">
              <label class="text_Float_left" for="fName">First name</label>
              <br>
              <input class="input_text_2" id="fName" type="text" name="uname" placeholder="e.g: Thinh" maxlength="25" pattern="[a-zA-Z\s]*" required>
            </div>

            <div class="column2">
              <label class="text_Float_left" for="lName">Last name</label>
              <br>
              <input class="input_text_2" id="lName" type="text" name="lname" placeholder="Nguyen" maxlength="25" pattern="[a-zA-Z\s]*" required>
            </div>
          </div>
          <!-- second row for contact: info to sell away :) (crucial) -->
          <div class="row2">

            <div class="column">
              <label class="text_Float_left" for="email">Email</label>
              <br>
              <input class="input_text_2" type="email" id="email" name="email" placeholder="pebinh@student.swin.edu.au" required>
            </div>

            <div class="column2">
              <label class="text_Float_left" for="Pnumb">Phone number</label>
              <br>
              <input class="input_text_2" id="Pnumb" type="text" name="phone_number" placeholder="e.g: 09x xxx xxxx" maxlength="10" pattern="\d{10}">
            </div>
          </div>
          <!-- Less crucial contact info: Address in general -->
          <div>
            <fieldset class="part" id="fieldSet2">
              <label class="text_Float_left" for="sAdr"> Street Address</label>
              <input class="input_text_2" id="sAdr" type="text" name="street" placeholder="Your Street Address" maxlength="40" required>

              <label class="text_Float_left" for="dAdr">Suburb/Town</label>
              <input class="input_text_2 in_range_stuff" id="dAdr" type="text" name="suburb" placeholder="What District" maxlength="40" required>

              <label class="text_Float_left" for="cAdr">State</label>
              <select name="state" id="cAdr" required>
                <option value>Select one</option>
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
              </select>

              <label class="text_Float_left" for="pAdr">Postcode</label>
              <input class="input_text_2" id="pAdr" type="text" name="postcode" placeholder="Bet you need to look it up online!!!" maxlength="4" pattern="\d{6}" required>

            </fieldset>

          </div>

          <br>
          <div class="part flex">

            <label class="choice_label">Preferred Contact</label>

            <div class="option_content">
              <label class="precon_label" for="sp"> <input id="sp" type="radio" name="pcon" value="sphone" checked> Phone
              </label>

              <label class="precon_label" for="sm"> <input id="sm" type="radio" name="pcon" value="smail"> Email </label>

              <label class="precon_label" for="direct"> <input id="direct" type="radio" name="pcon" value="Direct"> Direct </label>
            </div>

          </div>
          <br>
          <br>
          <br>
          <div class="part product_option">
            <label for="bookop" class="choice_label ">Which book do you want to order:</label>

            <select id="bookop" class="book" name="book">
              <option class="select_text" value="Harry Potter and the half-blood prince - J.K Rowling">Harry Potter and the half-blood prince - J.K Rowling</option>
              <option class="select_text" value="Harry Potter and the Philosopher's Stone - J.K Rowling">Harry Potter and the Philosopher's Stone - J.K Rowling</option>
              <option class="select_text" value="Harry Potter and the Chamber of Secrets - J.K Rowling">Harry Potter and the Chamber of Secrets - J.K Rowling</option>
              <option class="select_text" value="Harry Potter and the Order of the Phoenix - J.K Rowling">Harry Potter and the Order of the Phoenix - J.K Rowling</option>
            </select>


            <label for="quantity" class="choice_label quantity_align">Quantity:</label>
            <input class="input_text" id="quantity" type="text" name="quantity" maxlength="3" pattern="\d{3}">


          </div>



          <!-- List of extra free stuff we give out for every order -->

          <div class="part">

            <label class="choice_label">Choose extra goody (FREE):</label>

            <div class="option_div">

              <ul>
                <li class="Option">
                  <label for="Opt_1"> <input class="checkbox" type="checkbox" id="Opt_1" name="type[]" value="E-book included">E-book
                    included</label>
                </li>

                <li class="Option">
                  <label for="Opt_2"> <input class="checkbox" type="checkbox" id="Opt_2" name="type[]" value="Hardback">Coupon included</label>
                </li>

                <li class="Option">
                  <label for="Opt_3"> <input class="checkbox" type="checkbox" id="Opt_3" name="type[]" value="Merch included"> Merch
                    included</label>
                </li>

                <li class="Option">
                  <label for="Opt_4"> <input class="checkbox" type="checkbox" id="Opt_4" name="type[]" value="none"> None</label>
                </li>
              </ul>
            </div>
          </div>

          <br>

          <!-- Radio select for choosing which type of card the customer want to use for payment -->
          <br>
          <div class="part flex">

            <label class="choice_label">Credit Card</label>

            <div class="option_content">
              <label class="precon_label" for="visa"> <input id="visa" type="radio" name="card" value="Visa" checked> Visa
              </label>

              <label class="precon_label" for="mastercard"> <input id="mastercard" type="radio" name="card" value="Mastercard"> Mastercard </label>

              <label class="precon_label" for="ae"> <input id="ae" type="radio" name="card" value="AE"> American Express </label>
            </div>

          </div>
          <br>
          <!-- Card information  -->
          <div class="row_01">

            <div class="column">
              <label class="text_Float_left" for="cName">Card holder</label>
              <input class="input_text_2" id="cName" type="text" name="Card_name" placeholder="Nguyen Quang Bao Han" maxlength="25" pattern="[a-zA-Z\s]*" required>
            </div>

            <div class="column2">
              <label class="text_Float_left" for="cNumb">Card number</label>
              <input class="input_text_2" id="cNumb" type="text" name="Card_number" placeholder="e.g: 42xx xxxx xxxx" maxlength="16" pattern="\d{16}">
            </div>
          </div>

          <div class="row2">

            <div class="column">
              <label class="text_Float_left" for="ex_Date">Expire Date</label>
              <input class="input_text_2" id="ex_Date" type="text" name="card_expire_date" placeholder="MM/YYYY" maxlength="7" pattern="^((0[1-9])|(1[0-2]))\/((2000)|(20[0-3][0-9]))$">
            </div>

            <div class="column2">
              <label class="text_Float_left" for="cvv">CVV</label>
              <input class="input_text_2" id="cvv" type="text" name="CVV" placeholder="e.g: 123" maxlength="3" pattern="\d{3}" required>
            </div>
          </div>




          <br>

          <div>
            <label class="text_Float_left" for="comment">Comment</label>

            <textarea id="comment" name="comment" placeholder="What do you want to say?"></textarea>
          </div>

          </div>
        </fieldset>
        <!-- Submit button  -->
        <div class="submit">
          <input type="submit" id="submit" class="btn" title="Send" value="Check out">
        </div>
      </form>
    </article>
  </main>
  <?php include 'includes/footer.inc'; ?>
</body>

</html>