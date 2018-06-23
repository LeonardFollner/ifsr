# IFSR.de Rewrite

The goal of this project is to rewrite [ifsr.de](ifsr.de) using a modern CMS.

## Installation
- `git clone`
- `cd website`
- `composer install`
- `cd Packages/Sites/IFSR.HomePage`
- `nvm use`
- `npm install`

## Dev

You'll need 2 processes for development.

In the root directory run  `./flow server:run` to start the dev flow server

And in `Packages/Sites/IFSR.HomePage` run `npm run watch` to compile the styles
