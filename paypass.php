<?php
//https://www.jose-aguilar.com/blog/como-implementar-una-pasarela-de-pago-mediante-tarjeta-de-credito-con-php/
//https://stripe.com/docs/api?lang=php
//https://api.stripe.com
//test priv key: sk_test_51K19jHDizxitGBJXKV5vtfbxuUqBayxSwdOkngbO64DKND79xxL3hUfTfPQph8KgSPU5UB3WUaLC7MqEParwV0qH00giHl8AY8
// test pub key: pk_test_51K19jHDizxitGBJXaGyiR3otX9b4JX1eqJwBC3i4IeVcAn4jiLzhRNBqicnRtgnHWW7BwRjkJJNE3sbUWL5GxuhX00SCA66sMZ

\Stripe\Stripe::setApiKey('pk_test_51K19jHDizxitGBJXaGyiR3otX9b4JX1eqJwBC3i4IeVcAn4jiLzhRNBqicnRtgnHWW7BwRjkJJNE3sbUWL5GxuhX00SCA66sMZ');

\Stripe\PaymentIntent::create([
'amount'=> 100,
'currency'=> 'usd',
'payment_method_type' => ['card'],
'receipt_email' => 'ajimenezal01@gmail.com'
]);

?>