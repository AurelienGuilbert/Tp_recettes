## Technologies
Project has been created with:
symfony : 5.0.9
node : v16.14.2
"vue": "^2.6.14",
"vue-loader": "^15.9.8",
"vue-router": "^3.5.4",

## setup
cd ..
npm install
npm install vue@2.6.14
npm install vue-router@3.5.4
npm install vue-loader vue-template-compiler
npm install axios

composer require symfony/webpack-encore-bundle
npm install @symfony/webpack-encore --save-dev

## launch 
npm run dev-server
php -S 127.0.0.1:8000 -t public
http://localhost:8000/
