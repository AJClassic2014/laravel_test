#  Test App Instructions

## Server Requirements

- PHP >= 8.2
- Composer >= 2.x
- Node.js == 16.0.0 for npm run dev | >=16 may cause error
- (it's best to run 'npm install' to install dependencies with version 18 and then run 'npm run dev' with version 16)
- Npm/Yarn

## Local Development Installation

1. Git clone to your /srv/www 
2. Copy .env.example to .env. Update your local environment variables in the `.env` file. 

- Database variables
  - `DB_NAME` - Local Database name
  - `DB_USER` - Local Database user
  - `DB_PASSWORD` - Local Database password
  - `DB_HOST` - Local Database host

4. npm install & composer install
5. php artisan migrate --seed
6. php artisan serve & npm run dev (Use Node.js 16 to run npm run dev, unless other versions run without errors)
7. visit 127.0.0.1/8000 or the link presented for backend