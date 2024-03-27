# Fullstack Colossal: Laravel 10, Eloquent, MySQL, Tailwind CSS, jQuery, JavaScript

Collosal is a visually stunning landing page designed for a software house company. With several pages including a home page, services page, about page, and even a blog page, this design is perfect for showcasing the capabilities of the company. The theme is dark with a blurry background and gradient, giving it a glassmorphism effect that is sure to impress. The various pages allow you to highlight the company's services, team, and culture, making it easy for potential clients to get a feel for what you have to offer. With a responsive design that adapts to different screen sizes and devices, Collosal ensures an optimal user experience for all visitors.

## Key Features

- Roles System
- Crud
- MySQL
- Authentication
- Authorization
- Route Management
- Pagination
- File System
- Eloquent ORM
- Tailwind CSS

## Routes

**PUBLIC**
- /home - **GET**
- /projects - **GET**
- /projects/{project} - **GET**
- /quote - **GET**
- /quote - **POST**
- /services - **GET**
- /services/service-detail - **GET**
- /how-we-work - **GET**
- /about - **GET**
- /pricing - **GET**
- /term-of-service - **GET**
- /faq - **GET**
- /contact - **GET**
- /contact - **POST**
- /blogs - **GET**
- /blogs{post} - **GET**
- /blogs/{post}/create-comment - **POST**
- /auth/login - **GET**
- /auth/login - **POST**
- /auth/logout - **POST**

**DASHBOARD**
- /dashboard - **GET**
- /dashboard/posts - **GET**
- /dashboard/posts - **POST**
- /dashboard/posts/create - **GET**
- /dashboard/posts/{post} - **GET**
- /dashboard/posts/{post} - **PUT**
- /dashboard/posts/{post} - **DELETE**
- /dashboard/posts/{post}/edit - **GET**
- /dashboard/settings - **GET**
- /dashboard/settings/update-password/{user} - **PUT**
- /dashboard/settings/update-profile/{user} - **PUT**
- /dashboard/users - **GET**
- /dashboard/users - **POST**
- /dashboard/users/create - **GET**
- /dashboard/users/{user} - **GET**
- /dashboard/users/{user} - **PUT**
- /dashboard/users/{user} - **DELETE**
- /dashboard/users/{user}/edit - **GET**
- /dashboard/sponsors - **GET**
- /dashboard/sponsors - **POST**
- /dashboard/sponsors/create - **GET**
- /dashboard/sponsors/{sponsor} - **GET**
- /dashboard/sponsors/{sponsor} - **PUT**
- /dashboard/sponsors/{sponsor} - **DELETE**
- /dashboard/sponsors/{sponsor}/edit - **GET**
- /dashboard/projects - **GET**
- /dashboard/projects - **POST**
- /dashboard/projects/create - **GET**
- /dashboard/projects/{project} - **GET**
- /dashboard/projects/{project} - **PUT**
- /dashboard/projects/{project} - **DELETE**
- /dashboard/projects/{project}/edit - **GET**
- /dashboard/project-categories - **GET**
- /dashboard/project-categories - **POST**
- /dashboard/project-categories/create - **GET**
- /dashboard/project-categories/{project_category} - **GET**
- /dashboard/project-categories/{project_category} - **PUT**
- /dashboard/project-categories/{project_category} - **DELETE**
- /dashboard/project-categories/{project_category}/edit - **GET**
- /dashboard/testimonials - **GET**
- /dashboard/testimonials - **POST**
- /dashboard/testimonials/create - **GET**
- /dashboard/testimonials/{testimonial} - **GET**
- /dashboard/testimonials/{testimonial} - **PUT**
- /dashboard/testimonials/{testimonial} - **DELETE**
- /dashboard/testimonials/{testimonial}/edit - **GET**
- /dashboard/faqs - **GET**
- /dashboard/faqs - **POST**
- /dashboard/faqs/create - **GET**
- /dashboard/faqs/{faq} - **GET**
- /dashboard/faqs/{faq} - **PUT**
- /dashboard/faqs/{faq} - **DELETE**
- /dashboard/faqs/{faq}/edit - **GET**
- /dashboard/faq-categories - **GET**
- /dashboard/faq-categories - **POST**
- /dashboard/faq-categories/create - **GET**
- /dashboard/faq-categories/{faq_category} - **GET**
- /dashboard/faq-categories/{faq_category} - **PUT**
- /dashboard/faq-categories/{faq_category} - **DELETE**
- /dashboard/faq-categories/{faq_category}/edit - **GET**
- /dashboard/quotes - **GET**
- /dashboard/quotes/{quote} - **GET**
- /dashboard/quotes/{quote} - **PUT**
- /dashboard/quotes/{quote} - **DELETE**


## Cloning The Repository

```bash
git clone https://github.com/weiwei2694/laravel10-colossal.git
cd laravel10-colossal
```

## Install packages

*package*
```bash
npm install
yarn install
pnpm install
bun install
```

*composer*
```bash
composer install
composer update
```

## Setup .env File
For setting up your environment variables, you can start by copying the `.env.example` file to create your `.env` file. The `.env.example` file typically contains examples or placeholders for the environment variables your application needs. To simplify this process, you can use the following command:
```bash
cp .env.example .env
```
This command will duplicate the `.env.example` file and create a new file named `.env`, allowing you to fill in the actual values for your environment variables.

After creating your `.env` file, ensure that your Laravel application is ready to run smoothly by executing the following command to generate an application key:
```bash
php artisan key:generate
```
This command will generate a unique key for your application, which is essential for security and encryption purposes.

Next, make sure that the database configuration in your .env file points to your MySQL database. Update the `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` variables with the appropriate values for your MySQL database setup.


To configure email-related features in your Laravel application, you need to ensure that the `MAIL_MAILER` variable in your `.env` file is appropriately set. Begin by accessing your `.env` file and locating the `MAIL_MAILER` variable. If it's not present, add it to the file. Set the value of `MAIL_MAILER` according to your email service provider's specifications. Common values include `smtp`, `sendmail`, `mailgun`, or `ses`. Ensure that other email-related variables such as `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION`, `MAIL_FROM_ADDRESS`, and `MAIL_FROM_NAME` are also properly configured based on your email service provider's settings. Once you've configured these variables, your Laravel application will be ready to send emails using the specified email service.

## Setting Up Default Data

To set up default data, you can use the following command:
```bash
php artisan migrate:fresh --seed
php artisan storage:link
```

## Running Applications

To start your application, make sure to follow the steps below:

1. **Styling with Tailwind CSS**: Before running the application, ensure you have prepared the styling using Tailwind CSS. Run the following command to compile your assets:
   ```bash
   npm run dev
   ```
   This will ensure that the user interface of your application is styled properly using Bootstrap.
   
2. **Starting the Server**: After ensuring the styling has been applied, you can start the Laravel PHP server by running the command:
   ```bash
   php artisan serve
   ```
   Make sure to run the command in a separate terminal. This will start your local development server and make your application accessible through your web browser.

By following these steps, you can start running your application and access it through your web browser for further development. Happy exploring and developing your application!.
