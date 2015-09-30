# To Checkout
Webasyst Shop-Script plugin
<p>
    <img src="https://www.webasyst.com/wa-data/public/baza/products/img/87/1887/icon.200x110.en_US.png" alt="Logo" />
</p>
<p>
    As soon as the buyer puts something in the basket, he is redirected to the checkout.
</p>

# Installing a plugin
<p>
    Extract the contents of the archive containing plugin's files into any empty folder on your computer and upload the extracted contents to wa-apps/shop/plugins/tocheckout directory on the web server. Replace app_id by the id of the app for which the plugin was developed. Once uploading is completed, a new subdirectory will appear inside wa-apps/shop/plugins/, containing plugin's files and named by the plugin id (tocheckout).
</p>
<p>
    Add plugin id to configuration file wa-config/apps/shop/plugins.php in the form of a line shown below:
</p>
<p>
    'tocheckout' => true,
</p>
<p>
    Clear cache in Installer.
</p>