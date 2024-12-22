/**
 * Initialize the GooglePay module in the front end.
 * In some cases, this module is loaded when the `window.PayPalCommerceGateway` object is not
 * present. In that case, the page does not contain a Google Pay button, but some other logic
 * that is related to Google Pay (e.g., the CheckoutBootstrap module)
 *
 * @file
 */

import { loadCustomScript } from '@paypal/paypal-js';
import { loadPaypalScript } from '../../../ppcp-button/resources/js/modules/Helper/ScriptLoading';
import GooglepayManager from './GooglepayManager';
import { setupButtonEvents } from '../../../ppcp-button/resources/js/modules/Helper/ButtonRefreshHelper';
import { CheckoutBootstrap } from './ContextBootstrap/CheckoutBootstrap';
import moduleStorage from './Helper/GooglePayStorage';

( function ( { buttonConfig, ppcpConfig = {} } ) {
	const context = ppcpConfig.context;

	function bootstrapPayButton() {
		if ( ! buttonConfig || ! ppcpConfig ) {
			return;
		}

		const manager = new GooglepayManager( buttonConfig, ppcpConfig );
		manager.init();

		setupButtonEvents( function () {
			manager.reinit();
		} );
	}

	function bootstrapCheckout() {
		if ( context && ! [ 'continuation', 'checkout' ].includes( context ) ) {
			// Context must be missing/empty, or "continuation"/"checkout" to proceed.
			return;
		}
		if ( ! CheckoutBootstrap.isPageWithCheckoutForm() ) {
			return;
		}

		const checkoutBootstrap = new CheckoutBootstrap( moduleStorage );
		checkoutBootstrap.init();
	}

	function bootstrap() {
		bootstrapPayButton();
		bootstrapCheckout();
	}

	document.addEventListener( 'DOMContentLoaded', () => {
		if ( ! buttonConfig || ! ppcpConfig ) {
			/*
			 * No PayPal buttons present on this page, but maybe a bootstrap module needs to be
			 * initialized. Skip loading the SDK or gateway configuration, and directly initialize
			 * the module.
			 */
			bootstrap();

			return;
		}

		let bootstrapped = false;
		let paypalLoaded = false;
		let googlePayLoaded = false;

		const tryToBoot = () => {
			if ( ! bootstrapped && paypalLoaded && googlePayLoaded ) {
				bootstrapped = true;
				bootstrap();
			}
		};

		// Load GooglePay SDK
		loadCustomScript( { url: buttonConfig.sdk_url } ).then( () => {
			googlePayLoaded = true;
			tryToBoot();
		} );

		// Load PayPal
		loadPaypalScript( ppcpConfig, () => {
			paypalLoaded = true;
			tryToBoot();
		} );
	} );
} )( {
	buttonConfig: window.wc_ppcp_googlepay,
	ppcpConfig: window.PayPalCommerceGateway,
} );
