<?php /* Template Name: Konto Aufladen */ ?>
<?php restricted(2); ?>
<?php get_header(); ?>

<div id="main">

    <div class="container">
        <div class="row">
            <div class="col-lg-20">

                <?php get_sidebar('profile-makler'); ?>

            </div>
            <div class="col-lg-80">

                <div class="results-topbar clearfix">
                    <h5>
                        <?php the_title(); ?>
                    </h5>
                </div>

                <div class="bg-grey p-3 mb-3">
                    <div class="container mt-3">
                        <div class="row align-items-center mb-3">
                            <div class="col-md-2 mb-1"><img class="alignnone size-medium wp-image-1488"
                                    src="https://www.ivd24immobilien.de/wp-content/uploads/Logo_BusinessClub-300x125.jpg" alt="" width="100%" /></div>
                            <div class="col-md-10">
                                <h1 class="blue">ivd24 Business-Club</h1>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-3">

                        <h4>Herzlich Willkommen beim ivd24 Businessclub!</h4>
                        <p>Vielen Dank für Ihre verbindliche Buchung zum ivd24 Business Club. Sie erhalten in Kürze eine Bestätigung per E-Mail. Sie
                            können entweder hier Online bezahlen oder erhalten später eine Rechnung.</p>
                        <p>Ab dem 01.02.2021 erhalten Sie Zugriff auf Ihre Businessclub Vorteile.</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" id="businessclub-jahr" style="width: 100%;">
                                <img class="mt-2" style="display: block; margin-left: auto; margin-right: auto;"
                                    src="https://www.ivd24immobilien.de/wp-content/uploads/ivd24-Business-Club.jpg" alt="Business-Club Logo"
                                    width="40%">
                                <div class="card-body p-3" style="border-top: 1px solid #1460ac;">
                                    <p class="mb-0" style="font-size: 1.25rem;"><span class="bold">Jahresbeitrag: 240,00 €*</span><br>inkl.
                                        Grundrisspaket im Wert von 75,00 €</p>
                                    <p> <small> *Bei Buchung bis 31.01.2021, danach 25,00 € je Monat (300,00 € pro Jahr) | Laufzeit 12 Monate <br> Alle
                                            Preise
                                            zzgl. MWSt. | Angebot gilt ausschließlich für IVD Mitglieder. </small></p>
                                </div>
                                <!-- <button class="btn btn-submit btn-block" id="checkout-button" style="background-color: #94c120; color: #fff;">Jetzt
                                    Bezahlvorgang abschließen</button> -->
                                <button class="btn btn-submit btn-block" id="basic-plan-btn" style="background-color: #94c120; color: #fff;">Jetzt
                                    Bezahlvorgang abschließen</button>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card" id="businessclub-quartal" style="width: 100%;">
                                <img class="mt-2" style="display: block; margin-left: auto; margin-right: auto;"
                                    src="https://www.ivd24immobilien.de/wp-content/uploads/ivd24-Business-Club.jpg" alt="Business-Club Logo"
                                    width="40%">
                                <div class="card-body p-3" style="border-top: 1px solid #1460ac;">
                                    <p class="mb-0" style="font-size: 1.25rem;"><span class="bold">Beitrag pro Quartal: 63,00 €*</span><br>inkl.
                                        Grundrisspaket im Wert von 75,00 €</p>
                                    <p> <small> *Bei Buchung bis 31.01.2021, danach 78,00 € pro Quartal (312,00 € pro Jahr) | Laufzeit 12 Monate <br> Alle
                                            Preise
                                            zzgl. MWSt. | Angebot gilt ausschließlich für IVD Mitglieder. </small></p>
                                </div>
                                <!-- <button class="btn btn-submit btn-block" id="checkout-button" style="background-color: #94c120; color: #fff;">Jetzt
                                    Bezahlvorgang abschließen</button> -->
                                <button class="btn btn-submit btn-block" id="pro-plan-btn" style="background-color: #94c120; color: #fff;">Jetzt
                                    Bezahlvorgang abschließen</button>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card" id="storybox-jahr" style="width: 100%;">
                                <div class="row align-items-center justify-content-center mt-3 mb-2">
                                    <div class="col-4">
                                        <img class="img-fluid" src="https://www.ivd24immobilien.de/wp-content/uploads/ivd24-Business-Club.jpg"
                                            alt="Business-Club Logo" />
                                    </div>
                                    <div class="col-2 align-self-center">
                                        <p class="h3">+</p>
                                    </div>
                                    <div class="col-4">
                                        <img class="img-fluid" src="https://www.ivd24immobilien.de/wp-content/uploads/storybox-300x114.png"
                                            alt="Storybox Logo" width="100%" />
                                    </div>
                                </div>
                                <div class="card-body p-3" style="border-top: 1px solid #1460ac;">
                                    <p class="mb-0" style="font-size: 1.25rem;"><span class="bold">Jahresbeitrag: 360,00 €*</span><br>inkl.
                                        Grundrisspaket im Wert von 75,00 €</p>
                                    <p> <small> *Bei Buchung bis 31.01.2021, danach 40,00 € je Monat (480,00 € pro Jahr) | Laufzeit 12 Monate <br> Alle
                                            Preise
                                            zzgl. MWSt. | Angebot gilt ausschließlich für IVD Mitglieder. </small></p>
                                </div>
                                <!-- <button class="btn btn-submit btn-block" id="checkout-button" style="background-color: #94c120; color: #fff;">Jetzt
                                    Bezahlvorgang abschließen</button> -->
                                <button class="btn btn-submit btn-block" id="basic-plan-btn2" style="background-color: #94c120; color: #fff;">Jetzt
                                    Bezahlvorgang abschließen</button>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card" id="storybox-quartal" style="width: 100%;">
                                <div class="row align-items-center justify-content-center mt-3 mb-2">
                                    <div class="col-4">
                                        <img class="img-fluid" src="https://www.ivd24immobilien.de/wp-content/uploads/ivd24-Business-Club.jpg"
                                            alt="Business-Club Logo" />
                                    </div>
                                    <div class="col-2 align-self-center">
                                        <p class="h3">+</p>
                                    </div>
                                    <div class="col-4">
                                        <img class="img-fluid" src="https://www.ivd24immobilien.de/wp-content/uploads/storybox-300x114.png"
                                            alt="Storybox Logo" width="100%" />
                                    </div>
                                </div>
                                <div class="card-body p-3" style="border-top: 1px solid #1460ac;">
                                    <p class="mb-0" style="font-size: 1.25rem;"><span class="bold">Beitrag pro Qartal: 93,00 €*</span><br>inkl.
                                        Grundrisspaket im Wert von 75,00 €</p>
                                    <p> <small> *Bei Buchung bis 31.01.2021, danach 123,00 € pro Quartal (492,00 € pro Jahr) | Laufzeit 12 Monate <br> Alle
                                            Preise
                                            zzgl. MWSt. | Angebot gilt ausschließlich für IVD Mitglieder. </small></p>
                                </div>
                                <!-- <button class="btn btn-submit btn-block" id="checkout-button" style="background-color: #94c120; color: #fff;">Jetzt
                                    Bezahlvorgang abschließen</button> -->
                                <button class="btn btn-submit btn-block" id="pro-plan-btn2" style="background-color: #94c120; color: #fff;">Jetzt
                                    Bezahlvorgang abschließen</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="sr-root">
      <div class="sr-main">

        <div class="sr-payment-summary sr-form">
          <h1 class="order-amount">Loading...</h1>
          <h4>Subscribe to the Ivd24 Business Club</h4>
        </div>
        <div id="signup-view" class="sr-form">
          <form id="signup-form">
            <div class="sr-form-row">
              <div class="sr-combo-inputs">
                <input
                  id="name"
                  placeholder="Hong Le"
                  class="sr-input"
                  required
                />
                <input
                  type="email"
                  id="email"
                  placeholder="hong.le@example.com"
                  class="sr-input"
                  required
                />
              </div>
            </div>
            <button type="submit">Signup</button>
          </form>
        </div>
        <div id="payment-view" class="sr-form hidden">
          <form id="payment-form">
            <nav id="payment-methods" class="sr-form-row">
              <ul>
                <li class="visible">
                  <input
                    type="radio"
                    name="payment"
                    id="payment-card"
                    value="card"
                    checked
                  />
                  <label for="payment-card">Card</label>
                </li>
                <li class="visible">
                  <input
                    type="radio"
                    name="payment"
                    id="payment-sepa_debit"
                    value="sepa_debit"
                  />
                  <label for="payment-sepa_debit">SEPA Debit</label>
                </li>
              </ul>
            </nav>
            <div class="sr-form-row payment-info card visible">
              <div class="sr-combo-inputs">
                <div class="sr-combo-inputs-row">
                  <div class="sr-input sr-element" id="card-element"></div>
                </div>
              </div>
            </div>
            <div class="sr-form-row payment-info sepa_debit">
              <div class="sr-combo-inputs-row">
                <div class="sr-input sr-element" id="iban-element">
                  <!-- A Stripe Element will be inserted here. -->
                </div>
              </div>
              <div id="bank-name"></div>
              <!-- Display mandate acceptance text. -->
              <div class="sr-legal-text au-becs-debits">
                By providing your payment information and confirming this payment, you
                authorise (A) ivd24_hong and Stripe, our payment service provider, to
                send instructions to your bank to debit your account and (B) your bank to
                debit your account in accordance with those instructions. As part of your
                rights, you are entitled to a refund from your bank under the terms and
                conditions of your agreement with your bank. A refund must be claimed
                within 8 weeks starting from the date on which your account was debited.
                Your rights are explained in a statement that you can obtain from your
                bank. You agree to receive notifications for future debits up to 2 days
                before they occur.
                <!-- <a
                  href="https://stripe.com/au-becs-dd-service-agreement/legal"
                  target="_blank"
                  rel="noopener noreferrer"
                  >Direct Debit Request service agreement</a> -->
                  <a
                  href="https://www.europeanpaymentscouncil.eu/what-we-do/sepa-schemes/sepa-direct-debit/sdd-mandate"
                  target="_blank"
                  rel="noopener noreferrer"
                  >Direct Debit Request service agreement</a>
                
              </div>
            </div>
            <div id="error-message" class="sr-field-error" role="alert"></div>
            <button type="submit">
              <div id="spinner" class="hidden"></div>
              <span id="button-text">Subscribe</span>
            </button>
          </form>
        </div>
        <div class="sr-payment-summary hidden completed-view">
          <h1>Your subscription is <span class="order-status"></span></h1>
          <h4>
            <a>View subscription response:</a>
          </h4>
        </div>
        <div class="sr-section hidden completed-view">
          <div class="sr-callout">
            <pre><code></code></pre>
          </div>
          <button onclick="window.location.href='/'">Restart demo</button>
        </div>
      </div>
      
    </div>

</div>


<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">

// parameters ----------
var ivd24Domain = 'https://www.ivd24immobilien.de';

var publishableKey = 'pk_test_51HmKDuHiOF4e4fQZDKYgXrn27ZXWKwi9imILeyZdOXz5lLnXHkyKHjqRMWKP8aoZaXAKASMFU9xAqpfZaJVV9pHU00zrU4Qvvb';

var taxrateId = '';

var basicPriceId = 'price_1I7JDtHiOF4e4fQZWOzBVM5r';
var proPriceId = 'price_1I7JDtHiOF4e4fQZvGsmUhkO';
var basicPriceId2 = 'price_1I7K8JHiOF4e4fQZ7dARyllO';
var proPriceId2 = 'price_1I7IRlHiOF4e4fQZpDHw6QLd';

var basicPriceCouponId = '';
var proPriceCouponId = '';
var basicPriceCouponId2 = '';
var proPriceCouponId2 = '';

// -----------

var stripe, customer, setupIntent, plan;
var signupForm = document.getElementById("signup-form");
var paymentForm = document.getElementById("payment-form");

stripe = Stripe(publishableKey);

var stripeElements = function(priceId, couponId) {
  
  // stripe = Stripe(publishableKey);
  var elements = stripe.elements();

  // Card Element styles
  var style = {
    base: {
      fontSize: "16px",
      color: "#32325d",
      fontFamily:
        "-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, sans-serif",
      fontSmoothing: "antialiased",
      "::placeholder": {
        color: "rgba(0,0,0,0.4)"
      }
    }
  };

  var card = elements.create("card", { style: style });
  card.mount("#card-element");

  // SEPA Debit Element
  var options = {
    style: style,
    supportedCountries: ['SEPA'],
    // Elements can use a placeholder as an example IBAN that reflects
    // the IBAN format of your customer's country. If you know your
    // customer's country, we recommend that you pass it to the Element as the
    // placeholderCountry.
    placeholderCountry: 'DE',
  };

  // Create an instance of the IBAN Element
  var iban = elements.create('iban', options);
  // Add an instance of the IBAN Element into the `iban-element` <div>
  iban.mount('#iban-element');

  for (element of [card, iban]) { // add event to stripe-elements
    // Element focus ring
    element.on("focus", function() {
      var el = document.getElementById(`${element._componentName}-element`);
      el.classList.add("focused");
    });

    element.on("blur", function() {
      var el = document.getElementById(`${element._componentName}-element`);
      el.classList.remove("focused");
    });

    element.on("change", function(event) {
      var displayError = document.getElementById("error-message");
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = "";
      }
    });
  }

  signupForm.addEventListener("submit", function(evt) {
    evt.preventDefault();

    document.getElementById("signup-view").classList.add("hidden");
    document.getElementById("payment-view").classList.remove("hidden");

    // Create customer
    createCustomer().then(result => {
      customer = result.customer;
      setupIntent = result.setupIntent;

      paymentForm.addEventListener("submit", function(evt) {
        evt.preventDefault();
        changeLoadingState(true);

        // Set up payment method for recurring usage
        var payment = paymentForm.querySelector("input[name=payment]:checked").value;
        setupPaymentMethod(priceId, couponId, setupIntent.client_secret, payment, {
          card: card,
          sepa_debit: iban
        });
      });

    });

  });

};

var setupPaymentMethod = function(priceId, couponId, setupIntentSecret, paymentMethod, element) {
  var billingName = document.querySelector("#name").value;
  var billingEmail = document.querySelector("#email").value;

  switch (paymentMethod) {
    case "card":
      stripe
        .confirmCardSetup(setupIntentSecret, {
          payment_method: {
            card: element[paymentMethod],
            billing_details: {
              name: billingName,
              email: billingEmail
            }
          }
        })
        .then(handleResult);
      break;
    case "sepa_debit":
      stripe
        .confirmSepaDebitSetup(setupIntentSecret, {
          payment_method: {
            sepa_debit: element[paymentMethod],
            billing_details: {
              name: billingName,
              email: billingEmail
            }
          }
        })
        .then(handleResult);
      break;
    default:
      console.warn("Unhandled Payment Method!");
      break;
  }

  function handleResult(result) {
    if (result.error) {
      showCardError(result.error);
    } else {
      // Create the subscription
      createSubscription(customer.id, result.setupIntent.payment_method, taxrateId, priceId, couponId);
    }
  }
};

function createCustomer() {
  var billingName = document.querySelector("#name").value;
  var billingEmail = document.querySelector("#email").value;

  return fetch(ivd24Domain + "/profil/makler/konto-aufladen/create-customer", {
    method: "post",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      name: billingName,
      email: billingEmail
    })
  })
    .then(response => {
      return response.json();
    })
    .then(result => {
      return result;
    });
}

function createSubscription(customerId, paymentMethodId, taxrateId, priceId, couponId) {
  return fetch(ivd24Domain + "/profil/makler/konto-aufladen/subscription", {
    method: "post",
    headers: {
      "Content-type": "application/json"
    },
    body: JSON.stringify({
      customerId: customerId,
      paymentMethodId: paymentMethodId,
      taxrateId: taxrateId,
      priceId: priceId,
      couponId: couponId
    })
  })
    .then(function(response) {
      return response.json();
    })
    .then(function(subscription) {
      orderComplete(subscription);
    });
}

function showCardError(error) {
  changeLoadingState(false);
  // The card was declined (i.e. insufficient funds, card has expired, etc)
  var errorMsg = document.querySelector(".sr-field-error");
  errorMsg.textContent = error.message;
  setTimeout(function() {
    errorMsg.textContent = "";
  }, 8000);
}

function showPriceDetails(plan) {
  // Format price details and detect zero decimal currencies
  var amount = plan.unit_amount;
  var numberFormat = new Intl.NumberFormat("de-DE", {
    style: "currency",
    currency: plan.currency,
    currencyDisplay: "symbol"
  });
  var parts = numberFormat.formatToParts(amount);
  var zeroDecimalCurrency = true;
  for (var part of parts) {
    if (part.type === "decimal") {
      zeroDecimalCurrency = false;
    }
  }
  amount = zeroDecimalCurrency ? amount : amount / 100;
  var formattedAmount = numberFormat.format(amount);

  document.querySelector(
    ".order-amount"
  ).innerText = `${formattedAmount} per ${plan.recurring.interval}`;
}

function getConfig(priceId, couponId) {
  return fetch(ivd24Domain + "/profil/makler/konto-aufladen/config?priceId=" + priceId, {
    method: "get",
    headers: {
      "Content-Type": "application/json"
    }
  })
    .then(function(response) {
      return response.json();
    })
    .then(function(response) {
      // Set up UI based on plan details
      showPriceDetails(response.plan);
      // TODO: show payment methods based on currency
      // Set up Stripe Elements
      stripeElements(priceId, couponId);
    });
}

//getConfig(priceId, couponId);

/* ------- Post-payment helpers ------- */

/* Shows a success / error message when the payment is complete */
var orderComplete = function(subscription) {
  changeLoadingState(false);
  var subscriptionJson = JSON.stringify(subscription, null, 2);
  document.querySelectorAll(".sr-form").forEach(function(view) {
    view.classList.add("hidden");
  });
  document.querySelectorAll(".completed-view").forEach(function(view) {
    view.classList.remove("hidden");
  });
  document.querySelector(".order-status").textContent = subscription.status;
  document.querySelector("code").textContent = subscriptionJson;
};

// Show a spinner on subscription submission
var changeLoadingState = function(isLoading) {
  if (isLoading) {
    document.querySelector("#payment-form button").disabled = true;
    document.querySelector("#spinner").classList.add("loading");
    document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("#payment-form button").disabled = false;
    document.querySelector("#spinner").classList.remove("loading");
    document.querySelector("#button-text").classList.remove("hidden");
  }
};

var showPaymentMethods = function() {
  // Listen to changes to the payment method selector.
  for (let input of document.querySelectorAll("input[name=payment]")) {
    input.addEventListener("change", event => {
      event.preventDefault();
      var payment = paymentForm.querySelector("input[name=payment]:checked").value;
      
      // Show the relevant details, whether it's an extra element or extra information for the user.
      paymentForm
        .querySelector(".payment-info.card")
        .classList.toggle("visible", payment === "card");
      paymentForm
        .querySelector(".payment-info.sepa_debit")
        .classList.toggle("visible", payment === "sepa_debit");
    });
  }
};

// showPaymentMethods();

</script>

<script type="text/javascript">
    // Setup event handler to create a Checkout Session when button is clicked
    document
      .getElementById("basic-plan-btn")
      .addEventListener("click", function(evt) {
        getConfig(basicPriceId, basicPriceCouponId);
        showPaymentMethods();
      });

    // Setup event handler to create a Checkout Session when button is clicked
    document
      .getElementById("pro-plan-btn")
      .addEventListener("click", function(evt) {
        getConfig(proPriceId, proPriceCouponId);
        showPaymentMethods();
      });

      // Setup event handler to create a Checkout Session when button is clicked
    document
      .getElementById("basic-plan-btn2")
      .addEventListener("click", function(evt) {
        getConfig(basicPriceId2, basicPriceCouponId2);
        showPaymentMethods();
      });

    // Setup event handler to create a Checkout Session when button is clicked
    document
      .getElementById("pro-plan-btn2")
      .addEventListener("click", function(evt) {
        getConfig(proPriceId2, proPriceCouponId2);
        showPaymentMethods();
      });
	  
	  // Get Url Parameter and display corresponding card
	  /* $( document ).ready(function() {
		  $(".card").each(function() {
			$(this).css({ opacity: 0.5 });
			$(this).find( "button" ).prop("disabled", true);
			});
		  let url = window.location.href;
		  let urlParam = url.split("=")[1];
		  $("#" + urlParam).css({ opacity: 1 });
		  $("#" + urlParam).find( "button" ).prop("disabled", false);
		  
	  }); */
</script>

<style>
  /* Variables */
:root {
  --gray-offset: rgba(0, 0, 0, 0.03);
  --gray-border: rgba(0, 0, 0, 0.15);
  --gray-light: rgba(0, 0, 0, 0.4);
  --gray-mid: rgba(0, 0, 0, 0.7);
  --gray-dark: rgba(0, 0, 0, 0.9);
  --body-color: var(--gray-mid);
  --headline-color: var(--gray-dark);
  --accent-color: #0066f0;
  --body-font-family: -apple-system, BlinkMacSystemFont, sans-serif;
  --radius: 6px;
  --logo-image: url("https://storage.googleapis.com/stripe-sample-images/KAVHOLM.svg");
  --form-width: 343px;
}

/* Base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: var(--body-font-family);
  font-size: 16px;
  color: var(--body-color);
  -webkit-font-smoothing: antialiased;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  color: var(--body-color);
  margin-top: 2px;
  margin-bottom: 4px;
}
h1 {
  font-size: 27px;
  color: var(--headline-color);
}
h4 {
  font-weight: 500;
  font-size: 14px;
  color: var(--gray-light);
}

/* Layout */
.sr-root {
  display: flex;
  flex-direction: row;
  width: 100%;
  max-width: 980px;
  padding: 48px;
  align-content: center;
  justify-content: center;
  height: auto;
  min-height: 100vh;
  margin: 0 auto;
}
.sr-header {
  margin-bottom: 32px;
}
.sr-payment-summary {
  margin-top: 20px;
  margin-bottom: 20px;
}
.sr-main,
.sr-content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: var(--form-width);
  height: 100%;
  align-self: center;
}
.sr-main {
  width: var(--form-width);
}
.sr-content {
  padding-left: 48px;
}
.sr-header__logo {
  background-image: var(--logo-image);
  height: 24px;
  background-size: contain;
  background-repeat: no-repeat;
  width: 100%;
}
.sr-legal-text {
  color: var(--gray-light);
  text-align: center;
  font-size: 13px;
  line-height: 17px;
  margin-top: 12px;
}
.sr-field-error {
  color: var(--accent-color);
  text-align: left;
  font-size: 13px;
  line-height: 17px;
  margin-top: 12px;
}

/* Form */
.sr-form-row {
  margin: 16px 0;
}
label {
  font-size: 13px;
  font-weight: 500;
  margin-bottom: 8px;
  display: inline-block;
}

/* Inputs */
.sr-input,
.sr-select,
input[type="text"] {
  border: 1px solid var(--gray-border);
  border-radius: var(--radius);
  padding: 5px 12px;
  height: 44px;
  width: 100%;
  transition: box-shadow 0.2s ease;
  background: white;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
}
.sr-input:focus,
input[type="text"]:focus,
button:focus,
.focused {
  box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07),
    0 0 0 4px rgba(50, 151, 211, 0.3);
  outline: none;
  z-index: 9;
}
.sr-input::placeholder,
input[type="text"]::placeholder {
  color: var(--gray-light);
}

/* Payment Methods */

#payment-methods {
  margin: 0 0 20px;
  border-bottom: 2px solid #e8e8fb;
}

#payment-methods li {
  display: none;
}

#payment-methods li.visible {
  display: inline-block;
  margin: 0 20px 0 0;
  list-style: block;
}

#payment-methods input {
  display: none;
}

#payment-methods label {
  display: flex;
  flex: 1;
  cursor: pointer;
}

#payment-methods input + label {
  position: relative;
  padding: 5px 0;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 13px;
}

#payment-methods label::before {
  content: "";
  position: absolute;
  width: 100%;
  bottom: -2px;
  left: 0;
  border-bottom: 2px solid var(--accent-color);
  opacity: 0;
  transform: scaleX(0);
  transition: all 0.25s ease-in-out;
}

#payment-methods label:hover {
  color: var(--accent-color);
  cursor: pointer;
}

#payment-methods input:checked + label {
  color: var(--accent-color);
}

#payment-methods label:hover::before,
#payment-methods input:checked + label::before {
  opacity: 1;
  transform: scaleX(1);
}

.payment-info {
  display: none;
}
.payment-info.visible {
  display: block;
}

/* Checkbox */
.sr-checkbox-label {
  position: relative;
  cursor: pointer;
}

.sr-checkbox-label input {
  opacity: 0;
  margin-right: 6px;
}

.sr-checkbox-label .sr-checkbox-check {
  position: absolute;
  left: 0;
  height: 16px;
  width: 16px;
  background-color: white;
  border: 1px solid var(--gray-border);
  border-radius: 4px;
  transition: all 0.2s ease;
}

.sr-checkbox-label input:focus ~ .sr-checkbox-check {
  box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07),
    0 0 0 4px rgba(50, 151, 211, 0.3);
  outline: none;
}

.sr-checkbox-label input:checked ~ .sr-checkbox-check {
  background-color: var(--accent-color);
  background-image: url("https://storage.googleapis.com/stripe-sample-images/icon-checkmark.svg");
  background-repeat: no-repeat;
  background-size: 16px;
  background-position: -1px -1px;
}

/* Select */
.sr-select {
  display: block;
  height: 44px;
  margin: 0;
  background-image: url("https://storage.googleapis.com/stripe-sample-images/icon-chevron-down.svg");
  background-repeat: no-repeat, repeat;
  background-position: right 12px top 50%, 0 0;
  background-size: 0.65em auto, 100%;
}
.sr-select::-ms-expand {
  display: none;
}
.sr-select:hover {
  cursor: pointer;
}
.sr-select:focus {
  box-shadow: 0 0 0 1px rgba(50, 151, 211, 0.3), 0 1px 1px 0 rgba(0, 0, 0, 0.07),
    0 0 0 4px rgba(50, 151, 211, 0.3);
  outline: none;
}
.sr-select option {
  font-weight: 400;
}
.sr-select:invalid {
  color: var(--gray-light);
}

/* Combo inputs */
.sr-combo-inputs {
  display: flex;
  flex-direction: column;
}
.sr-combo-inputs input,
.sr-combo-inputs .sr-select {
  border-radius: 0;
  border-bottom: 0;
}
.sr-combo-inputs > input:first-child,
.sr-combo-inputs > .sr-select:first-child {
  border-radius: var(--radius) var(--radius) 0 0;
}
.sr-combo-inputs > input:last-child,
.sr-combo-inputs > .sr-select:last-child {
  border-radius: 0 0 var(--radius) var(--radius);
  border-bottom: 1px solid var(--gray-border);
}
.sr-combo-inputs > .sr-combo-inputs-row:first-child input:first-child {
  border-radius: var(--radius) 0 0 0;
}
.sr-combo-inputs > .sr-combo-inputs-row:first-child input:last-child {
  border-radius: 0 var(--radius) 0 0;
}
.sr-combo-inputs-row {
  width: 100%;
  display: flex;
}

.sr-combo-inputs-row > input {
  width: 100%;
  border-radius: 0;
}

.sr-combo-inputs > .sr-combo-inputs-row:first-child input:last-child {
  border-radius: var(--radius) var(--radius) 0 0;
}

.sr-combo-inputs-row:not(:first-of-type) .sr-input {
  border-radius: 0 0 var(--radius) var(--radius);
}

/* Buttons and links */
button {
  background: var(--accent-color);
  border-radius: var(--radius);
  color: white;
  border: 0;
  padding: 12px 16px;
  margin-top: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s ease;
  display: block;
}
button:hover {
  filter: contrast(115%);
}
button:active {
  transform: translateY(0px) scale(0.98);
  filter: brightness(0.9);
}
button:disabled {
  opacity: 0.5;
  cursor: none;
}

.sr-form button,
.fullwidth {
  width: 100%;
}

a {
  color: var(--accent-color);
  text-decoration: none;
  transition: all 0.2s ease;
}

a:hover {
  filter: brightness(0.8);
}

a:active {
  filter: brightness(0.5);
}

/* Code block */
.sr-callout {
  background: var(--gray-offset);
  padding: 12px;
  border-radius: var(--radius);
  max-height: 400px;
  max-width: 600px;
  overflow: auto;
}
code,
pre {
  font-family: "SF Mono", "IBM Plex Mono", "Menlo", monospace;
  font-size: 14px;
  overflow-x: auto;
  white-space: pre-wrap;
}

/* Stripe Element placeholder */
.sr-element {
  padding-top: 12px;
}

/* Responsiveness */
@media (max-width: 720px) {
  .sr-root {
    flex-direction: column;
    justify-content: flex-start;
    padding: 48px 20px;
    min-width: 320px;
  }

  .sr-header__logo {
    background-position: center;
  }

  .sr-payment-summary {
    text-align: center;
  }

  .sr-content {
    display: none;
  }

  .sr-main {
    width: 100%;
  }
}

/* Pasha styles – Brand-overrides, can split these out */
:root {
  --accent-color: #ed5f74;
  --headline-color: var(--accent-color);
  --logo-image: url("https://storage.googleapis.com/stripe-sample-images/logo-pasha.svg");
}

.pasha-image-stack {
  display: grid;
  grid-gap: 12px;
  grid-template-columns: auto auto;
}

.pasha-image-stack img {
  border-radius: var(--radius);
  background-color: var(--gray-border);
  box-shadow: 0 7px 14px 0 rgba(50, 50, 93, 0.1),
    0 3px 6px 0 rgba(0, 0, 0, 0.07);
  transition: all 0.8s ease;
  opacity: 0;
}

.pasha-image-stack img:nth-child(1) {
  transform: translate(12px, -12px);
  opacity: 1;
}
.pasha-image-stack img:nth-child(2) {
  transform: translate(-24px, 16px);
  opacity: 1;
}
.pasha-image-stack img:nth-child(3) {
  transform: translate(68px, -100px);
  opacity: 1;
}

/* todo: spinner/processing state, errors, animations */

/* Animated form */

.sr-root {
  animation: 0.4s form-in;
  animation-fill-mode: both;
  animation-timing-function: ease;
}

.sr-form {
  display: block;
}
.sr-form.hidden {
  display: none;
}

.sr-form .sr-form-row {
  animation: 0.4s field-in;
  animation-fill-mode: both;
  animation-timing-function: ease;
  transform-origin: 50% 0%;
}

/* need saas for loop :D  */
.sr-form .sr-form-row:nth-child(1) {
  animation-delay: 0;
}
.sr-form .sr-form-row:nth-child(2) {
  animation-delay: 60ms;
}
.sr-form .sr-form-row:nth-child(3) {
  animation-delay: 120ms;
}
.sr-form .sr-form-row:nth-child(4) {
  animation-delay: 180ms;
}
.sr-form .sr-form-row:nth-child(5) {
  animation-delay: 240ms;
}
.sr-form .sr-form-row:nth-child(6) {
  animation-delay: 300ms;
}

.hidden {
  display: none;
}

.loading {
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 3px solid rgba(255, 255, 255, 0.3);
  border-radius: 50%;
  border-top-color: #fff;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}
@-webkit-keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
  }
}

.sr-plans {
  display: flex;
  width: 600px;
}

.sr-plan {
  border: 1px solid rgb(232, 232, 232);
  border-radius: 6px;
  margin-right: 25px;
  height: 226px;
  width: 257px;
}

.sr-plan-inner {
  margin: 28px;
}

.sr-plan-name {
  color: rgb(166, 166, 166);
  font-size: 20px;
  font-weight: 500;
  letter-spacing: 0px;
}

.sr-plan-text {
  color: rgb(153, 153, 153);
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0px;
  line-height: 14px;
}

.sr-plan-button {
  border: 2px solid rgb(237, 95, 116);
  border-radius: 7px;
}

@keyframes field-in {
  0% {
    opacity: 0;
    transform: translateY(8px) scale(0.95);
  }
  100% {
    opacity: 1;
    transform: translateY(0px) scale(1);
  }
}

@keyframes form-in {
  0% {
    opacity: 0;
    transform: scale(0.98);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

</style>

<?php get_footer(); ?>