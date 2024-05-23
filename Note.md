# Compression Libraries

You will need PHP libraries to handle image compression. Imagick is a popular choice:

## On Hosting providers
Installing Imagick (or any PHP extension) on a shared hosting environment like Hostinger can be a bit different from doing it on a local server like XAMPP because you have less control over the server settings. Here’s how you can manage this:

### 01. Check If Imagick Is Already Installed:
Hostinger sometimes pre-installs popular PHP extensions. You can check if Imagick is available by creating a PHP info file:
Most of the hosting sites sometimes pre-install popular PHP extensions. You can check if Imagick is available by creating a PHP info file:

- Create a new file named phpinfo.php in your root directory.
- Add the following code to the file `<?php phpinfo(); ?>`
- Visit `yourdomain.com/phpinfo.php` in your browser. Use the search function (`Ctrl+F` or `Cmd+F`) to look for "Imagick". If it's listed, the extension is already installed.

### 02. Enable Imagick If Available:

If Imagick is not enabled by default but is installed, you can usually enable it through the cPanel or PHP configuration section on the Hosting provider:
- Log into your Hosting control panel.
- Navigate to the “PHP Configuration” or “Select PHP Version” section.
- Look for the Imagick extension in the list and check its box to enable it.
- Save your changes.

### 03. Contact Support:

If Imagick is not listed in your PHP extensions, it might not be supported on your hosting plan. In this case, contact Hosting support to ask if they can enable it for you or to confirm if it’s possible to use it on your current hosting plan.

## On a Localhost (Using XAMPP)

If you decide to develop locally on XAMPP before deploying to Hostinger, you can install Imagick on your local machine:

### 01. Download the Imagick PHP Extension:
- Find the appropriate Imagick DLL file for your PHP version from a reliable source (like PECL or a similar repository).
- Make sure to choose the thread-safe (TS) or non-thread-safe (NTS) version according to your PHP installation.

### 02. Install Imagick:

- Place the downloaded DLL file in the ext directory of your XAMPP installation (e.g., `C:\xampp\php\ext`).
- Open your `php.ini` file located in the php folder of your XAMPP installation.
- Add the following line to the `php.ini` file: `extension=imagick.so`
- Restart Apache through the XAMPP control panel to apply the changes.

### 03. Verify Installation:
- Repeat the PHP info check by accessing `localhost/phpinfo.php` to confirm Imagick is installed and enabled.

## Considerations

- **Alternative Compression Libraries:** If you can't install Imagick on Hostinger, consider other image optimization tools that can be integrated into your WordPress environment without server-side extensions, like reSmush.it or TinyPNG, which offer APIs and WordPress plugins.

- **Local vs. Production Environments:** Always ensure that your local development environment mirrors your production environment as closely as possible to avoid issues when you move your site from local to live.

