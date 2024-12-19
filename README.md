# Goscho.ch Website Theme


## How to run
1. This is just the theme. You need to run a local Wordpress environment. E.g. with [Local](https://localwp.com/). 
2. Ths theme is based on [_s starter theme](https://underscores.me/). Read their documentation.
3. Export data and plugins from live site. E.g. using a plugin like [All in One Migration.](https://wordpress.org/plugins/all-in-one-wp-migration/). Choose "Export to file" and make sure you search and replace all goscho.ch results with goscho.local.
4. Import on local environment using the same plugin.
5. Good to go for development. There is no frontend build pipeline in place. Sass files will automatically be converted by a WP plugin.