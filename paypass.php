<?php
//https://www.jose-aguilar.com/blog/como-implementar-una-pasarela-de-pago-mediante-tarjeta-de-credito-con-php/
//https://stripe.com/docs/api?lang=php
//https://api.stripe.com

\Stripe\Stripe::setApiKey('sk_test_CGGvfNiIPwLXiDwaOfZ3oX6Y');

\Stripe\PaymentIntent::create([
'amount'=> 100,
'currency'=> 'usd',
'payment_method_type' => ['card'],
'receipt_email' => 'ajimenezal01@gmail.com'
]);

?>