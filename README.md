# IMPORTANT: Before testing
<p>1. Install the PHP QR Code Generator package using Composer. If you don't have Composer, follow the official guide:</p>
<a href="https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos" target="_blank">Linux / Unix / macOS</a><br>
<a href="https://getcomposer.org/doc/00-intro.md#installation-windows" target="_blank">Windows</a>

<p>2. After installing Composer, you should be able to run the following command in a <b>Bash</b> terminal:</p>
<pre>composer require chillerlan/php-qrcode</pre>

<p>3. Once installed, require the <b>autoload.php</b> file inside the <b>vendor</b> folder to load the QR Code generator files. 
The following piece of code should be put in the file that loads all the necessary assets for your project</p>
<pre>require '[REST_OF_PATH]/vendor/autoload.php';</pre>
<p><b>[REST_OF_PATH]</b> indicates the folders/files that are before the <b>vendor</b> folder, if any</p>

<p>4. You will need as well the below class:</p>
<pre>use chillerlan\QRCode\QRCode;</pre>

<p>5. The PHP QR Code Generator package should be available to use now in <b>any file</b> you want to use it, <b>HOWEVER</b>, you
will still need to enable a PHP extension. The way this is done can differ on how you are using PHP (whether you are using
XAMPP, local PHP, etc.). The common steps to do this, regardless of how you are using PHP, are the next ones:</p>
<ul>
<li>Find the directory where the <b>php.ini</b> file is, right-click on it and select "Edit". Example:
on XAMPP, this file is located in <b>C:\xampp\php</b>; on local PHP, the file is located in <b>C:\Program Files\php8.1</b>
(be aware the "php8.1" name will differ if you have another version of PHP)</li>
<li>Once opened, search for the following line: <pre>;extension=gd</pre></li>
<li>Remove the <b>;</b> to uncomment the line and enable the extension: <pre>extension=gd</pre></li>
<li>Save the changes and close the file</li>
<li>Restart your web server to apply the changes. This step is necessary for the new extension to take effect.</li>
</ul>

<p><b>NOTICE: This does NOT have a PHP MVC folder structure, so be aware of this when you implement this to your project!</b></p>

# About this
<p>Based on chillerlan's PHP QR Code Generator. It gives the possibility to generate very easily a QR Code 
users can use to redirect to a URL, trigger a download, etc. Go to the actual documentation of the library for more
information, including Installation process: <a href="https://github.com/chillerlan/php-qrcode#documentation" target="_blank">PHP QR Code generator documentation</a></p>

# License
This project uses the MIT License. You can find more information inside the "LICENSE.md" file or in the following link: <a href="https://opensource.org/license/MIT/" target="_blank">MIT License</a>