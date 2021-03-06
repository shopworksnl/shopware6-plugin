# 0.3.0
- Added messages for Order Finished page: for Pending - "Payment is being verified by administrator"; For Paid - "Payment successful!"
- Added descriptions from API for certain PMs
- Added functionality for choosing a bank issuer for iDeal
- Added "KVK/COC Number" field and placeholder "Enter your COC number" for  a default billing address (for Belgium and the Netherlands)
- Added functionality of canceling an order. After that, a link to "Change Payment Method" appears
- Added translations for "Order" label in transaction data for the Dutch language, edited translations for English and German languages
- Added new icons for PMs
- Added functionality of deleting PM icons from the Shopware storage when Uninstalling plugin
- Added the option of changing the Order Transaction Status from "In Progress" to "Authorize" or "Verify"
- Added functionality if PAY. Transaction status is "Pending" - set Order Transaction Status "In Progress"
- Added DoB to transaction data
- Corrected labels for Save/Change Payment Method buttons
- Fixed the bug on Edit Order page in Admin Panel
- Bug fixes, minor code improvements

# 0.2.3
- Added Shopware and Plugin version to transaction data
- Added text to order description for clarification

# 0.2.2
- Added uploading payment methods icons to media files
- For the checkout form, we have added Save/Close buttons on the right side of payment methods at the payment methods modal
- Put Pay. transactions module as the entry point of Orders
- Added validation fields highlights for required plugin settings fields; also checking if credentials are valid

# 0.2.1
- Added vendor prefixes for all custom components
- Added separate page for plugin configuration
- Removed some unnecessary files
- Minor code style fixes

# 0.1.0
- Implemented support for all payment methods by Pay.nl for Shopware v6.1
- Tested on these Shopware versions: 6.1.0, 6.1.1, 6.1.2, 6.1.3, 6.1.4, 6.1.5
