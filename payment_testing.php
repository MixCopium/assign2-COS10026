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
              <input class="input_text_2" id="fName" type="text" name="First_Name" placeholder="e.g: Nguyen" maxlength="25" pattern="[a-zA-Z\s]*" required>
            </div>

            <div class="column2">
              <label class="text_Float_left" for="lName">Last name</label>
              <br>
              <input class="input_text_2" id="lName" type="text" name="Last_Name" placeholder="Dat Ky" maxlength="25" pattern="[a-zA-Z\s]*" required>
            </div>
          </div>
          <!-- second row for contact: info to sell away :) (crucial) -->
          <div class="row2">

            <div class="column">
              <label class="text_Float_left" for="email">Email</label>
              <br>
              <input class="input_text_2" type="email" id="email" name="Email" placeholder="lmao@lalaland.com" required>
            </div>

            <div class="column2">
              <label class="text_Float_left" for="Pnumb">Phone number</label>
              <br>
              <input class="input_text_2" id="Pnumb" type="text" name="Phone_number" placeholder="e.g: 09x xxx xxxx" maxlength="10" pattern="\d{10}">
            </div>
          </div>
          <!-- Less crucial contact info: Address in general -->
          <div>
            <fieldset class="part" id="fieldSet2">
              <label class="text_Float_left" for="Adr">Address</label>
              <input class="input_text_2" id="Adr" type="text" name="Address" placeholder="Your Address" maxlength="40" required>

              <label class="text_Float_left" for="pAdr">Postcode</label>
              <input class="input_text_2" id="pAdr" type="text" name="Postcode" placeholder="Bet you need to look it up online!!!" maxlength="4" pattern="\d{6}" required>

            </fieldset>

          </div>
          <!-- Radio select for choosing which type of card the customer want to use for payment -->
          <div class="part flex">

            <label class="choice_label">Preferred Card</label>

            <div class="option_content">
              <label class="precon_label" for="visa"> <input id="visa" type="radio" name="card" value="Visa" checked> Visa
              </label>

              <label class="precon_label" for="mastercard"> <input id="mastercard" type="radio" name="card" value="Mastercard"> Mastercard </label>

              <label class="precon_label" for="jcb"> <input id="jcb" type="radio" name="card" value="JCB"> JCB </label>
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
              <input class="input_text_2" id="cNumb" type="text" name="Card_number" placeholder="e.g: 12xx xxxx xxxx" maxlength="12" pattern="\d{12}">
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

          <!-- List of product for customer to choose by inputing the quantity of what they want -->

          <table class="table">
            <thead>
              <tr>
                <th class="header_product_1">Product</th>
                <th class="header_product_2">Price</th>
                <th class="header_product_3">Quantity</th>
              </tr>
            </thead>

            <tbody>
              <!-- Product 1 -->
              <tr>
                <td class="actual_product">Harry Potter and the Half-Blood Prince - J.K Rowling</td>
                <td class="actual_product_2">$99.99</td>
                <td class="actual_product"><input class="input_text" id="THBP" type="text" name="Harry-potter_THBP" maxlength="3" pattern="\d{3}"></td>
              </tr>
              <!-- Product 2 -->
              <tr>
                <td class="actual_product">Harry Potter and the Philosopher's Stone - J.K Rowling</td>
                <td class="actual_product_2">$99.99</td>
                <td class="actual_product"><input class="input_text" id="TPS" type="text" name="Harry-potter_TPS" maxlength="3" pattern="\d{3}"></td>
              </tr>
              <!-- Product 3 -->
              <tr>
                <td class="actual_product">Harry Potter and the Chamber of Secrets - J.K Rowling</td>
                <td class="actual_product_2">$99.99</td>
                <td class="actual_product"><input class="input_text" id="TCOS" type="text" name="Harry-potter_TCOS" maxlength="3" pattern="\d{3}"></td>
              </tr>
              <!-- Product 4 -->
              <tr>
                <td class="actual_product">Harry Potter and the Order of the Phoenix - J.K Rowling</td>
                <td class="actual_product_2">$99.99</td>
                <td class="actual_product"><input class="input_text" id="TOOTP" type="text" name="Harry-potter_TOOTP" maxlength="3" pattern="\d{3}"></td>
              </tr>
            </tbody>
          </table>

          <br>

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
          <br>

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