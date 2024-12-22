<?php
/**
 * The save payment methods module services.
 *
 * @package WooCommerce\PayPalCommerce\SavePaymentMethods
 */

declare(strict_types=1);

namespace WooCommerce\PayPalCommerce\SavePaymentMethods;

use WooCommerce\PayPalCommerce\SavePaymentMethods\Endpoint\CreatePaymentToken;
use WooCommerce\PayPalCommerce\SavePaymentMethods\Endpoint\CreateSetupToken;
use WooCommerce\PayPalCommerce\SavePaymentMethods\Endpoint\CreatePaymentTokenForGuest;
use WooCommerce\PayPalCommerce\SavePaymentMethods\Helper\SavePaymentMethodsApplies;
use WooCommerce\PayPalCommerce\Vendor\Psr\Container\ContainerInterface;

return array(
	'save-payment-methods.eligible'                      => static function ( ContainerInterface $container ): bool {
		$save_payment_methods_applies = $container->get( 'save-payment-methods.helpers.save-payment-methods-applies' );
		assert( $save_payment_methods_applies instanceof SavePaymentMethodsApplies );

		return $save_payment_methods_applies->for_country_currency();
	},
	'save-payment-methods.helpers.save-payment-methods-applies' => static function ( ContainerInterface $container ) : SavePaymentMethodsApplies {
		return new SavePaymentMethodsApplies(
			$container->get( 'save-payment-methods.supported-country-currency-matrix' ),
			$container->get( 'api.shop.currency' ),
			$container->get( 'api.shop.country' )
		);
	},
	'save-payment-methods.supported-country-currency-matrix' => static function ( ContainerInterface $container ) : array {
		return apply_filters(
			'woocommerce_paypal_payments_save_payment_methods_supported_country_currency_matrix',
			array(
				'AU' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'AT' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'BE' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'BG' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'CA' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'CN' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'CY' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'CZ' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'DK' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'EE' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'FI' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'FR' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'DE' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'GR' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'HU' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'IE' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'IT' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'LV' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'LI' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'LT' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'LU' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'MT' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'NO' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'NL' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'PL' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'PT' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'RO' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'SK' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'SI' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'ES' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'SE' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'GB' => array(
					'AUD',
					'BRL',
					'CAD',
					'CHF',
					'CZK',
					'DKK',
					'EUR',
					'GBP',
					'HKD',
					'HUF',
					'ILS',
					'JPY',
					'MXN',
					'NOK',
					'NZD',
					'PHP',
					'PLN',
					'SEK',
					'SGD',
					'THB',
					'TWD',
					'USD',
				),
				'US' => array(
					'AUD',
					'CAD',
					'EUR',
					'GBP',
					'JPY',
					'USD',
				),
			)
		);
	},
	'save-payment-methods.module.url'                    => static function ( ContainerInterface $container ): string {
		/**
		 * The path cannot be false.
		 *
		 * @psalm-suppress PossiblyFalseArgument
		 */
		return plugins_url(
			'/modules/ppcp-save-payment-methods/',
			dirname( realpath( __FILE__ ), 3 ) . '/woocommerce-paypal-payments.php'
		);
	},
	'save-payment-methods.endpoint.create-setup-token'   => static function ( ContainerInterface $container ): CreateSetupToken {
		return new CreateSetupToken(
			$container->get( 'button.request-data' ),
			$container->get( 'api.endpoint.payment-method-tokens' )
		);
	},
	'save-payment-methods.endpoint.create-payment-token' => static function ( ContainerInterface $container ): CreatePaymentToken {
		return new CreatePaymentToken(
			$container->get( 'button.request-data' ),
			$container->get( 'api.endpoint.payment-method-tokens' ),
			$container->get( 'vaulting.wc-payment-tokens' )
		);
	},
	'save-payment-methods.endpoint.create-payment-token-for-guest' => static function ( ContainerInterface $container ): CreatePaymentTokenForGuest {
		return new CreatePaymentTokenForGuest(
			$container->get( 'button.request-data' ),
			$container->get( 'api.endpoint.payment-method-tokens' )
		);
	},
);
