# Macfadyen_Flexslider


A Magento 2 module that will allow you to add slider to home page.

Features
The slider utilizes FlexSlider(http://flexslider.woothemes.com/):

Ability to enable/disable the slider


Requirements
Magento 2.1.x

Installation
Copy the contents of the module into your Magento root directory.

Enable the module via the command line:

/path/to/php bin/magento module:enable Macfadyen_Flexslider

Run the compile command and refresh the Magento cache:

/path/to/php bin/magento setup:di:compile

/path/to/php bin/magento cache:clean

Usage

Configure slider settings within Stores -> Configuration -> Macfadyen -> Flexslider -> Enable = yes/no
