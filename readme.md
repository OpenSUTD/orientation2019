# OLETHROS – SUTD Orientation 2019

## About this repository

This repository houses both the front-end product of the Orientation Website (front-facing landing page), and the backend that handles queries to/from the Telegram Bot server for the Orientation Bot.

This project is built on the [Laravel PHP framework](https://laravel.com/) and self-hosted on a LAMP stack.

## Getting around this repository

I published this repository on openSUTD in hope that someone else would be able to study this and gain insights. Here are some starting points depending on what you're interested in.

### Frontend (website)
If you're only interested in studying the HTML/CSS/JS of the landing page, look at the following files and folders:

- `resources/views/welcome.blade.php` – ignore the .blade.php extension and anything in the file that doesn't look like HTML.
- `resources/sass` – for the CSS assets. I used the [SASS CSS preprocessor](https://sass-lang.com/).
- `resources/js` – for the JS assets.  Dependencies managed with [npm](https://www.npmjs.com/) and compiled with webpack (laravel gulp).

### Backend (telegram bot)
Coming soon.

## Settings up your own copy
You need to set up a stack that is capable of meeting [Laravel's requirements](https://laravel.com/docs/5.7/installation). I used a monolithic LAMP stack on [Google Cloud Compute](https://cloud.google.com/compute/) but you are free to do whatever you want as long as it works.

Clone this repository into your server directory:

```bash
git clone opensutd/orientation2019
```

As with all Laravel setups, you need to point your web server's DocumentRoot into the `public` subfolder, *not* the root of the project.

Install PHP dependencies with composer:

```bash
composer install
```

Install JS dependencies with npm:

```bash
npm install
```

Setup environment variables: Create a new file `.env` by copying `.env.example`:

```bash
cp .env.example .env
```

Then, with your text editor, you need to populate these variables inside your newly created environment file:

- `APP_URL` – URL of where your project is hosted
- `TELEGRAM_BOT_TOKEN` – your Telegram API's bot token
- `TELEGRAM_ENDPOINT_SECRET` – a random string, this is the path where you will instruct the [Telegram Bot API](https://core.telegram.org/bots/api) to send webhook updates to.
- `GMAPS_API_KEY` – API Key obtained from [Google Cloud Platform Maps Embed API](https://developers.google.com/maps/documentation/embed/start), in order to display the embedded maps in the homepage correctly.
- `DB_*` – Database connection details.
The other variables can be ignored.

Laravel setups: perform migrations and database and generate encryption keys:
```bash
php artisan migrate
php artisan key:generate
```

Finally, compile frontend assets: (replace `dev` with `prod` if you want to minify and stuff)
```bash
npm run dev
```

If laravel complains about "unable to open stream" in logs, you need to `chown` and `chmod` your `storage/logs` directory and give your web server account the correct permissions.

In addition, for your telegram bot to receive the webhook updates correctly, you need to tell the Telegram Bot API that the location of the webhook is at `https://<yourdomain>.com/telegram/<TELEGRAM_ENDPOINT_SECRET>`. Example [here](https://medium.com/@xabaras/setting-your-telegram-bot-webhook-the-easy-way-c7577b2d6f72).

## Frequently asked questions

### Who made this?
See Credits section below.

### Why PHP?
~~Because I don't know how to do it in Python~~ Because I don't want to perpetuate the current mindset in SUTD that Python is the magical cure-all for every single problem and application. And also the Laravel ORM is lit af.

### But PHP sucks-
Ok.

### Can I use this as a base for my own orientation/activity/project?
Yes, as long as you practise common sense and follow the License.

## Credits
- Orientation 2019 Committee – general event organisation
  - Jeslyn Ng, Class of 2021
  - Evan Sidhi, Class of 2021
  - Philia Neo, Class of 2021
  - ... some others I never seen
- Orientation 2019 Creative Subcommittee - house conceptualisation and logo designs
  - Diane Lee, Class of 2021
  - Sesila Fenina Gunawan, Class of 2021
  - Hazel , Class of 2021
  - Yu Bing, Class of 2021
  - ... some others who didn't give their names to me
- Dev Team - tank the software side
  - [Chester Koh](https://github.com/chesnutcase), Class of 2021
  - ... damn it's lonely in here