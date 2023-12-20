Underscore TW
=============

A custom theme based on \_tw

## Quickstart

### WordPress Installation
- Run your local server with DB server
- Install WordPress instance on your local server
- In case you want to use WP CLI:
```
$ mkdir your-project-name
$ cd your-project-name
$ wp download
// Set `wp-config.php` file for DB info and more
// or
// (wp config create --dbname=your_database_name --dbuser=your_database_user --dbpass=your_database_password)
$ wp db create
$ wp server
``` 

### Installation

1. Move this folder to `wp-content/themes` in your local development environment
2. Run `npm install && npm run dev` in this folder
3. Run `composer update` in the same folder
4. Activate this theme in WordPress

### Development

4. Run `npm run watch`
5. Add [Tailwind utility classes](https://tailwindcss.com/docs/utility-first) with abandon

### Deployment

6. Run `npm run bundle`
7. Upload the resulting zip file to your site using the “Upload Theme” button on the “Add Themes” administration page

Or [deploy with the tool of your choice](https://underscoretw.com/docs/deployment/#h-other-deployment-options)!

## Full Documentation

### Fundamentals

* [Installation](https://underscoretw.com/docs/installation/)  
  Generate your custom theme, install it in WordPress and run your first Tailwind builds
* [Development](https://underscoretw.com/docs/development/)  
  Watch for changes, build for production and learn more about how _tw, WordPress and Tailwind work together
* [Deployment](https://underscoretw.com/docs/deployment/)  
  Share your new WordPress theme with the world
* [Troubleshooting](https://underscoretw.com/docs/troubleshooting/)  
  Find solutions to potential issues and answers to frequently asked questions

### In Depth

* [Using Tailwind Typography](https://underscoretw.com/docs/tailwind-typography/)  
  Customize front-end and back-end typographic styles
* [JavaScript Bundling with esbuild](https://underscoretw.com/docs/esbuild/)  
  Install and bundle JavaScript libraries (very quickly)
* [Linting and Code Formatting](https://underscoretw.com/docs/linting-code-formatting/)  
  Catch bugs and stop thinking about formatting

### Extras

* [On Tailwind and WordPress](https://underscoretw.com/docs/wordpress-tailwind/)  
  Understand how WordPress and Tailwind work together
* [Managing Styles for Custom Blocks](https://underscoretw.com/docs/custom-blocks/)  
  Learn strategies for using Tailwind in theme-specific custom blocks
* [Setting Up Browsersync](https://underscoretw.com/docs/browsersync/)  
  Add live reloads and synchronized cross-device testing to your workflow

## BONUS

### Live Reload SASS(/JS) & TAILWIND(/PHP)
To compile/watch for sass and js changes with Tailwind related changes, cd into **public_html/wp-content/themes/underscore-tw** and run **npm run dev && npm run watch**. If you've just pulled down the repo, make sure to run **npm install** first.

All js files are to be created under **public_html/wp-content/themes/underscore-tw/javascript/utils**, while all scss files are to be created under **public_html/wp-content/themes/underscore-tw/theme/sass**, then imported in **style.scss** file.

On executing **npm run watch**, Browser-Sync will allow developer to see the live reload view with any `css`, `js`, and `php` changes on `localhost:3030` (port could differ if port `3030` is already being used). You can adjust the port in **public_html/wp-content/themes/underscore-tw/node_scripts/browsersync.js**.

### SHARE CURRENT LOCAL DEV STATUS (optional)
Go to [ngrok](https://ngrok.com/) page. Then sign up and download/install the app. Type the line below on your terminal:
```
ngrok http 3030 // This port 3030 example is for our Browser-Sync case above.
```
For more info, visit their [Docs](https://ngrok.com/docs/getting-started) page.